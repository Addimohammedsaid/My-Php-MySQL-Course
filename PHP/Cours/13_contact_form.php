<?php
    // Message Vars
    $msg = '';
    $msgClass = "";
    if(filter_has_var(INPUT_POST,"submit")){
        // recupérer les donnes
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        if(!empty($email) && !empty($nom) && !empty($message)){            
            // verification de email
            if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
                // erreur
                $msg = "email non valide";
                $msgClass = "alert-danger";
            }else {
                //passe
                $aEmail = "entreprise@gmail.com";
                echo "Passe";              
            }            
        }else {
            // erreur
            $msg = "Veuillez Remplir le forumlaire";
            $msgClass ="alert-danger";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Form de Contact</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">Nouveau Site web</a>     
  </div>
</nav>  
    <main style="padding-top:2rem">
    <div class="container">
    <?php
        if($msg != ""):
    ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>        
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" placeholder = "nom" id="nom" name="nom"  class="form-control"
                    value ="<?php echo isset($_POST['nom']) ? $nom : ""; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" placeholder = "email" id="email" name="email"  class="form-control"
                    value ="<?php echo isset($_POST['email']) ? $email : ""; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" placeholder = "message" id="message" name="message"  class="form-control"                    
                    ><?php echo isset($_POST['message']) ? $message : ""; ?></textarea>  
                </div>
                <button type="submit" name="submit" class="btn btn-primary">
                    Envoyer
                </button>
            </form>
        </div>
    </main>
</body>
</html>