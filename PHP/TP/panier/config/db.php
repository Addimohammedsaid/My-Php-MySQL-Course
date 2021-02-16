<?php

class DB{
    private $host = "localhost";
    private $dbname = "shop";
    private $password = "";
    private $user = "root";

    public $pdo;

    public function __construct(){
        try
        {
            $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';
            charset=utf8',$this->user,$this->password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }
        catch(EXCEPTION $e)
        {
            die ($e->getMessage());
        }        
    }

    public function query($sql,$data = array())
    {
        $req = $this->pdo->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}


?>