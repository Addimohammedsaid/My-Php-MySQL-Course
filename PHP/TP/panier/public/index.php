<?php
require("../bootstrap.php");
require("../config/db.php");

$db = new DB();

$sql = "SELECT * FROM products";

$rep = $db->pdo->prepare($sql);

$rep->execute();

//var_dump($rep->fetchAll(PDO::FETCH_OBJ));

$products = $rep->fetchAll(PDO::FETCH_OBJ);

?>

<?php html_shared("header"); ?>    
    <h1>List Produits</h1>    
    <?php foreach($products as $product ): ;?>
    <div class="box">
        <img src="../assets/images/<?= $product->id; ?>.jpg" width="200">
        <div class="description"> 
        <strong>
            <?= $product->name; ?></strong>
            <p><?= number_format($product->prix,2,',',' '); ?></p>
            <a href="<?= 'add_cart.php?id='.$product->id ?>">Ajouter</a>
        </div>
    </div>
    <?php endforeach ; ?>
<?php html_shared("footer"); ?>

   
