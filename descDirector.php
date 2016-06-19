<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // --------------- APPEL REPONSE GET ------------------?>
<?php                     $id = $_GET['id']                  ?>
<?php // =================================================== ?>
<?php // ------------- APPEL DE MES FONCTIONS ---------------?>
<?php           $film = getMoviesById($id, $connexion);      ?>
<?php       $directors = getDirectorById($id, $connexion);   ?>
<?php               $flag = $directors['nationality'];       ?>
<?php                  $sex = $directors['sex'];             ?>
<?php                  $note = $directors['note'];            ?>
<?php $etoiles = "<img src='assets/img/etoiles.png' alt='étoiles' height='50px' width='auto'/>";            ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Description du réalisateur : <strong><span class="text-warning"><?php echo $directors['firstname']." ".$directors['lastname']; ?></span></strong></h1>
        <!-- J'affiche la photo de profil de l'réalisateur -->
        <div class="col-lg-offset-1 col-lg-3">
          <div class="panel-heading panel-primary">
            <h3>Portrait du réalisateur</h3>
          </div>
          <div class="well text-center">
            <img src='<?php echo $directors["image"];?>' class="img-responsive img-thumbnail" width="100%" height="50px;"/>
          </div>
        </div>
        <!-- J'affiche à nouveau la biographie du réalisateur -->
        <div class="col-md-7">
          <div class="panel-heading panel-primary">
            <h3 class="text-center">Biographie</h3>
          </div>

            <div class="well">
              <table class="table table-hover table-striped" width="100%">
                <tr>
                  <th><blockquote class="text-info text-center"><?php echo $directors['biography']; ?></blockquote></th>
                </tr>
              </table>
            </div>

        </div>


        <!-- J'affiche un tableau avec différentes informations -->
        <div class="col-lg-offset-1 col-lg-10">
          <div class="well">
            <div class="panel panel-body panel-primary">
              <table class="table-bordered table-striped table-condensed table-hover text-center" width="100%">
                <tr>
                  <th class="thTitle text-center">Identifiant</th>
                  <th class="thTitle text-center">Sexe</th>
                  <th class="thTitle text-center">Date de naissance</th>
                  <th class="thTitle text-center">Nationalité</th>
                  <th class="thTitle text-center">Note</th>
                  <th class="thTitle text-center">Ajouté dans la BDD le ?</th>
                </tr>
                <tr>
                  <td>{ <?php echo $directors['id']; ?> }</td>
                  <td>
                    <?php
                      if ($sex == "m") {
                        echo "<img src='assets/icon/masculin.png' alt='icône masculin'/>";
                      }
                      else if ($sex == "f") {
                        echo "<img src='assets/icon/feminin.png' alt='icône féminin'/>";
                      }
                      else {
                        echo "?";
                      }
                    ?>
                  </td>
                  <td>
                    <?php echo $directors['dob']; ?>
                  </td>
                  <td>
                    <?php
                      if ($flag == "Royaume-Uni") { ?>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="50px" height="25px"/>
                      <?php }
                      else if ($flag == "Etats-Unis") { ?>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Flag_of_the_United_States_%28Pantone%29.svg/1235px-Flag_of_the_United_States_%28Pantone%29.svg.png" width="50px" height="25px"/>
                      <?php }
                      else if ($flag == "Autriche") { ?>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Austria.svg/900px-Flag_of_Austria.svg.png" width="50px" height="25px"/>
                     <?php }
                      else if ($flag == "France") { ?>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/900px-Flag_of_France.svg.png" width="50px" height="25px"/>
                      <?php }
                      else if ($flag == "Chine") { ?>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/900px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="50px" height="25px"/>
                      <?php }
                      else { ?>
                        <?php echo "Non renseigné"; ?>
                      <?php } ?>
                  </td>
                  <td>
                    <?php echo str_repeat($etoiles, $note); ?>
                  </td>
                  <td>
                    <?php echo $directors['created_at']; ?>
                  </td>
                  <td><?php echo $directors['updated_at']; ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <!-- J'affiche la liste des film ou joue cette acteur -->
        <div class="col-lg-offset-2 col-lg-8">
          <legend class="text-center">
            <?php
              if ($sex == "m") {
                echo "Quel film a t-il réalisé ?";
              }
              else if ($sex == "f") {
                echo "Quel film a t-elle réalisée ?";
              }
              else {
                echo $directors["firstname"]." ".$directors["lastname"]." a produit :";
              }
            ?>
          </legend>
        </div>
        <div class="col-lg-offset-2 col-lg-2">
          <figure class="well">
            <img src="<?php echo $film['image']; ?>" width="100%" height="auto" class="img-responsive img-thumbnail"/>
            <br />
            <h3 class="text-center" <?php echo 'style="color: black"' ?> ><?php echo $film['title']; ?></h3>
          </figure>>

        </div>




      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
