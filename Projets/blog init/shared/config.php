<?php 

$host = "localhost";
$dbname = "phpblog";
$path = "root";
$pwd = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8",$path, $pwd);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

?>