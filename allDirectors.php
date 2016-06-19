<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // --------------- APPEL DE MA FONCTION ---------------?>
<?php       $getAllDirectors = getAllDirectors($connexion);   ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <div class="col-md-offset-4 col-md-4">
          <legend class="text-center text-info">Liste complète des réalisateurs enregistrer</legend>
        </div>
      </div>

      <?php
        foreach ($getAllDirectors as $askGetAllDirectors) { ?>
          <div class="col-md-12">
            <div class="col-md-offset-1 col-md-2">
              <div class="well" id='imgAllDirectors'>
                <figure>
                  <img src="<?php echo $askGetAllDirectors['image']; ?>" class="img-responsive img-thumbnail"/>
                </figure>
              </div>
            </div>
            <div class="col-md-7">
              <legend><?php echo $askGetAllDirectors['firstname']." ".$askGetAllDirectors['lastname']; ?></h5></legend>
              <div class="panel panel-body">
                <bloquote class="text-center"><?php echo $askGetAllDirectors['biography'] ?></bloquote>
              </div>
              <div class="alert alert-warning">
                <q class="text-center text-danger"><strong>Cliquez vite sur le lien qui ci-dessous pour accédez à une description plus complète de <?php echo $askGetAllDirectors['firstname']." ".$askGetAllDirectors['lastname']; ?></strong></q>
                <br />
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                <q class="text-center"><a href="descDirector.php?id=<?php echo $askGetAllDirectors['id']; ?>"><?php echo $askGetAllDirectors['firstname']." ".$askGetAllDirectors['lastname']; ?></a></h5></q>
              </div>
            </div>
          </div>
        <?php } ?>



      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
