<?php

require("../global.php");

if(isset($_POST["submit"]))
{
    echo "work";

    $pass_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);    

    $sql = "INSERT INTO users(username,password,create_at) VALUES(:username, :password,CURDATE())";

    $pdo = connect_db();

    $req = $pdo->prepare($sql);

    $req->execute(array(
        "username" => $_POST["username"],
        "password" => $pass_hash,                
    ));

    echo "fin";
}

?>


<?php html_shared("header",["title"=>"Inscription"]); ?>

<h1> Page Inscription</h1>

<form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST" >
    <div class="form-group">
        <label for="">Nom d'utilisateur</label>
        <input type="text" name="username" class="form-control" required>        
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">        
    </div>
    <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control" required>        
    </div>
    <div class="form-group">
        <label for="">Confirmer Mot de passe</label>
        <input type="password" name="passwordConfirm" class="form-control" required>        
    </div>
    <input type="submit" value="S'inscrire" class="btn" name="submit">
</form>

<?php html_shared("footer") ?>
    
