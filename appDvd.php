<?php
include "header.php";
include "vendor/autoload.php";

 // include "src/Movie.php";
 // include "src/Blueray.php";
 // include "src/Dvd.php";
 // include "src/DvdRom.php";
 // include "src/Connexion.php";

 use src\Movie;
 use src\Blueray;
 use src\Dvd;
 use src\DvdRom;
 use src\Connexion;

$connexion = new Connexion( "root", "troiswa", 3306, "localhost", "cinemal9");
// ----------------------------- DVD 1
$filmOne = new Dvd($connexion);
$filmOne->setTitre('Film1');
$filmOne->setSynopsis('Synopsis Film 1 ..........');
$filmOne->setAnnee(2016);
$filmOne->setDateRelease('2016-06-20');
$filmOne->setDistributeur('Warner');
$filmOne->setCapacite('16Go');
$filmOne->setFabricant('Sony');
$filmOne->setCoucheDouble(true);
echo $filmOne::DIAMETRE;
echo $filmOne::POIDS;
$filmOne->setPrixTtc(90);
$filmOne->setBudget(90999454);

// ----------------------------- DVD 2
$filmTwo = new Dvd($connexion);
$filmTwo->setTitre('Film2');
$filmTwo->setSynopsis('Synopsis Film 2 ..........');
$filmTwo->setAnnee(2015);
$filmTwo->setDateRelease('2016-09-20');
$filmTwo->setDistributeur('Warner');
$filmTwo->setCapacite('16Go');
$filmTwo->setFabricant('Sony');
$filmTwo->setCoucheDouble(true);
echo $filmTwo::DIAMETRE;
echo $filmTwo::POIDS;
$filmTwo->setPrixTtc(70);
$filmTwo->setBudget(7054545);
//echo $filmOne->compareBudget($filmTwo);
// ----------------------------- DVD 3
$filmThree = new Dvd($connexion);
$filmThree->setTitre('Film3');
$filmThree->setSynopsis('Synopsis Film 3 ..........');
$filmThree->setAnnee(2016);
$filmThree->setDateRelease('2016-01-01');
$filmThree->setDistributeur('Warner');
$filmThree->setCapacite('16Go');
$filmThree->setFabricant('Toshiba');
$filmThree->setCoucheDouble(true);
echo $filmThree::DIAMETRE;
echo $filmThree::POIDS;
$filmThree->setPrixTtc(30);
$filmThree->setBudget(3046646);
// ----------------------------- DVD 4
$filmFour = new Dvd($connexion);
$filmFour->setTitre('Film4');
$filmFour->setSynopsis('Synopsis Film 4 ..........');
$filmFour->setAnnee(2016);
$filmFour->setDateRelease('2016-07-01');
$filmFour->setDistributeur('Warner');
$filmFour->setCapacite('16Go');
$filmFour->setFabricant('Phillips');
$filmFour->setCoucheDouble(true);
echo $filmFour::DIAMETRE;
echo $filmFour::POIDS;
$filmFour->setPrixTtc(10);
$filmFour->setBudget(102455);
// ----------------------------- DVD 5
$filmFive = new Dvd($connexion);
$filmFive->setTitre('Film5');
$filmFive->setSynopsis('Synopsis Film 5 ..........');
$filmFive->setAnnee(2016);
$filmFive->setDateRelease('2016-06-20');
$filmFive->setDistributeur('Warner');
$filmFive->setCapacite('16Go');
$filmFive->setFabricant('Sony');
$filmFive->setCoucheDouble(true);
echo $filmFive::DIAMETRE;
echo $filmFive::POIDS;
$filmFive->setPrixTtc(20);
$filmFive->setBudget(1099999999);

echo "<div class='well'>";
  echo "<h3 style='color:blue'>Récapitulatif :</h3>";
    echo "<pre>";
//var_dump($filmOne,$filmTwo,$filmThree,$filmFour,$filmFive);
    echo "</pre>";
