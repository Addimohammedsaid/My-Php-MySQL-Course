<?php

require("../global.php");

if(isset($_POST["submit"]))
{
    echo "work";      

    $sql = "SELECT id,password from users WHERE username = :username";

    $pdo = connect_db();

    $req = $pdo->prepare($sql);

    $req->execute(array(
        "username" => $_POST["username"],        
    ));

    $result = $req->fetch();

    // comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST["password"],$result["password"]);

    if(!$result){
        echo 'Mauvais identifiant ou mot de passe !';
    }else{
        if($isPasswordCorrect){
            session_start();
            $_SESSION["id"] = $result["id"];
            $_SESSION["username"] = $_POST["username"];
            echo "vous étes connecté";
        }
        else echo 'Mauvais identifiant ou mot de passe !';
    }

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
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control" required>        
    </div>    
    <input type="submit" value="S'inscrire" class="btn" name="submit">
</form>

<?php html_shared("footer") ?>
    
