<?php include "header.php"; ?>
<?php // =================================================== ?>
<?php // --------------- APPEL DE MA FONCTION ---------------?>
<?php         $getAllCat = getAllCategories($connexion);     ?>
<?php // =================================================== ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <div class="col-md-offset-4 col-md-4">
          <legend class="text-center text-info">Liste des catégories</legend>
            <div class="alert alert-warning text-center">
              <p>J'envisage par la suite de trier par <span><strong>"Mot clef"</strong></span>...</p>
            </div>
        </div>
      </div>

        <div class="col-md-offset-2 col-md-8">
          <div class="well">
            <table class="table-bordered table-striped  table-condensed table-hover text-center" width="100%">
              <caption class="text-center">Veuillez selectionnez une catégorie afin d'accéder aux films triés par catégorie</caption>
              <caption class="alert alert-danger text-center text-danger"><strong>/!\ Les films ne correspondent pas forcément... à la catégorie concerné.../!\</strong></caption>
                <tr>
                  <td class="tdTitle">Titre</td>
                  <td class="tdTitle">Description</td>
                  <td class="tdTitle">Nombre de film</td>
                  <td class="tdTitle">Mots clef (à venir...)</td>
                </tr>
                <?php foreach ($getAllCat as $askGetAllCate) { ?>
                  <tr>
                    <td>
                      <a href="contentCategorie.php?id=<?php echo $askGetAllCate['id']; ?>">
                        <?php echo $askGetAllCate['titrecategorie']; ?>
                      </a>
                    </td>
                    <td><?php echo $askGetAllCate['description']; ?></td>
                    <td><?php echo $askGetAllCate['nbfilmbycat']; ?></td>
                    <td class="text-warning"><strong><?php echo "Wait and see..."; ?></strong></td>
                  </tr>
                <?php } ?>
            </table>
            <br />
            <div class="alert alert-danger">
              <p class="text-center">Ce qui est malheureux, c'est qu'on bosse sur une BDD complètement moisie. Il faudrait la retaper entièrement...</p>
            </div>
          </div>
        </div>



      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
