<?php

    session_start();

    $nom = $_SESSION['nom'];
    $email = $_SESSION['email'];

    //print_r($_SESSION);

    // supprimer de la session
    unset($_SESSION['nom']);

    // $nom = isset($_SESSION['nom']) ? $_SESSION['nom']:"inviter";

    // Vider toute la session
    session_destroy();

    // !! remarque 
    // Memoire cache cache s'expire 
    // Tandis que la session reste mémoriser jusqu'a ca fermeture
    // la session est stocker dans la serveur alors que cookies dans le navigateur
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h3>Votre nom d'utilisateur :</h3>
    <h4><?php echo $nom;?></h4>    
    <h3>Votre email :</h3>
    <h4><?php echo $email ?></h4>
</head>
<body>
    
</body>
</html>