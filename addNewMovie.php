<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // ------------- APPEL DE MEs FONCTIONS ---------------?>
<?php                     $lastMovies = $_POST;              ?>
<?php   $lastMovieInBdd = getLastMovieInBdd($connexion)      ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Ajout d'un nouveau film</h1>
        <hr />

        <div class="col-md-offset-2 col-md-8 well">
          <form action="addNewMovie.php" method="POST">

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="synopsisMovie">Synopsis du film</label>
                <textarea name="synopsisMovie" class="form-control" id="synopsisMovie" placeholder="Inscrivez le synopsis du film ici" required="required" rows="3"></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="newIdActeur">ID</label>
                <input name="newIdActeur" type="text" class="form-control" id="newIdActeur" placeholder="désactivé volontairement (Auto incrémenté)" disabled>
              </div>

              <div class="form-group">
                <label for="titleMovie">Titre du film</label>
                <input name="titleMovie" type="text" class="form-control" id="titleMovie" placeholder="..." required="required">
              </div>

              <div class="form-group">
                <label for="distributeur">Distributeur</label>
                <input name="distributeur" type="text" class="form-control" id="distributeur" placeholder="..." required="required">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="budgetMovie">Budget du film</label>
                <input name="budgetMovie" type="text" class="form-control" id="budgetMovie" placeholder="xxx.xxx.xxx.xxx $ ou € ou £ (x = un chiffre  )">
              </div>

              <div class="form-group">
                <label for="dureeMovie">Durée du film</label>
                <input name="dureeMovie" type="text" class="form-control" id="dureeMovie" placeholder="xx:xx">
              </div>

              <div class="form-group">
                <label for="noteMovie">Note du film</label>
                <input name="noteMovie" type="text" class="form-control" id="noteMovie" placeholder="0 > 5" required="required">
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="descMovie">Description du film</label>
                <textarea name="descMovie" class="form-control" id="descMovie" placeholder="Inscrivez la description du film ici" rows="6"></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="urlImgMovie">Affiche du film</label>
                <input type="text" name="urlImgMovie" class="form-control" id="urlImgMovie" placeholder="http(?):// ---- .jpeg OU .jpg" required="required">
              </div>
            </div>

            <button type="submit" class="btn btn-block btn-primary text-center" name="submit">Envoyer vos informations sur ce film</button>
            <br />
            <?php
            if(!empty($lastMovieInBdd)){
              // New film in my BDD
              insertMovie($id, $connexion);
              echo "<div class='alert alert-success'>
              Votre film a bien été ajouté
              </div>";
            } else {
              echo "<div class='alert alert-warning'>
                Veuillez renseigner les informations ci-dessus afin d'améliorer toujours plus notre base de donnée.
              </div>";
            }
             ?>
          </form>
        </div>

      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
