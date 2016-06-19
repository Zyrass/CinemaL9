<?php include "header.php"; ?>
<main>
  <div class="container-fluid"><!-- Start container-fluid-->
    <div class="row rowOne"><!-- Start rowOne-->
      <div class="col-md-12"><!-- Start col-md-12-->
        <h1 class="text-info text-center">Statistiques</h1>
        <hr />
        <div class="col-md-offset-2 col-md-8 well">
          <div id="content">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#statsCat" data-toggle="tab">Catégories</a></li>
                <li><a href="#statsActor" data-toggle="tab">Acteurs</a></li>
                <li><a href="#statsMovie" data-toggle="tab">Films</a></li>
                <li><a href="#statsDirector" data-toggle="tab">Réalisateur</a></li>
                <li><a href="#statsContact" data-toggle="tab">Contacts</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="statsCat">
                  <br />
                    <legend class="text-center" <?php echo "style='color:#3364a1' "?>>Statistiques sur mes Catégories</legend>
                    <br />
                    <div class="col-md-4 well">
                      <ul id="tabs" class="nav nav-pills nav-stacked" data-tabs="tabs">
                          <li class="active"><a href="#nbCat" data-toggle="tab">Nombre de catégorie</a></li>
                          <li><a href="#nbCatVide" data-toggle="tab">Nombre de catégorie vide</a></li>
                          <li><a href="#cbFilmByCat" data-toggle="tab">Combien de film par catégorie</a></li>
                      </ul>
                    </div>
                    <div class="col-md-offset-1 col-md-7 well">
                      <div class="tab-pane" id="nbCat">
                          <legend class="text-right" <?php echo "style='color:#3364a1' "?>><small>Nombre de catégorie</small></legend>
                          <p>à venir très prochainement</p>
                      </div>
                    </div>
                    <div class="col-md-offset-1 col-md-7 well">
                      <div class="tab-pane" id="nbCatVide">
                          <legend class="text-right" <?php echo "style='color:#3364a1' "?>><small>Nombre de catégorie vide</small></legend>
                          <p>à venir très prochainement</p>
                      </div>
                    </div>
                    <div class="col-md-offset-5 col-md-7 well">
                      <div class="tab-pane" id="cbFilmByCat">
                          <legend class="text-right" <?php echo "style='color:#3364a1' "?>><small>Combien de film par catégorie</small></legend>
                          <p>à venir très prochainement</p>
                      </div>
                    </div>
                </div>

                <div class="tab-pane" id="statsActor">
                  <br />
                    <legend class="text-center" <?php echo "style='color:#3364a1' "?>>Statistiques sur mes Acteurs</legend>
                    <br />
                    <div class="col-md-3">
                      <ul id="tabs" class="nav nav-pills nav-stacked" data-tabs="tabs">
                          <li class="active"><a href="#nbCat" data-toggle="tab">Nombre de catégorie</a></li>
                          <li><a href="#nbCatVide" data-toggle="tab">Nombre de catégorie vide</a></li>
                          <li><a href="#cbFilmByCat" data-toggle="tab">Combien de film par catégorie</a></li>
                      </ul>
                    </div>
                    <div class="col-md-9 pull-right">
                      <div class="tab-pane" id="nbCat">
                          <h1>Orange</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="nbCatVide">
                          <h1>Yellow</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="cbFilmByCat">
                          <h1>Green</h1>
                          <p>à venir très prochainement</p>
                      </div>
                    </div>
                </div>


                <div class="tab-pane" id="statsMovie">
                  <br />
                    <legend class="text-center" <?php echo "style='color:#3364a1' "?>>Statistiques sur mes Films</legend>
                    <br />
                    <div class="col-md-3">
                      <ul id="tabs" class="nav nav-pills nav-stacked" data-tabs="tabs">
                          <li class="active"><a href="#nbCat" data-toggle="tab">Nombre de </a></li>
                          <li><a href="#nbCatVide" data-toggle="tab">Nombre de catégorie vide</a></li>
                          <li><a href="#cbFilmByCat" data-toggle="tab">Combien de film par catégorie</a></li>
                      </ul>
                    </div>
                    <div class="col-md-9 pull-right">
                      <div class="tab-pane" id="nbCat">
                          <h1>Orange</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="nbCatVide">
                          <h1>Yellow</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="cbFilmByCat">
                          <h1>Green</h1>
                          <p>à venir très prochainement</p>
                      </div>
                    </div>
                </div>

                <div class="tab-pane" id="statsDirector">
                  <br />
                    <legend class="text-center" <?php echo "style='color:#3364a1' "?>>Statistiques sur mes Réalisateurs</legend>
                    <br />
                    <div class="col-md-3">
                      <ul id="tabs" class="nav nav-pills nav-stacked" data-tabs="tabs">
                          <li class="active"><a href="#nbCat" data-toggle="tab">Nombre de catégorie</a></li>
                          <li><a href="#nbCatVide" data-toggle="tab">Nombre de catégorie vide</a></li>
                          <li><a href="#cbFilmByCat" data-toggle="tab">Combien de film par catégorie</a></li>
                      </ul>
                    </div>
                    <div class="col-md-9 pull-right">
                      <div class="tab-pane" id="nbCat">
                          <h1>Orange</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="nbCatVide">
                          <h1>Yellow</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="cbFilmByCat">
                          <h1>Green</h1>
                          <p>à venir très prochainement</p>
                      </div>
                    </div>
                </div>

                <div class="tab-pane" id="statsContact">
                  <br />
                    <legend class="text-center" <?php echo "style='color:#3364a1' "?>>Statistiques sur mes Contacts</legend>
                    <br />
                    <div class="col-md-3">
                      <ul id="tabs" class="nav nav-pills nav-stacked" data-tabs="tabs">
                          <li class="active"><a href="#nbCat" data-toggle="tab">Nombre de catégorie</a></li>
                          <li><a href="#nbCatVide" data-toggle="tab">Nombre de catégorie vide</a></li>
                          <li><a href="#cbFilmByCat" data-toggle="tab">Combien de film par catégorie</a></li>
                      </ul>
                    </div>
                    <div class="col-md-9 pull-right">
                      <div class="tab-pane" id="nbCat">
                          <h1>Orange</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="nbCatVide">
                          <h1>Yellow</h1>
                          <p>à venir très prochainement</p>
                      </div>
                      <div class="tab-pane" id="cbFilmByCat">
                          <h1>Green</h1>
                          <p>à venir très prochainement</p>
                      </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
      </div><!-- End col-md-12 -->
    </div><!-- End rowOne -->
  </div><!-- End container-fluid -->
</main>
<?php include "footer.php"; ?>
