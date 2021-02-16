<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice | Page Secrete</title>
</head>
<body>
    <form action="secret.php" method="post">
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="name" place="Nom d'utilisateur">            
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password" place="Mot de passe">            
        </div>
        <br>
        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>