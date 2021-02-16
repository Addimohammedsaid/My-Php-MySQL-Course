<?php    
    require("./config/config.php");

    $title = "Mon Blogger";

    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $res = $pdo->query($sql);    
?>

<?php include("././inc/header.php") ?>

    <div class="container py-5">
        <h1 class="text-primary">Blog</h1>    
        <?php while($line = $res->fetch(PDO::FETCH_ASSOC)): ;?>
            <div class="card my-4 bg-light">            
            <div class="card-body">         
            <h5 class="card-title"><?php echo $line["title"]; ?></h5>                       
                <p class="card-text"><?php echo $line["body"];?></p>
                <a href="post.php?id=<?php echo $line["id"]; ?>" class="btn btn-primary">Voir Plus</a>                         
            </div>
            </div>
    <?php endwhile;  ?>
    </div>

    <?php $res->closeCursor(); ?>
<?php include("././inc/footer.php") ?>
