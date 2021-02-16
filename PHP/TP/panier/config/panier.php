<?php

class Panier{

    public function __construct()
    {           
        // init session
        if(!isset($_SESSION)){
            session_start();                
        }
        // init session panier
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();             
        }        
    }

    public function add($product_id){       
        if(isset($_SESSION['panier'][$product_id]))      
        $_SESSION['panier'][$product_id]++;
        else $_SESSION['panier'][$product_id] = 1;
    }

    public function total($products){        
        $total = 0;
        foreach($products as $product){
            $total += $product->prix * $_SESSION["panier"][$product->id];
        }
        return $total;
    }

    public function del($product_id){                
        unset($_SESSION['panier'][$product_id]);
    }

    public function count(){
        return array_sum($_SESSION['panier']);
    }

}


?>