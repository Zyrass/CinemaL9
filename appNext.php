<?php
namespace src;

include "vendor/autoload.php";

include "header.php";




echo "<div class='well'>";


include "src/Movie.php";
include "src/Connexion.php";
include "lib/Connexion.php";
include "src/Acteur.php";
include "src/Director.php";
include "src/Session.php";

// use appel les namespace et les classes
// Le use c'est le nom du namepsace + le nom de la classe
// A partir du moment ou j'ai un namespace je dois use la classe pour pouvoir l'utiliser
use src\Connexion as ConnexionSrc;
//use src\Movie;
use src\Acteur;
use src\Director;
use src\Session;
use lib\Connexion as ConnexionLib;
// as: permet d'aliaser le nom de mes classes
$Connexion = new ConnexionSrc(3306, "localhost", "cinemal9", "root", "troiswa");
$ConnexionLib = new ConnexionLib();


// // now est un mot clef permettant d'avoir la date d'aujourd'HUI
// $now = new dateTime('now');
// var_dump($now);
//
// // format() Permet de sortir une date au bon format
// var_dump($now->format('d/m/Y'));
//use src\Connexion as ConnexionSrc;

// // createFormat() permet de générer un nouvel objet datetime selon un format d'entée
// $dateFr = dateTime::createdFromFormat('d/m/Y', "16/03/1988");
//
// var_dump($dateFr);
// var_dump($dateFr->format('Y-m-d'));
//
// // format relatifs
// $yesterday = new dateTime('-1 day');
// var_dump($yesterday);
// $nextYear = new dateTime('+1 year');
// var_dump($nextYear);
// // Fonction modify() = permetant de modifier une date dans un objet datetime
// $dateModify = $now->modify('+2 day');
// var_dump($dateModify);
// // chaine la modification de Datetime
// $dateModifyTwo = $now->modify('-1 week + 2hour - 30 minute');
// var_dump($dateModifyTwo);
//
//
  const VERSION = "1.0";
  $movie = new Movie();

  // "::" permet l'appel d'une constante dans ma classe>
  // La constante sera toujours en majuscule !!!
  echo Movie::VERSION;
  // Impossible de modifier une une constante : $movie::VERSION = "2.0";

  /**
   * + Créer une constante SGBD dans la classe connexion qui soit égale à Mysql
   * + Afficher cette constante */
   echo ConnexionSrc::SGBD;
   // + Créer une constante dans la classe Acteur
   // + langue qui soit égale à FR et un pays égale à France
  // + Afficher ces 2 constantes
  $acteur = new Acteur();
  echo Acteur::PAYS;
  echo Acteur::LANGUE;

  echo "<br />";
  echo "Methode numero 2:";

  // appel depuis la classe
  echo Acteur::PAYS;
  echo Movie::VERSION;

echo Acteur::informationOfActeur();

$filmOne = new Session();
$filmOne ->setDateSession('2012-03-26 11:30:00');
$filmOne ->setDateCreated('2012-05-26 11:10:00');
$filmOne ->setIdMovie(5);

$filmTwo = new Session();
$filmTwo ->setDateSession('2012-01-26 11:30:00');
$filmTwo ->setDateCreated('2012-09-26 11:10:00');
$filmTwo ->setIdMovie(9);

$filmTree = new Session();
$filmTree ->setDateSession('2016-03-26 11:30:00');
$filmTree ->setDateCreated('2016-03-26 11:10:00');
$filmTree ->setIdMovie(29);

$session = new Session;
$session ->setDateSession('2016-03-26 11:30:00');
$session ->setDateCreated('2016-03-26 11:10:00');
$session ->setIdMovie(1);

$sessionTwo = new Session;
$sessionTwo ->setDateSession('2016-03-26 11:30:00');
$sessionTwo ->setDateCreated('2016-03-26 11:10:00');
$sessionTwo ->setIdMovie(1);

$sessionFive = new \DateTime;

echo Session::getTheDiff($session,$sessionTwo);

echo Session::NB_BILLET;
var_dump(Session::NB_BILLET);
echo Session::TROISD;
var_dump(Session::TROISD);

$tabFilm = array(
  'Film1' => $filmOne,
  'Film3' => $filmTwo,
  'Film2' => $filmTree,
);

// For methode static
$session = Session::sousDateIntervale("P4D"); // --> P = Période 4 le nombre D les Jours
// For non static
$session->sousDateIntervale("P4D");

$tabSession = [$sessionTwo,$session,$filmTree];

$tabSession = Session::getTabObjSession2012($tabSession);

Session::boolIfSupOrInf($sessionTwo, new DateTime('now'));

"</div>";

include "footer.php";
?>
