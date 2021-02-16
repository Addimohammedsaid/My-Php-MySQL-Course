<div class="php-echo">
  <br>
  <?php 

    // Partie base de données
    include('../shared/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

      // Partie récupération des données
      $email = $_POST['email'];

      $password = $_POST['password'];

      $sql = "SELECT * FROM users WHERE email = ?";

      $query = $pdo->prepare($sql);

      $query->execute(array($email));

      $result = $query->fetch();

      // comparaison du pass envoyé via le formulaire avec la base
      $isPasswordCorrect = password_verify($password, $result["password"]);

      $id = $result["id"];

      if($isPasswordCorrect) {                
        setcookie('id', $id);       
        header('Location: ./index.php');
      }

    }

  ?>
</div>

<?php include("../inc/header.php") ?>
    <div class="form-container">
      <div class="form-wrap">
        <h1>Connectez-vous</h1>
        <p>Bon retour parmis nous</p>
        <form method="post">
          <div class="form-group">
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" required/>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" required/>
          </div>
          <div style="margin-top: 20px;">
            <button class="btn btn-accent form-control" type="submit"><a href="./index.php">Se Connecter</a></button>
          </div>
          <div class="form-group small-text">
            <p>
                En cliquant sur le bouton Inscription, vous acceptez nos
              <a href="#">Terms & Conditions</a> et
              <a href="#">Privacy Policy</a>
            </p>
          </div>
        </form>
      </div>
    </div>                
    <div class="nav-auth">
      Si vous n'avez pas de compte inscrivez-vous <a href="./register.php"> ICI</a>
    </div>  
<?php include("../inc/footer.php") ?>
