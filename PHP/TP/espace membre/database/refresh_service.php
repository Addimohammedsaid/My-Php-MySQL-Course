<?php

require("../global.php");

$pdo = connect_db();

$sql = "CREATE TABLE users(
    id SERIAL,
    username TEXT,
    email TEXT,
    password TEXT,
    create_at DATE
    );";

    $pdo->exec($sql);


?>