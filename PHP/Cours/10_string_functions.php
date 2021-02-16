<?php
#substr()
# sous-trait de la chaine de charactere

$result = substr('Hello', 1, 3);
echo $result;


#strlen()
# donne le nombre de charactere
$result = strlen('Hello world');
echo $result;

#strpos()
#retourne la position d'un charactere
$result = strpos("Hello World","o");
echo $result;


#trim()
# enleve les espaces et le retourne dans un tableau
$result = trim('Helo World             ');
var_dump($result);


?>