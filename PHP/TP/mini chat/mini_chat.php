<?php
$host = "localhost";
$dbname = "test";
$path = "root";
$password = "";

try{
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$path,$password);
}catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

$name = "";
$message = "";

if(isset($_POST["submit"])){
    $name = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);

    $sql = "INSERT INTO mini_chat(username,message) VALUES (?,?)";
    $req = $bdd->prepare($sql);
    $req->execute(array($name,$message));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> MINI CHAT | APP</title>
</head>
<body>
<div class="container py-5">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>"
    method = "POST">    
        <div class="form-group">
            <label for="name">Nom d'utilisateur</label>
            <input class="form-control" type="text" placeholder="Nom d'utilisateur" name="name">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" type="text" placeholder="Message" name="message"></textarea>
        </div>
        <br>
        <button class="btn btn-primary" type="submit" name="submit">Envoyer</button>
    </form>
    </div>

    <?php 
        $sql = "SELECT * FROM mini_chat";
        $req = $bdd->query($sql);                        
    ?>

    <div class="container">
    <ul class="list-group">
    <?php while($line = $req->fetch(PDO::FETCH_OBJ)): ;?>                  
            <li class="list-group-item"><strong><?php             
              echo $line->username ?></strong>   
            <p><?php echo $line->message; ?></p>
            </li>        
    <?php endwhile; ?>
    </ul>        
    </div>
</body>
</html>