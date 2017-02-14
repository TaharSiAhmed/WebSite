<html>
 <?php include('../statique/headerAdmin.php');?>
        <body>
        <div  style="color:red ;background-color: whaite; height:150px;padding-top:60px"><h2 style="text-align:center">  Listes des Adherents </h2></div>

        <div>
          <table bgcolor="red" width="100%" border="2" align-text="center">
        <tr>
        <th rowspan="1" class="col-md-1" style="text-align:center"><H3>  Identifiant</H3></th>
        <th rowspan="1" class="col-md-1" style="text-align:center"><H3>  Nom</H3></th>
        <th rowspan="1" class="col-md-1" style="text-align:center"><H3>  Prenom</H3></th>
        <th rowspan="1" class="col-md-1" style="text-align:center"><H3>  Telephone</H3></th>
        <th rowspan="1" class="col-md-2" style="text-align:center"><H3>  Mail</H3></th>
        <th rowspan="1" class="col-md-3" style="text-align:center"><H3>  Remarques</H3></th>
        </tr>
        <?php
          // while($row = mysql_fetch_array($donnees))
            $rr = unserialize($res);
            while ($row = $res->fetch()){
            $row = array_values($res);
            $i++;
            {
            ?>
            <tr>
                <th><?php echo $row['Id'];?></th>
                <th><?php echo $row['Nom'];?></th>
                <th><?php echo $row['Prenom'];?></th>
                <th><?php echo $row['telephone'];?></th>
                <th><?php echo $row['mail'];?></th>
                <th><?php echo $row['Remarques'];?></th>
            </tr>
            <?php
            }
            ?>
      </table>
    </div>
      <!--  <div id="carousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../ressources/fond.png">
                    <div class="carousel-caption">
                        <h2>La flamme</h2>
                        <p>eternelle</p>
                    </div>
                </div>
            </div>
        </div>
        <?php // include('../statique/footer.php'); ?> -->
                </body></html>
