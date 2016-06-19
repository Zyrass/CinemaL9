<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // ------------- APPEL DE MES FONCTIONS ---------------?>
<?php                  $lastDirector = $_POST;               ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Ajout d'un nouveau réalisateur</h1>
        <hr />

        <div class="col-md-offset-2 col-md-8 well">
          <form action="addNewDirector.php" method="POST">

            <div class="col-md-6">
              <div class="form-group">
                <label for="newIdDirector">ID</label>
                <input name="newIdDirector" type="text" class="form-control" id="newIdDirector" placeholder="désactivé volontairement (Auto incrémenté)" disabled>
              </div>

              <div class="form-group">
                <label for="firstnameDirector">Prénom du réalisateur</label>
                <input name="firstnameDirector" type="text" class="form-control" id="firstnameDirector" placeholder="..." required="required">
              </div>

              <div class="form-group">
                <label for="lastnameDirector">Nom du réalisateur</label>
                <input name="lastnameDirector" type="text" class="form-control" id="lastnameDirector" placeholder="..." required="required">
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="sexeDirector">Sexe du réalisateur</label>
                <input name="sexeDirector" type="text" class="form-control" id="sexeDirector" placeholder='2 choix possible : " m " pour masculin et " f " pour féminin' required="required">
              </div>

              <div class="form-group">
                <label for="dobDirector">Date de naissance du réalisateur</label>
                <input name="dobDirector" type="text" class="form-control" id="dobDirector" placeholder="Année/Mois/Jours" required="required">
              </div>

              <div class="form-group">
                <label for="nationalityDirector">Nationalité du réalisateur</label>
                <input name="nationalityDirector" type="text" class="form-control" id="nationalityDirector" placeholder="..." required="required">
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="biographyDirector">Biographie du réalisateur</label>
                <textarea name="biographyDirector" class="form-control" id="biographyDirector" placeholder="Inscrivez la biographie du réalisateur ici" required="required" rows="6"></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="urlImgDirector">Photo du réalisateur</label>
                <input type="text" name="urlImgDirector" class="form-control" id="urlImgDirector" placeholder="http(?):// ---- .jpeg OU .jpg" required="required">
              </div>

              <div class="form-group">
                <label for="noteDirector">Note du réalisateur</label>
                <input type="text" class="form-control" id="noteDirector" name="noteDirector" placeholder="Optionnel">
              </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary text-center" name="submit">Envoyer vos informations sur le nouveau réalisateur</button>
          </form>
        </div>
      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
