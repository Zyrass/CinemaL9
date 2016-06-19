<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // ------------- APPEL DE MEs FONCTIONS ---------------?>
<?php                  $lastDirector = $_POST;               ?>
<?php $lastDirectorInBdd = getLastDirectorInBdd($connexion)  ?>
<?php            $flag = $lastDirectorInBdd['nationality'];  ?>
<?php               $sex = $lastDirectorInBdd['sex'];        ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Récapitulatif du dernier acteur enregistrer</h1>
        <hr />
        <?php
        if(!empty($lastDirectorInBdd)){
          // New film in my BDD
          insertNewActor($connexion);
          echo "<div class='alert alert-info text-center'>" ?>
          <?php echo "Vous avez saisis comme dernier acteur :"  ?>
          <strong><?php echo $lastDirectorInBdd['firstname']." ".$lastDirectorInBdd['lastname']; ?></strong>
          <?php echo "</div>";
        }else {

        }
        ?>
        <hr />
        <br />
        <div class="col-md-2">
          <img src="<?php echo $lastDirectorInBdd['image']; ?>" class="img-responsive img-thumbnail" width="100%"/>
        </div>
        <div class="col-md-10">
          <div class="well">
            <table class="text-center table table-striped table-bordered">
              <tr>
                <th class="thTitle">ID</th>
                <th class="thTitle">Prénom</th>
                <th class="thTitle">Nom</th>
                <th class="thTitle">date de naissance</th>
                <th class="thTitle">Sexe</th>
                <th class="thTitle">Nationalité</th>
              </tr>
              <tr>
                <td>
                  <?php echo $lastDirectorInBdd['id']; ?>
                </td>
                <td>
                  <?php echo $lastDirectorInBdd['firstname']; ?>
                </td>
                <td>
                  <?php echo $lastDirectorInBdd['lastname']; ?>
                </td>
                <td>
                  <?php echo $lastDirectorInBdd['dob']; ?>
                </td>
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
                  <?php
                    if ($flag == "Royaume-Uni" || $flag == "Anglais" || $flag == "Anglaise" ) { ?>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="50px" height="25px"/>
                    <?php }
                    else if ($flag == "Etats-Unis" || $flag == "Américain" || $flag == "Américaine" ) { ?>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Flag_of_the_United_States_%28Pantone%29.svg/1235px-Flag_of_the_United_States_%28Pantone%29.svg.png" width="50px" height="25px"/>
                    <?php }
                    else if ($flag == "Autriche" || $flag == "Autrichien" || $flag == "Autrichienne" ) { ?>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Austria.svg/900px-Flag_of_Austria.svg.png" width="50px" height="25px"/>
                   <?php }
                    else if ($flag == "France" || $flag == "Français" || $flag == "Française" ) { ?>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/900px-Flag_of_France.svg.png" width="50px" height="25px"/>
                    <?php }
                    else if ($flag == "Chine" || $flag == "Chinois" || $flag == "Chinoise" ) { ?>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/900px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="50px" height="25px"/>
                    <?php }
                    else { ?>
                      <?php echo "Non renseigné pour le moment..."; ?>
                    <?php } ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>


( ! ) Fatal error: Call to a member function fetch() on boolean in C:\wamp64\www\cinemal9\functions.php on line 233
Call Stack
#	Time	Memory	Function	Location
1	0.0006	249120	{main}( )	...\lastDirector.php:0
2	0.0026	302256	getLastDirectorInBdd( )	...\lastDirector.php:5
