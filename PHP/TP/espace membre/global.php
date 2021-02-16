<?php

function html_shared($path,$params=[])
{
     extract($params);            
     require(__DIR__."./shared/$path.html.php");
}

function connect_db(){
     $host = "localhost";
     $dbname = "shop";
     $password = "";
     $root = "root";
     
     try {   
         $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $root, $password);
     
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
         return $pdo;
 
     } catch(PDOException $e) 
     {
         echo $e->getMessage();  
     }
 }
 

?>