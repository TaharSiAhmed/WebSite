
<?php
    try
      {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8','root','root');
      }
      catch(Exception $e)
      {
        // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
      }

// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video

//$reponse = $bdd->query('SELECT * FROM adherent');
//$reponse->exec();
// On affiche chaque entrée une à une

$reponse = $bdd->prepare('SELECT * FROM adherent');
$reponse->execute();
$donnees = $reponse->fetch();
//$res =serialize($donnees);
header("location: AfficherUsers.php?variable=".$res);
/*while ($donnees = $reponse->fetch()){
  $i++;
  //echo 'Adherent numero :'.$i.'-----'.$donnees['Nom'] .'  '.$donnees['Prenom'];
  header("location: AfficherUsers.php?variable=".$donnees);
  ?> </br>
  <?php
  ;}
//header("location: AfficherUsers.php?v=".$donnees);
*/
/*{
?>
    <p>
     <?php //echo $donnees['Nom']; ?>
     <?php //echo $donnees['Prenom']; ?>
     <?php //echo $donnees['telephone']; ?>
     <?php header("location: AfficherUsers.php?variable=".$donnees); ?>
   </p>

<?php
}*/
$reponse->closeCursor(); // Termine le traitement de la requête
?>
