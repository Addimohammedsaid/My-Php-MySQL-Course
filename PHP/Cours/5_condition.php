<?php 
    # CONDITIONALS
    /*
        ==  ; egalité
        === ; egalité par type
        <   ; inférieur 
        >   ; superieur 
        <=  ; inférieur ou égale
        >=  ; superieur ou égale
        !=  ; non-egale
        !== ;
    */

    $num = '5';

    if($num == 5){
        echo '5 passe le teste';
    }else {
        echo "ne passe pas";
    }


    
    

    # Switch 

    $favColor = "red";

    switch($favColor){
        case 'rouge':
            echo "Ta Couleur préférer est rouge";
        break;
        case 'blue':
            echo "Ta Couleur préférer est blue";
        break;
        case 'vert':
            echo "Ta Couleur préférer est vert";
        break;
        default:
            echo "une autre couleur";
    }
?>