<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // ------------- APPEL DE MEs FONCTIONS ---------------?>
<?php                     $search = $_POST                   ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Récapitulatif de votre recherche</h1>
        </hr />
        <?php
        if(!empty($search)){
          $searchMovie = getSearchMovie($connexion, $search['navSearch']);
        }
        ?>
        <br />

        <?php foreach ($searchMovie as $result) { ?>
          <div class="col-md-4">
            <div class="well">
              <blockquote class="blockquote blockquote-reverse">
                <legend class="m-b-0 text-info"><?php echo $result['title']; ?></legend>
                <img src="<?php echo $result['image']; ?>" width="100%" class="img-responsive img-thumbnail" />
                <br />
                <p>Synopsis</p>
                <dfn><small><?php echo $result['synopsis'];?></small></dfn>
                <br />
                <footer class="blockquote-footer text-info">Note obtenue : <strong><?php echo $result['note_presse'];?>/5</strong></footer>
              </blockquote></h3>
            </div>
          </div>

        <?php } ?>




      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
