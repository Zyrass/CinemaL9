<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Promotion L9 - Cinema</title>
    <!-- ======================================== -->
    <!--      Mode responsive selon nos écran     -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- ======================================== -->
    <!--          Ajout du CSS de Bootstrap       -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="all" />
    <!-- ======================================== -->
    <!--        Ajout de icones "Font-Awesome"    -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" media="all" />
    <!-- ======================================== -->
    <!--      Ajout de mes feuilles de style CSS  -->
    <link rel="stylesheet" type="text/css" href="css/stylePerso.css" media="all" />
    <!-- ======================================== -->
    <style type="text/css">
      html {
        margin-top: 80px;
      }
    </style>
  </head>
  <body>
    <?php
    // CONNECTION A LA BDD
    /* ========================================================================= */
    /* appel de la page fonction.php */
      include "functions.php";
    /* ma variable $connexion contient ma connection en BDD */
      $connexion = connectionBdd("localhost", "cinemal9", "root", "troiswa");
      // /!\ le mot de passe à la 3WA = troiswa et chez moi il n'y en a pas...
    /* ========================================================================= */
    ?>
    <!-- ================================================================== -->
    <!--                         START NAVBAR                               -->
    <!-- ================================================================== -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Pour le mobile -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myMenu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">ZYRASS</a>
        </div>
        <!-- Le contenu de ma navbar -->
        <div class="collapse navbar-collapse" id="myMenu">
          <!-- Contenu de mon cinéma + contenu de la 3wa -->
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="text-info">Cinéma - L9 </span><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                    <li><a href="categories.php">Tri par catégories</a></li>
                    <li><a href="allMovies.php">Voir tous les films</a></li>
                    <li><a href="allActors.php">Voir tous les acteurs</a></li>
                    <li><a href="allDirectors.php">Voir tous les réalisateurs</a></li>
                  <li role="separator" class="divider"></li>
                </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="text-warning">Insérer en BDD</span><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                    <li><a href="addNewActor.php">Ajouter un acteur</a></li>
                    <li><a href="addNewDirector.php">Ajouter un réalisateur</a></li>
                    <li><a href="addNewMovie.php">Ajouter un film</a></li>
                  <li role="separator" class="divider"></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="text-warning">Dernier ajout en BDD</span><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                    <li><a href="lastActor.php">Voir le dernier acteur enregistrer...</a></li>
                    <li><a href="lastDirector.php">Voir le dernier réalisateur enregistrer...</a></li>
                    <li><a href="lastMovie.php">Voir le dernier film enregistrer...</a></li>
                  <li role="separator" class="divider"></li>
                </ul>
            </li>
            <li><a href="stats.php"><span class="text-success">Statistiques</span></a></li>


            <ul class="nav navbar-nav">


              <form class="navbar-form navbar-right" role="search" action="searchResult.php" method="POST">

                <div class="input-group">
                  <input name="navSearch" type="search" class="form-control" placeholder="film | acteurs | réalisateurs">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button>
                  </span>
                </div>

              </form>


            </ul>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="text-danger">Cours 3WA </span><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="3wa-cours/c-BDD.php">Base de donnée (BDD)</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="3wa-cours/c-fetch.php">Function fetch()</a></li>
                  <li><a href="3wa-cours/c-fetchAll.php">Function fetchAll()</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="3wa-cours/c-GET.php">Function $_GET()</a></li>
                  <li><a href="3wa-cours/c-POST.php">Function $_POST()</a></li>
                </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="text-danger">Exos 3WA </span><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="3wa-exos/e-BDD.php">Exos BDD</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="3wa-exos/e-fetch.php">Exos fetch()</a></li>
                  <li><a href="3wa-exos/e-fetchAll.php">Exos fetchAll()</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="3wa-exos/e-GET.php">Exos $_GET()</a></li>
                  <li><a href="3wa-exos/e-POST.php">Exos $_POST()</a></li>
                </ul>
            </li>




        </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
