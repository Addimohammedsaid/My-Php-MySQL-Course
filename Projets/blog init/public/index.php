  <?php 

   // Partie base de données
   include('../shared/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    }

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
            <article class="card">
                <div class="card-header">                    
                    <img src="https://kinsta.com/wp-content/uploads/2018/05/what-is-php-3-1.png"                    
                     class="avatar card-avatar">
                    <div class="author">
                        <div class="card-title">Mon Pseudo</div>
                        <div class="card-date">10 min</div>
                    </div>                    
                </div>
                <div class="card-body">                       
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint obcaecati illo, praesentium ullam laudantium aliquid.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="likes"><span>0</span> likes</div>
                    <div class="comments"><span>0</span> Comments </div>
                </div>                
            </article>            
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