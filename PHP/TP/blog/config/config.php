<?php

$host = "localhost";
$dbname = "phpblog";
$path = "root";
$password = "";

function html_inc($page){
    header("location: ././inc/$page.php");
}

try{    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$path,$password);    
}catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

?>