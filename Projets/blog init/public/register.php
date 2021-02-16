<div class="php-echo">
  <br>
  <?php 
     // Partie base de données
     include('../shared/config.php');

     if($_SERVER["REQUEST_METHOD"] == "POST"){
 
     } 

  ?>
</div>


<?php include("../inc/header.php") ?>    
    <div class="form-container">
      <div class="form-wrap">
        <h1>Inscrivez-vous</h1>
        <p>Ca ne prend que quelques minutes</p>
        <form method="post">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" autocomplete="none" name="firstname" />
          </div>
          <div class="form-group">
            <label for="prenom">Prenom</label>
            <input class="form-control" type="text" autocomplete="none" name="lastname" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" />
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" required/>
          </div>
          <div style="margin-top: 20px;">
            <button class="btn btn-accent form-control" type="submit">S'incrire</button>
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

      <div class="nav-auth">
        Si vous déja un compte connectez-vous <a href="./login.php"> ICI</a>
    </div>
    
    <?php include("../inc/footer.php") ?>
