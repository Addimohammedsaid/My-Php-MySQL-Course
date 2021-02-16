
<?php
    if(isset($_POST['submit'])){
        // Init de la Session
        session_start();
        // Definir les valeurs 
        $_SESSION['nom'] = htmlentities($_POST['nom']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        // Rediréction vers une autre page
        header('location: page2.php');
        // remarque :  location(pas d'espace ici): chemin
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <form action="" method="post">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" placeholder="Nom" name="nom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email">
        </div>
        <br>
        <input type="submit" name="submit" value="Envoyer" class="btn">
    </form>
</body>
</html>