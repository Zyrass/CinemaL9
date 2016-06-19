<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // --------------- APPEL DE MA FONCTION ---------------?>
<?php       $getAllMovies = getAllMovies($connexion);   ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <div class="col-md-offset-3 col-md-6">
          <legend class="text-center text-info">Liste complète des films enregistrer</legend>
        </div>
      </div>


          <?php
            foreach ($getAllMovies as $askGetAllMovies) { ?>
              <div class="col-md-2">
              <div class="jumbotron" <?php echo "style='height:350px; width:100%'"; ?> id='imgAllMovies'>
                <p>
                  <img src="<?php echo $askGetAllMovies['image']; ?>" width="100%" ="auto"  class="img-responsive thumbnail"/>
                </p>
                <hr />
                <h5><a href="descMovie.php?id=<?php echo $askGetAllMovies['id']; ?>"><?php echo $askGetAllMovies['title']; ?></a></h5>
              </div>
              </div>
            <?php } ?>




      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
