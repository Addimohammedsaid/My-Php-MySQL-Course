<?php

#Function - Un Appel a un block de code 
/*  
    Camel Case - maFonction()
    lower Case - ma_fonction()    
*/

// Création de la fonction
function fonctionSimple(){
    echo 'Bonjour';
}
// L'appel a une fonction
fonctionSimple();

// fonction avec paramétre
function ditBonjour($nom){
    echo "Bonjour $nom<br>";
}

ditBonjour("Hichem");

// Autre Example
function addition($num1,$num2){
    echo $num1+$num2;
}

//
addition(100,200);

?>