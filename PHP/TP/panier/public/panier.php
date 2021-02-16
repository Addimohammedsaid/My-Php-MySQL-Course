<?php
require("../config/db.php");
require("../config/panier.php");
require("../bootstrap.php");

$panier = new Panier();
$db = new DB();

if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}

$ids = array_keys($_SESSION['panier']);

if(!empty($ids)){

    $sql = 'SELECT * FROM products WHERE id IN ('.implode(',',$ids).')';

    $products = $db->query($sql);

}else $products = array();

$total = $panier->total($products);

?>


<?php html_shared("header"); ?>
<h1>Panier</h1>    
    <span>Nombre : <?= $panier->count() ?></span>
    <?php foreach($products as $product ): ;?>
    <div class="box">
        <img src="../assets/images/<?= $product->id; ?>.jpg" width="200">
        <div class="description"> 
        <strong>
            <?= $product->name; ?></strong>
            <p><?= number_format($product->prix,2,',',' '); ?></p>
            <p>Quantité : <strong><?= $_SESSION['panier'][$product->id] ?></strong></p>
            <a href="<?= 'panier.php?del='.$product->id ?>">Supprimer</a>            
        </div>
    </div>
    <?php endforeach ; ?>
    <p>Total : <strong><?= number_format($total,2,',',' '); ?></strong></p>
<?php html_shared("footer"); ?>

