<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // --------------- APPEL DE MA FONCTION ---------------?>
<?php         $getAllActors = getAllActors($connexion);      ?>
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
        foreach ($getAllActors as $askGetAllActors) { ?>
            <div class="col-md-offset-2 col-md-8">

              <h3>Biographie de <?php echo $askGetAllActors['firstname']." ".$askGetAllActors['lastname']; ?> <small class="pull-right text-info">[<?php echo $askGetAllActors['id']; ?>]</small></h3>
              <table class="table table-striped well" id='imgAllDirectors' >
                  <tr>
                    <td rowspan="2">
                      <figure>
                        <img src="<?php echo $askGetAllActors['image']; ?>" class="img-responsive img-thumbnail"/>
                      </figure>
                    </td>
                    <td>
                      <bloquote class="text-center"><?php echo $askGetAllActors['biography']; ?></bloquote>
                    </td>
                  </tr>

                  <tr>

                    <td width="90%">
                      <div class="alert alert-info" id="alertInfoActor">

                        <q><strong>Pour en savoir plus sur <span class="text-center text-danger"><?php echo $askGetAllActors['firstname']." ".$askGetAllActors['lastname']; ?></span>, cliquez vite sur le lien qui suis...</strong></q>
                        <br />
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        <q class="text-center"><a href="descActor.php?id=<?php echo $askGetAllActors['id']; ?>"><?php echo $askGetAllActors['firstname']." ".$askGetAllActors['lastname']; ?></a></q>

                      </div>
                    </td>
                  </tr>
              </table>

            </div>
        <?php } ?>



      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
