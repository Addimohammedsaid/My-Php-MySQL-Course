<?php
    require("./config/config.php");

    if(isset($_POST["submit"])){
        $id = htmlspecialchars($_POST["id"]);
        $titre = htmlspecialchars($_POST["titre"]);
        $contenu = htmlspecialchars($_POST["contenu"]);
        $autheur = htmlspecialchars($_POST["autheur"]);  

        $sql = "UPDATE posts SET title = :title, body = :body,  author = :author WHERE id = :id";            
    
        $resp = $pdo->prepare($sql);

        $resp->execute(array(
            "id" => $id,
            "title" => $titre,
            "body" => $contenu,
            "author" => $autheur,
        ));       
        

        $count = $resp->rowCount();

        $resp->closeCursor();

        header("location: index.php");
    }

    $sql = "SELECT * FROM posts WHERE id = ?";
    
    $resp = $pdo->prepare($sql);
    
    $resp->execute(array($_GET["id"]));    

    $donnes = $resp->fetch();    

    $resp->closeCursor();
    
?>

<?php include("././inc/header.php") ?>
<div class="container py-5">
<h1 class="text-center">Editer Post</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" class="form-control" placeholder="Titre"                              
                name="titre"
                value="<?php echo $donnes["title"]; ?>"
                >
            </div>
            <div class="form-group">
                <label for="">Autheur</label>
                <input type="text" class="form-control" placeholder="Nom de l'autheur"
                name="autheur"
                value="<?php echo $donnes["author"]; ?>"
                >
            </div>
            <div class="form-group">
                <label for="">Contenu</label>
                <textarea  class="form-control" placeholder="" name="contenu"                
                ><?php echo $donnes["body"]; ?></textarea>
            </div>         
            <br>
            <input type="hidden" value="<?php echo $donnes["id"]; ?>" name="id">
            <input type="submit" class="btn btn-primary" value="Envoyer" name="submit">
            <input type="submit" class="btn btn-danger" value="Annuler">
        </form>
</div>
<?php include("././inc/footer.php") ?>