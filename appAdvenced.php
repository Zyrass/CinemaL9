<?php
include "header.php";
include "vendor/autoload.php";
// include "src/Connexion.php";
// include "src/Personnel.php";
// include "src/Acteur.php";
// include "src/Director.php";
// include "src/ActeurSerie.php";
// include "src/ActeurFilm.php";
// include "src/Movie.php";

use src\Connexion;
use src\Acteur;
use src\Director;
use src\ActeurSerie;
use src\ActeurFilm;
use src\Movie;

$co = new Connexion("root", "troiswa", 3306, "localhost", "cinemal9");
var_dump($co);
$actor = new Acteur();
$actor->setNom('Guillon');
$actor->setPrenom('Alain');
$actor->setDob('01-07-1984');
$actor->setVille('Meyzieu');
$actor->setBiography('Thug Life ! Et il y a belle lurette.....');
$actor->setSalaire(150000);
echo "<div class='well'>";
  echo "<h3 style='color:blue'>Acteurs :</h3>";
    echo "<pre>";
      var_dump($actor);
    echo "</pre>";
echo "</div>";

$director = new Director();
$director->setNom('Willis');
$director->setPrenom('Bruce');
$director->setDob('01-11-1955');
$director->setVille('Aux states poto');
$director->setBiography('Thug Life ! Et il y a belle lurette.....');
$director->setSalaire(199990000);
echo "<div class='well'>";
  echo "<h3 style='color:blue'>Réalisateurs :</h3>";
    echo "<pre>";
      var_dump($director);
    echo "</pre>";
echo "</div>";

$acteurSerie = new ActeurSerie();
$acteurSerie->setNom('Toto');
$acteurSerie->setPrenom('Tata');
$acteurSerie->setDob('01-11-1900');
$acteurSerie->setVille('Aux Japon ma couille');
$acteurSerie->setBiography('Thug Life ! Et il y a belle lurette.....');
$acteurSerie->setSalaire(190);
$acteurSerie->setNomdeserie("Il fait show à la 3WA");
$acteurSerie->setSurnom('PoireauL9');
$movie = new Movie();
$movie->setTitre('Moby Dick');
echo $acteurSerie->commenterMovie($movie);
echo "<div class='well'>";
  echo "<h3 style='color:blue'>Acteur de Série :</h3>";
    echo "<pre>";
      var_dump($acteurSerie);
    echo "</pre>";
echo "</div>";

$acteurFilm = new ActeurFilm();
$acteurFilm->setNom('TILO');
$acteurFilm->setPrenom('TARPAMPION');
$acteurFilm->setDob('01-01-1900');
$acteurFilm->setVille('En Afrique ou il fait froid sa mère');
$acteurFilm->setBiography('Thug Life ! Et il y a belle lurette.....');
$acteurFilm->setSalaire(25899990);
$acteurFilm->setOscar(['2011 - Leçon de cinéma (Festival de Cannes)', '2004 - Hommages (Festival du Cinéma Américain de Deauville)']);
$acteurFilm->setCv('http://sonCV.com');
$acteurFilm->commenterMovie($movie);

echo "<div class='well'>";
  echo "<h3 style='color:blue'>Acteur de Film :</h3>";
    echo "<pre>";
      var_dump($acteurFilm);
    echo "</pre>";
echo "</div>";

 ?>
