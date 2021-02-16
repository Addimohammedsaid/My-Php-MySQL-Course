<?php
    if(isset($_POST['submit'])){
        $nom = htmlentities($_POST['nom']);

        // avec une temporisation 1 heure
        setcookie('nom',$nom,time()+3600);

        header('location: page2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" placeholder="Votre nom" name="nom">
    <input type="submit" name="submit" value="Envoyer">
    </form>
</body>
</html>