echo "</div>";
// ----------------------------- INSERE MOVIE
$filmOne->insert1x();
$filmTwo->insert1x();
$filmThree->insert1x();
$filmFour->insert1x();
$filmFive->insert1x();

// ----------------------------- TABLEAU INDITIELLE DES 5 DVD
$tabDvd = array($filmOne,$filmTwo,$filmThree,$filmFour,$filmFive);
//var_dump($tabDvd);
// ----------------------------- AFFICHAGE DE LA MOYENNE DU BUDGET DE MES 5 FILMS
echo "<div class='well'>";
  echo "<h3 style='color:blue'>Moyenne du budget des 5 films :</h3>";
    echo "<pre>";
      echo $filmOne->getNbAndMoyFiveBudget($tabDvd);
    echo "</pre>";
echo "</div>";

// ----------------------------- INSERER MES FILM DVD DANS MA BDD DANS LA TABLE MOVIE
echo "<div class='well'>";
  echo "<h3 style='color:blue'>J'insere ici mes film dans la DB</h3>";
    echo "<pre>";
      echo $filmOne->insert1x($tabDvd);
    echo "</pre>";
    echo "<div class='alert alert-success'>";
      echo "<p>Vous avez bien ajouter votre film</p>";
    echo "</div>";
echo "</div>";

//------------------------------------------- DVDROM 1
$dvdRomOne = new DvdRom($connexion, "#ff5465", true);
$dvdRomOne->setPrix("5000");
$dvdRomOne->setFabricant("Sony");
$dvdRomOne->setDiametre(10);
$dvdRomOne->setPoids(15);
$dvdRomOne->setTitre("DvdRomOne");
$dvdRomOne->setSynopsis("Blablabla DvdRomOne");
//------------------------------------------- DVDROM 2
$dvdRomTwo = new DvdRom($connexion, "#885465", true);
$dvdRomTwo->setPrix("45000");
$dvdRomTwo->setFabricant("Sony");
$dvdRomTwo->setDiametre(10);
$dvdRomTwo->setPoids(15);
$dvdRomTwo->setTitre("DvdRomTwo");
$dvdRomTwo->setSynopsis("Blablabla DvdRomTwo");
//------------------------------------------- DVDROM 3
$dvdRomThree = new DvdRom($connexion, "#5f5465", true);
$dvdRomThree->setPrix("55000");
$dvdRomThree->setFabricant("Sony");
$dvdRomThree->setDiametre(10);
$dvdRomThree->setPoids(15);
$dvdRomThree->setTitre("DvdRomThree");
$dvdRomThree->setSynopsis("Blablabla DvdRomThree");

//------------------------------------------- AFFICHAGE DU NOMBRE DE MOT POUR CES 3 OBJETS
$tabDvdRom = array($dvdRomOne,$dvdRomTwo,$dvdRomThree);
echo "<div class='well'>";
  echo "<h3 style='color:blue'>J'Affiche le nombre de mot dans synopsis pour ces 3 films'</h3>";
  echo $dvdRomOne->compteMotsSynopsis();
  echo $dvdRomTwo->compteMotsSynopsis();
  echo $dvdRomThree->compteMotsSynopsis();
echo "</div>";




$BlueRayOne = new BlueRay($connexion);
$BlueRayOne->setPrix("45000");
$BlueRayOne->setMecanisme("Sony");
$BlueRayOne->setDiametre(10);
$BlueRayOne->setPoids(15);
$BlueRayOne->setTitre("BlueRay1");
$BlueRayOne->setSynopsis("Blablabla BlueRay1");
$BlueRayOne->setUtilisation("PlayStation 4");
$BlueRayOne->setCodage($BlueRayOne->getCodage()[2]);


