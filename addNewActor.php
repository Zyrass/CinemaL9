<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // ------------- APPEL DE MES FONCTIONS ---------------?>
<?php                     $lastActor = $_POST;               ?>
<?php   $lastActorInBdd = getLastActorInBdd($connexion);     ?>
<?php // =================================================== ?>


( ! ) Fatal error: Call to a member function fetch() on boolean in C:\wamp64\www\cinemal9\functions\funcActors.php on line 62
Call Stack
#	Time	Memory	Function	Location
1	0.0005	240432	{main}( )	...\addNewActor.php:0
2	0.0040	298752	getLastActorInBdd( )	...\addNewActor.php:5

<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Ajout d'un nouvel acteur</h1>
        <hr />

        <div class="col-md-offset-2 col-md-8 well">
          <form action="addNewActor.php" method="POST">

            <div class="col-md-6">
              <div class="form-group">
                <label for="newIdActeur">ID</label>
                <input name="newIdActeur" type="text" class="form-control" id="newIdActeur" placeholder="désactivé volontairement (Auto incrémenté)" disabled>
              </div>

              <div class="form-group">
                <label for="firstnameActeur">Prénom de l'acteur</label>
                <input name="firstnameActeur" type="text" class="form-control" id="firstnameActeur" placeholder="..." required="required">
              </div>

              <div class="form-group">
                <label for="lastnameActeur">Nom de l'acteur</label>
                <input name="lastnameActeur" type="text" class="form-control" id="lastnameActeur" placeholder="..." required="required">
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="sexeActeur">Sexe de l'acteur</label>
                <input name="sexeActeur" type="text" class="form-control" id="sexeActeur" placeholder="2 choix possible : " m " pour masculin et " f " pour féminin" required="required">
              </div>

              <div class="form-group">
                <label for="dobActeur">Date de naissance de l'acteur</label>
                <input name="dobActeur" type="date" class="form-control" id="dobActeur" placeholder="Année/Mois/Jours" required="required">
              </div>

              <div class="form-group">
                <label for="nationalityActeur">Nationalité de l'acteur</label>
                <input name="nationalityActeur" type="text" class="form-control" id="nationalityActeur" placeholder="..." required="required">
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="biographyActor">Biographie de l'acteur</label>
                <textarea name="biographyActor" class="form-control" id="biographyActor" placeholder="Inscrivez la biographie de l'acteur ici" required="required" rows="6"></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="urlImgActeur">Photo de l'acteur</label>
                <input type="url" name="urlImgActeur" class="form-control" id="urlImgActeur" placeholder="http(?):// ---- .jpeg OU .jpg" required="required">
              </div>

              <div class="form-group">
                <label for="rolesActeur">Rôle de l'acteur</label>
                <input type="text" class="form-control" id="rolesActeur" name="rolesActeur" placeholder="Optionnel">
              </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary text-center" name="submit">Envoyer vos informations sur le nouvel acteur</button>
          </form>
          <br />
          <?php
          if(!empty($lastActor)){
            // Si mon tableau contenant mes acteurs ne correspond pas aux données saisis alors je sauvegarde..
            insertNewActor($id, $connexion);
            echo "<div class='alert alert-success'>
            Votre Acteur a bien été ajouté
            </div>";
          } else {
            echo "<div class='alert alert-warning'>
              <p class='text-center'>Veuillez renseigner les informations ci-dessus pour ajouter dynamiquement un nouvel acteur</p>
            </div>";
          }
           ?>
        </div>

      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
