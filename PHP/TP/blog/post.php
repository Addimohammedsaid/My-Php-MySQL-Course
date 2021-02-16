<?php
    require("./config/config.php");

    $title = "Post";

    if(isset($_POST["delete"])){
        $delete_id = htmlspecialchars($_POST["delete_id"]);
        echo $delete_id;

        $sql = "DELETE FROM posts WHERE id = ?";
    
        $resp = $pdo->prepare($sql);
    
        $resp->execute(array($delete_id));

        $resp->closeCursor();
        
        header("location: index.php");
    }

    $sql = "SELECT * FROM posts WHERE id = ?";
    
    $resp = $pdo->prepare($sql);

    $id = filter_var($_GET["id"] ?? null,FILTER_VALIDATE_INT);
    
    $resp->execute(array($id));
    
    $donnes = $resp->fetch();

    if($donnes == false){
        http_response_code(404);
        html_inc("404");
        die();
    }

?>

<?php $resp->closeCursor() ?>

<?php include("././inc/header.php") ?>

<div class="container py-5">
    <h1 class="text-primary">Post</h1>        
        <div class="card my-4 bg-light">            
        <div class="card-body">         
        <h5 class="card-title"><?php echo $donnes["title"]; ?></h5>                       
            <p class="card-text"><?php echo $donnes["body"];?></p>
            <a href="edit_post.php?id=<?php echo $donnes["id"]; ?>" class="btn btn-primary">Editer</a>    
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <input class="btn btn-danger" value="Supprimer" name="delete" type="submit" />
            <input value="<?php echo $donnes["id"]?>" name="delete_id" type="hidden" />
            </form>                                             
        </div>
        </div>
</div>
<?php include("./inc/footer.php") ?>
