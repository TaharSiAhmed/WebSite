<?php
try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8','root','root');
    echo 'connecion faite';
  }
  catch(Exception $e)
  {
  die('Erreur : '.$e->getMessage());
  }

$requete = $bdd->query('SELECT * FROM adherent');
//$reponse->execute();
$data = $requete->fetch();
$requete ->CloseCursor();
?>
