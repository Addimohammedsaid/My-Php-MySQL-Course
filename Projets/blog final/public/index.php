  <?php 

   // Partie base de données
   include('../shared/config.php');

   if(!isset($_COOKIE['id'])){ 
        header('location: ./login.php');
   }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

      // Partie récupération des données
      $body = $_POST['body'];           

      $sql = "INSERT INTO posts (username_id, message) VALUES (?, ?)";

      $query = $pdo->prepare($sql);

      $result = $query->execute(array($_COOKIE["id"], $body));

      header ('Location: ' . $_SERVER['REQUEST_URI']);

      exit();

    }


    $sql = "SELECT * FROM posts ORDER BY create_at DESC";

    $query = $pdo->prepare($sql);

    $query->execute();

    $posts = $query->fetchAll();

  ?>

<?php include("../inc/header.php") ?>   
<?php include("../inc/nav.php") ?> 
    <div class="container blog">
        <div class="sidebar">
            <nav>
                <a href="#"> <span>&#8962; </span> Fil d'actualité</a>
                <a href=""><span>&#9000;</span> Message</a>
                <a href="#"><span>&#9872;</span> Evénement</a>
                <a href="#"> Groupe</a>
                <a href="#">Amis</a>
            </nav>
        </div>
        <main>            
            <div class="form-publish">
                <form method="POST" >
                    <div class="form-group">
                        <label for="body">Ajouter une publication</label> 
                        <input name="body" class="form-control" placeholder="Que voulez-vous dire ?">                        
                    </div>               
                    <div class="form-group">
                        <button type="submit" class="btn btn-accent">Publier</button>
                    </div>
                </form>
            </div>

            <?php foreach($posts as $post): ;?>                
            <article class="card">
                <div class="card-header">                    
                    <img src="https://kinsta.com/wp-content/uploads/2018/05/what-is-php-3-1.png"                    
                     class="avatar card-avatar">
                    <div class="author">
                        <div class="card-title">Mon Pseudo</div>
                        <div class="card-date"><?php echo $post['create_at']?></div>
                    </div>                    
                </div>
                <div class="card-body">                       
                    <p>
                    <?php echo $post["message"] ?>
                    </p>
                </div>
                <div class="card-footer">
                    <div class="likes"><span>0</span> likes</div>
                    <div class="comments"><span>0</span> Comments </div>
                </div>                
            </article>

            <?php endforeach;?>
        </main>
        <aside class="info">
            <h2>Sugesstions</h2>
            <ul>
                <li>
                    <article>

                    </article>
                </li>
            </ul>
        </aside>
    </div>    
<?php include("../inc/footer.php") ?>  