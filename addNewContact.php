<?php include "header.php"; ?>
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
                <input name="firstnameActeur" type="text" class="form-control" id="firstnameActeur" placeholder="requis" required="required">
              </div>

              <div class="form-group">
                <label for="lastnameActeur">Nom de l'acteur</label>
                <input name="lastnameActeur" type="text" class="form-control" id="lastnameActeur" placeholder="requis" required="required">
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="sexeActeur">Sexe de l'acteur</label>
                <input name="sexeActeur" type="text" class="form-control" id="sexeActeur" placeholder="requis" required="required">
              </div>

              <div class="form-group">
                <label for="dobActeur">Date de naissance de l'acteur</label>
                <input name="dobActeur" type="text" class="form-control" id="dobActeur" placeholder="requis" required="required">
              </div>

              <div class="form-group">
                <label for="nationalityActeur">Nationalité de l'acteur</label>
                <input name="nationalityActeur" type="text" class="form-control" id="nationalityActeur" placeholder="requis" required="required">
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="biographyActor">Biographie de l'acteur</label>
                <textarea name="biographyActor" class="form-control" id="biographyActor" placeholder="Inscrivez la biographie de l'acteur ici" required="required" rows="10"></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="urlImgActeur">Photo de l'acteur</label>
                <input type="text" name="urlImgActeur" class="form-control" id="urlImgActeur" placeholder="http(?):// ---- .jpeg OU .jpg" required="required">
              </div>

              <div class="form-group">
                <label for="rolesActeur">Rôle de l'acteur</label>
                <input type="text" class="form-control" id="rolesActeur" name="rolesActeur" placeholder="Optionnel">
              </div>
            </div>
            <button type="button" class="btn btn-block btn-primary text-center" name="submit">Envoyer vos informations</button>
          </form>
        </div>

      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
