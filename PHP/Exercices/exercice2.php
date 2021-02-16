// 1)
<?php
$sexe = "homme";

if($sexe=="homme") print ("Vous pouvez réserver seulement les après-midi.");
?>

// 2)
<?
    $num1 = 53; $num2 = 22;

    if($num1 > $num2) echo "le plus grand nombre est $num1";
    else echo "le plus grand nombre est $num2";
    
?>

// 3)
<?
$num1 = 53; $num2 = 22; $num3 = 28;
$max = 0;

if($num1 > $num2 && $num1 > $num3) $max = $num1;
else if($num2 > $num1 && $num2 > $num3) $max = $num2;
else $max = $num3;

echo "$max est le nombre maximum";

?>


// 4)