<?php
// Se Connecter a PDO
// le nom de l'hôte, la base de donnée, le login, le mot de passe,
$host = "localhost";
$base= "test";
$utilisateur = "root";
$motdepasse =  "";

$bdd = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $utilisateur, $motdepasse);
?>

<?php
    // En cas d'erreur :    
    try {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $utilisateur, $motdepasse);
    }catch (Exception $e){
        die('Erreur :'.$e->getMessage());
    }
?>

<?php 
    # Requête : 
    $reponse = $bdd -> query("SELECT * FROM jeux_video");

    # Affichage de la requête :    
    while($line = $reponse->fetch(PDO::FETCH_ASSOC)){
        // echo $line['nom']."<br>";        
    }   
    
    # A la fin du traitment d'une requête
    $reponse->closeCursor();
?>


<?php 
    # Requête (Where): 
    $reponse = $bdd -> query("SELECT * FROM jeux_video WHERE possesseur='Florent'");

    # Affichage de la requête :    
    while($line = $reponse->fetch(PDO::FETCH_ASSOC)){        
        // echo $line['nom']." appartient à ".$line['possesseur']."<br>";        
    }   
    
    # A la fin du traitment d'une requête
    $reponse->closeCursor();
?>


<?php
    # Prepare & Execute

    # Positional 
    $sql = "SELECT * FROM jeux_video Where id = ? ";

    $req = $bdd->prepare($sql);    

    $req->execute(array($_GET['id']));

    echo '<ul>';

    while($line = $req->fetch()){
        echo '<li>'.$line['nom'].'qui appartient à'.$line['possesseur'].'</li>';
    }

    echo '</ul>';

    #named
    $sql = "SELECT * FROM jeux_video Where id =:id";

    $req = $bdd->prepare($sql);    

    $req->execute(['id'=>($_GET['id'])]);

    echo '<ul>';

    while($line = $req->fetch()){
        echo '<li>'.$line['nom'].'qui appartient à'.$line['possesseur'].'</li>';
    }

    echo '</ul>';

    # Multiple     
     $sql = "SELECT * FROM jeux_video Where possesseur = ? AND prix <= ? ";

     $req = $bdd->prepare($sql);    
 
     $req->execute(array($_GET['possesseur'],$_GET['prix']));     
    
     echo '<h3>'.$_GET['possesseur'].'</h3>';

     echo '<ul>';
     while($line = $req->fetch()){                           
         echo '<li>'.$line['nom'].'<strong>Prix :</strong>'.$line['prix'].'</li>';
     }
     echo '</ul>'

?>


<?php 
    #INSERT
     $nom = "Avengers";
     $possesseur = "Sarah";

     $sql = "INSERT INTO jeux_video(nom,possesseur) VALUES (:nom,:possesseur)";

     $req = $bdd->prepare($sql);
     $req -> execute(array(
         "nom" => $nom,
         "possesseur" => $possesseur,
     ));

     echo "le jeux a bien éte ajouté ";

?>


<?php #UPDATE   
   $prix = 10;
   $nom = "Avengers";

   $sql = "UPDATE jeux_video SET prix = :prix WHERE nom = :nom";
   $req = $bdd->prepare($sql);

   $req -> execute(array(
       "nom" => $nom,
       "prix" => $prix,       
   )); 

   // retourne le nombre de ligne 
   $count = $req->rowCount();
   
   echo '<br>';
   echo $count."ont été modifiées !";
?>



<?php #DELETE
    $nom = "Avengers";

    $sql = "DELETE FROM jeux_video WHERE nom = :nom";
    $req = $bdd->prepare($sql);

    $req -> execute(array(
        "nom" => $nom,    
    )); 

    // retourne le nombre de ligne 
    $count = $req->rowCount();
    echo '<br>';

    echo $count."ont été supprimées !";
?>

<?php
    #Erreur MySQL
    $reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo()));

?>