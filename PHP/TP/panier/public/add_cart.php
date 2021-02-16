<?php
require("../config/db.php");
require("../config/panier.php");

if(isset($_GET["id"])){    

    $db = new DB();

    $panier = new Panier();

    $sql = "SELECT id FROM products WHERE id =:id";

    $array = array(
        'id' => $_GET["id"],
    );

    $product = $db->query($sql,$array);    

    if(empty($product)){
        die("ce produit n'existe pas");
    }        
    
    $panier->add($product[0]->id);


    die("produit a étais ajouter");

}else {
    die("aucun produit ajouter au panier");
}


?>