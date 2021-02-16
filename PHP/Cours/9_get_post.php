<?php
    //echo $_GET['name']; erreur
    // vérifie si ca existe avant
    if(isset($_GET['name'])){
        echo $_GET['name']; 
    }
    if(isset($_GET['email'])){
        print_r($_GET);
    }
    if(isset($_GET['name'])){
        echo htmlentities($_GET['name']); 
    }

    // data sent throw the header not the url
    if(isset($_POST['name'])){
        echo htmlentities($_POST['name']); 
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Nouveau Site Web</title>
</head>
<body>
<div class="container py-4">
    <form action="" method="POST">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name">
        </div>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email">
        </div>
        <button type="submit" class="btn btn-default">Envoyer</button>        
    </form>    
</body>
</html>