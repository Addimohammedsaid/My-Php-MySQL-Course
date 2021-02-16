<?php 

// Les boucles execute un code répétivement sur un nombre définis de fois

// 4 type de boucle :
 /* 
    For 
    While 
    Do While
    Foreach
 */

  # For loop
  # @param - init, condition, inc
    for($i = 0;$i<10;$i++){
        echo $i;
        echo '<br>';
    }

  # While loop
  # @param - condition
   $i = 0;   
    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }

  # Do while - tjr s'éxecute une fois de plus
  # @param - condition
  $i = 0;
  do{
    echo $i;
    echo "<br>";
    $i++;
  }while($i<10);
    
  # For each - boucle pour parcourire un tableau
  $gens = array('Hichem','Walid','Sarah');

  foreach($gens as $person){
      echo $person;
      echo '<br>';
  }

  // Associative
  $gens = array('Hichem'=> 'hichem2020@gmail.com','Walid'=>'Walid2019@gmail.com','Sarah'=>'sarah2020@outlook.fr');
  foreach($gens as $person => $email){
    echo $person.':'.$email;
    echo '<br>';
  }

  
?>