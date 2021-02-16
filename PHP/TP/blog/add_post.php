<?php
require("./config/config.php");

$errors = [];

if(isset($_POST["submit"])){

    if(empty($_POST["title"]))
    {
        $errors["title"]= "le titre est obligatoire";
    }

    if(empty($_POST["body"]))
    {
        $errors["body"]= "le body est obligatoire";
    }

    if(empty($errors))
    {
            $title = htmlspecialchars($_POST["title"]);
            $body = htmlspecialchars($_POST["body"]);
            $author = htmlspecialchars($_POST["author"]);

            $sql = "INSERT INTO posts(title,body,author) VALUES (?,?,?)";    

            $resp = $pdo->prepare($sql);    
            $resp->execute(array($title,$body,$author));    
    }
}

?>

<?php include("././inc/header.php"); ?>
    <div class="container py-5">
        <h1 class="text-center">Crée Un Post</h1>        
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" class="form-control" name="title"
                value = "<?php echo $_POST['title'] ?? ""?> "
                >
                <?php if(isset($errors['title'])): ?>
                <div class="alert alert-danger">                
                    <?php echo $errors['title'] ?>                
                </div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="">Autheur</label>
                <input type="text" class="form-control" 
                name="author"
                >
            </div>
            <div class="form-group">
                <label for="">Contenu</label>
                <textarea  class="form-control" name="body"
                ><?php echo $_POST['body'] ?? ""?></textarea>
                <?php if(isset($errors["body"])): ?>
                        <div class="alert alert-danger">
                            <?php echo $errors['body'] ?>
                        </div>
                <?php endif;?>
            </div>         
            <br>
            <input type="submit" class="btn btn-primary" value="Envoyer" name="submit">
            <input type="submit" class="btn btn-danger" value="Annuler">
        </form>
    </div>
<?php include("././inc/footer.php"); ?>