<?php
try
  {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8','root','root');
    echo 'connecion faite';
  }
  catch(Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
  }

?>
<p> on va recuperer du formulaire</p>
<?php

  $mail = $_POST['mail'];
  $password = $_POST['password'];


/////////////////////////////////////////////////////////////////////////
$requete=$bdd->prepare('select Password from adherent where "mail=$mail" as $mal ');
//$requete=$bdd->prepare('select Password from adherent where mail=:mail and Passwrod=:password');
//$requete->bindParam(:mail,$mail);
//$requete->bindParam(:password,$password);
$array=$requete->execute();
echo $array['$mal'];

/*
if(is_empty($array)){
echo "sahto";

}else{
echo "sahito" ;

}
echo 'connecion faite';*/
/*
  while ($donnees = $reponse->fetch())
  {
      if( $donnees['Password'] != $password){
         header('Location: /pages/connexion.php');
      }else
       header('Location: /pages/espceAdherent.php');
  }*/
  $reponse->closeCursor(); // Termine le traitement de la requête
  ?>
