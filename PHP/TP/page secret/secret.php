<?php 
    if(isset($_POST["submit"])){
        $nom = htmlentities($_POST["name"]);
        $motdepasse = htmlentities($_POST["password"]); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice | Page Secret</title>
</head>
<body>
    <?php        
        if($nom == "admin" && $motdepasse == "admin"): ?>
            <h1>Vous étes Connecter</h1>  
        <?php else: ?>        
            <h1> Mot de passe ou email Invalide <h1>                 
    <?php endif; ?>                
</body>
</html>