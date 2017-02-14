<?php
//'Location: http://monsite.com?page=xxx&id='.$var.'
//header ("Location:commandevalidee.php?VARtotal=".$Total.")";
  $pdo = new PDO('mysql:host=localhost;dbname=website;charset=utf8','root','root');
  $sql = 'SELECT * FROM adherents';
  $req = $pdo->query($sql);

?>
<table class="table table-bordered">
<tr>
    <th><p class="text-error">Nom</p></th>
    <th><p class="text-error">Prénom</p></th>
    <th><p class="text-error">mail</p></th>

</tr>
<tr>
  <?php while($row = $req->fetch()) { ?>
        <td><?php echo $row['Nom']; ?></td>
        <td><?php echo $row['Prenom']; ?></td>
        <td><?php echo $row['mail']; ?></td>
</tr>
<? }

$req->closeCursor();
?>
</table>
