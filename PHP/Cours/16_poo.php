<?php

class Personne{

    /* Access Modifier 
     private : 
     public :  
     protected :
    */
    
    public $name; // mauvaise pratique

    private $email;  // make it private and access it with an method 

    public static $age = 30;

    public static function getAge(){
        return self::$age;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    // s'exécute a la création de l'objet
    // public function __construct(){
    //     echo 'une personne à étais crée';
    // }

    
    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }

    public function __destruct(){
        echo '<br>'.__CLASS__.' détruit';
    }
}

// $personne1 = new Personne; // intiate

// $personne1->name = "Mohamed";

// echo '<br>'.$personne1->name;

// // error private
// //$personne1->email = "mohamed@email.com";

// $personne1->setEmail("mohammed@email.com");

// echo '<br>'.$personne1->getEmail();

 $personne2 = new Personne("salima","salima@email.com");


// Héritage

Class Client extends Personne {
    private $fond;

    public function setFond($fond){
        $this->fond = $fond;
    }

    public function getFond(){
        return $this->fond;
    }    

    public function __construct($name,$email,$fond){
        parent::__construct($name,$email);
        $this->fond = $fond;
    }
}


$client1 = new Client("ahmed","ahmed@email.com",100);
echo $client1->getFond();
echo '<br>';
echo $client1->getEmail();
echo '<br>';
echo Personne::$age;
echo '<br>';
echo Personne::getAge();

?>