$BlueRayTwo = new BlueRay($connexion);
$BlueRayTwo->setPrix("99995000");
$BlueRayTwo->setMecanisme("Sony");
$BlueRayTwo->setDiametre(10);
$BlueRayTwo->setPoids(15);
$BlueRayTwo->setTitre("BlueRay2");
$BlueRayTwo->setSynopsis("Blablabla BlueRay2");
$BlueRayTwo->setUtilisation("Xbox One");
$BlueRayTwo->setCodage($BlueRayTwo->getCodage()[1]);


  echo "<h3 style='color:blue'>J'Affiche le nombre de mot dans synopsis pour ces 3 films'</h3>";
  echo "<pre>";
    var_dump($BlueRayOne, $BlueRayTwo);
  echo "</pre>";

$BlueRayOne->insert1x();
$BlueRayTwo->insert1x();

dump([$dvdRomOne,$dvdRomTwo,$dvdRomThree,$BlueRayOne,$BlueRayTwo]);
// + Créer une méthode permettant de dire si le DVD ou le Blue Ray est sorti cette année (sur sa date release)
//   et qui retourne true ou false

// *************** Martin ************************
// public function releaseDate(Connexion $connexion){
// $req= $connexion->connectBdd()->query(
// "SELECT date_release, title
// FROM movies
// "
// );
//
// $resu = $req->fetchAll();
// return $resu;
//
// }
//
// *************** Fichier appadvanced *************
// $resu = $dvdBlueOne->releaseDate($connexion);
// foreach ($resu as $value) {
//   if (substr("$value[date_release]",0,4)==2015){
//     echo "<div> le film $value[title] est sortie cette année </div>";
//   }
//
// }
//

// *************** Quentin ************************

  //
  //   public static function dateReleaseYear(Movies $object){
  //
  //   $dateObject = new \DateTime($object->dateRelease);
  //   $dateNow = new \DateTime("now"); // "now" n'est pas obligatoire vu que par défaut c'est la date d'ajourd'hui
  //
  //   return $dateObject->format("Y") == $dateNow->format("Y");
  //
  //   }
  //
  //
  // $resultat = Movie::dateReleaseYear($BlueRayTwo);
  // var_dump($resultat);







  // + Créer une méthode permettant de retouner le nombre de mois entre 2 objets DVD

  // Olivier

  //
  // public static function countMonthBetweenMovies(Movies $movieOne, Movies $movieTwo ){
  //
  //   $dateMovieOne = DateTime::createFromFormat('Y-m-d', $movieOne->dateRelease);
  //   $dateMovieTwo = DateTime::createFromFormat('Y-m-d', $movieTwo->dateRelease);
  //   $interval = date_diff($dateMovieOne, $dateMovieTwo);
  //   $diffMois = $interval->format('%M mois, soit %a jours');
  //
  //   return $diffMois;
  //   // ou
  //   //return $interval-> format('%m') + $interval-> format('%Y') * 12:
  //
  //
  // }
  //
  // echo Movie::countMonthBetweenMovies($BlueRayTwo);
  //
  //



  // * + Créer une méthode qui calcule et retourne le prix TTC total avec sa taxe de 3 objets DVDROM et 2 objets Blue-Ray que pour
  // 		les films sortis après il y a 2 jours
  //
  //     // Zoe
  //
  //     public function prixTotal($tab = []){
  //
	// 		$addition = 0;
	// 		$datetime = new \DateTime();
	// 		$date = $datetime->format('Y-m-d');
  //
	// 	foreach ($tab as $value) {
	//
	// 	$addition = $addition + $value->prixTtc;
	//
  //
	// 		if($value->daterelease > $date){
  //
	// 		return "<p>Le total de l'addition de mes DVDROM et Blue-Ray sortis a partir de demain est de : " . $addition . " euros. </p>";
	// 		}
  //
	// 		return "<p>Non</p>";
  //
	// 		}
  //
  //
	// 	}
  //
  //   echo $dvdRomOne->prixTotal([$dvdRomOne, $dvdRomTwo, $dvdRomThree, $bluerayOne, $bluerayTwo]);

  echo "<div class='well'>";
    echo "<h3 style='color:blue'>Moyenne du budget des 5 films :</h3>";
      echo "<pre>";
        echo $BlueRayOne->modifPrix(50,5);
      echo "</pre>";
  echo "</div>";

?>
