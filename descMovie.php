<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // --------------- APPEL REPONSE GET ------------------?>
<?php                     $id = $_GET['id'] ?>
<?php // =================================================== ?>
<?php // ------------- APPEL DE MEs FONCTIONS ---------------?>
<?php           $film = getMoviesById($id, $connexion);      ?>
<?php       $allComments = getAllComments($id, $connexion);  ?>
<?php $getMediasByMovie = getMediasByMovie($id, $connexion); ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Description du film : <strong><span class="text-warning"><?php echo $film['title']; ?></span></strong></h1>
        <hr />
        <!-- J'affiche le synopsis du film -->
        <!-- J'affiche l'image du film' -->
        <div class="col-lg-offset-1 col-lg-3">
          <div class="thumbnail">
            <div class="panel-heading panel-primary">
              <h3>Affiche du film</h3>
            </div>
            <img src='<?php echo $film["image"] ?>' class="img-responsive thumbnail" />
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel-heading panel-primary">
            <h3 class="text-center">synopsis</h3>
          </div>
          <div class="well">
            <div class="panel-body">
              <blockquote class="text-info text-center"><?php echo $film['synopsis']; ?></blockquote>
            </div>
          </div>
        </div>

  

        <!-- J'affiche le tableau avec différentes informations -->
        <div class="col-lg-7">
          <div class="well">
            <div class="panel panel-body panel-primary">
              <table class="table-bordered table-striped table-condensed table-hover text-center" width="100%">
                <tr>
                  <th class="thTitle text-center">budget</th>
                  <th class="thTitle text-center">type</th>
                  <th class="thTitle text-center">durée</th>
                  <th class="thTitle text-center">langue</th>
                  <th class="thTitle text-center">distributeur</th>
                  <th class="thTitle text-center">Sortie</th>
                </tr>
                <tr>
                  <td><?php echo $film['budget']; ?>€</td>
                  <td><?php echo $film['type']; ?></td>
                  <td><?php echo $film['duree']; ?>h</td>
                  <td><?php echo $film['languages']; ?></td>
                  <td><?php echo $film['distributeur']; ?></td>
                  <td><?php echo $film['date_release']; ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!-- J'affiche la description du film -->
        <div class="col-lg-offset-2 col-lg-8">
          <div class="thumbnail">
            <h3>Description</h3>
            <q><?php echo $film['description']; ?></q>
          </div>
        </div>





      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
