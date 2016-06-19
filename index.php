<?php include "header.php"; ?>
<?php
// INSERTION DE MA Sidebar
/* ========================================================================= */?>
<?php include "carousel.php"; ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <div class="col-md-4">
          <form role="search" action="searchResultMovie.php" method="POST">
            <div class="input-group">
              <input name="recherche" type="search" class="form-control" placeholder="Recherchez un film">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <form role="search" action="searchResultActor.php" method="POST">
            <div class="input-group">
              <input name="recherche" type="search" class="form-control" placeholder="Recherchez un Acteur">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <form role="search" action="searchResultDirector.php" method="POST">
            <div class="input-group">
              <input name="recherche" type="search" class="form-control" placeholder="Recherchez un Réalisateur">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
        </div>
      </div>

      <br /><br /><br />

        <div class="jumbotron">
          <legend class="text-center text-info">Contenu du site</legend>
          <p>
            Je vous propose de visionner le contenu de notre base de donnée (BDD) utilisé en cours à la 3WA. <br />
            Vous trouverez également des liens vers les cours rédigés par mes soins ainsi que des exercices correspondant.
          </p>
          <hr />
          La page Qui suis-je me permettra de me vendre. <br />
          Également, je pense qu'un site sans page contact ne peut existé ainsi je vous inviterai à me contacter une fois que cette dernière sera fonctionnel.
          <hr />
          <q>Je vous souhaite une très très bonne visite sur ce site</q>
        </div>
      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
