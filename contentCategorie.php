<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // --------------- APPEL REPONSE GET ------------------?>
<?php                     $id = $_GET['id']                  ?>
<?php // =================================================== ?>
<?php // --------------- APPEL DE MA FONCTION ---------------?>
<?php $getMovByCat = getMoviesByCategories($id, $connexion); ?>
<?php         $getAllCat = getAllCategories($connexion);     ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <div class="col-md-offset-2 col-md-8">
          <div class="thumbnail text-center">
            <legend class="text-center text-info">Bienvenue dans la catégorie : <strong><span class="text-warning"><?php echo "à coder..." ?></span></strong></legend>
              <p>
                Voici la liste des films qui correspondent à la catégorie choisis.<br />
                Une fois le film sélectionnné, vous serez redirigé vers la page correspondante à ce dernier.
              </p>
              <hr />
          </div>
        </div>

      <div class="col-md-offset-2 col-md-8">

          <?php foreach ($getMovByCat as $askGetMovByCat) { ?>
            <div class="col-lg-3">
              <div class="thumbnail">
                <img src='<?php echo $askGetMovByCat['image'] ?>' class="img-responsive" id="imgResize" <?php echo "style='margin-top:20px'"; ?>/>
                  <div class="caption">
                    <hr />
                    <h5>
                      <a href="descMovie.php?id=<?php echo $askGetMovByCat['moviesid']?>"><?php echo $askGetMovByCat['title'] ?></a>
                    </h5>
                    <hr />
                  </div>
              </div>
            </div>
          <?php } ?>


      </div>



      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
