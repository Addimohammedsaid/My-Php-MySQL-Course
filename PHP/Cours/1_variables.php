hello

<?php

//Commentaire en un seul ligne

/*
    Commentaire Multiline 
*/

# en utilsant le hashtag

// fonction d'affichage 
print "Hello Wolrd";

// Echo est un peux plus rapide que print
echo "hello";

// Déclarer une variable
/*
    - Prefixer avec $
    - débute avec une letter ou un "_"
    - Sensible au majiscule et aux minscule 
*/

$sortie = "Hello World";
echo $sortie;

// Les Data types
/* 
    String
    Integers
    Floats
    Booleans    
    Array => Tableau
    Objects
    NULL    
*/

$sortie = "Hello World";
$integers = 4;
$floats = 4.4;
$boolean = false;

// Operation 
$num1 = 3;
$num2 = 4;
$sum = $num1 + $num2;
echo $sum;

// Chaine de caractére + variable
echo "La somme est de $sum";
echo 'la somme est de '.$sum.' $';

// concatenation 
$string1 = 'Hello';
$string2 = 'World';
$string3 = $string1 + $string2;
// ou 
$string3 = $string1 .''. $string2;
// ou
$string3 = "$string1 $string2";

echo $string3;

// escape ' ou " 
$string3 = 'c\'est Mehdi';

// Constant 
define('BONJOUR','Bonjour a tous');

echo BONJOUR;

echo bonjour;//en aura une erreur 

// ajouter un 3éme paramétre true
define('BONJOUR','Bonjour a tous',true);

echo bonjour;// minscule ou majuscule 

?>