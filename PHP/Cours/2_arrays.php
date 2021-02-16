<?php
    #Array - une variable qui peut contenir plusieurs valeurs
    /* 3 type :
        - Indexer 
        - Associative
        - Multi-dimensional
    */

    ## Tableau indexer
    $etudiant = array('Walid','Hichem','Sarah');    
    echo $etudiant[1];

    // ou
    $note = [10,20,14,12,"8"];
    echo $note[3];
    
    // avec [ ]
    $voitures = ['Renault','Toyota','Ford'];

    // Ajouter a la fin du tableau
    $voitures[] = 'BMW';

    // exemple de fonction attacher au tableau 
    // count => donne le nombre d'elements dans un tableau
    echo count($voitures);

    // affiche tous les elements du tableau
    print_r($voitures);

    // affiche les elements et leurs index
    var_dump($voitures);


    ## Tableau associative 
    $personnes = array('Hichem' => 35, 'Sarah' => 32, 'Walid' => 29);
    echo $personnes['Walid'];

    $ids = [22 => 'Hichem', 33=>"Sarah", 63=>"Walid"];
    echo $ids[22];

    $personnes["Hichem"] = 32;    
    print_r($personnes);


    ## Tableau a Mutli-Dimension
    $voitures = array(
        array('Honda',20,10),
        array('Renault',13,4),
        array('Toyota',19,4),
    ); 

    echo $voitures[0][0];
    echo $voitures[0][1];
    echo $voitures[0][2];
?>  