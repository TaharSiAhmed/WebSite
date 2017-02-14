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

?>
<p> on va recuperer du formulaire</p>
<?php
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  $confirmation = $_POST['confirmation'];
  //envoi vers la base de données
  $bdd->exec('INSERT INTO `adherent`(`Nom`, `Prenom`, `Id`, `telephone`, `Password`,`mail`) VALUES ("'.$nom.'","'.$prenom.'", \'Id\',"'.$telephone.'","'.$password.'","'.$mail.'")');
  echo 'Le jeu a bien été ajouté !';
?>
