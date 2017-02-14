<html>
<?php include('../statique/header.php') ; ?>
<body>
  <div class="section section-info transparent-style text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form role="form" action ="../traitements/traiteInscription.php" method="post">
            <div class="form-group">
              <label class="control-label" for="nom">Nom </label>
              <input class="form-control input-sm" name="nom" placeholder="Enter name" type="text">
            </div>
            <div class="form-group">
              <label class="control-label" for="prenom"> Prenom</label>
              <input class="form-control input-sm" name="prenom" placeholder="prenom" type="text">
            </div>
            <div class="form-group">
              <label class="control-label" for="mail">Email address</label>
              <input class="form-control input-sm" name="mail" placeholder="Enter email" type="text">
            </div>
            <div class="form-group">
              <label class="control-label" for="telephone">Telephone</label>
              <input class="form-control input-sm" name="telephone" placeholder="telephone" type="text">
            </div>
             <div class="form-group"><label class="control-label" for="password">Password</label>
             <input class="form-control input-sm" name="password" placeholder="Password" type="password">
            </div>
            <div class="form-group">
              <label class="control-label" for="confirmation">confirmation</label>
              <input class="form-control input-sm" name="confirmation" placeholder="confirmation" type="password">
            </div>
            <button type="submit" class="btn btn-block btn-info btn-xs">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="fullcarousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="../ressources/fond.png">
        <div class="carousel-caption">
          <h2>Title</h2>
          <p>Description</p>
        </div>
     </div>
   </div>
     </div>
     <?php include('../statique/footer.php') ; ?></body></html>
