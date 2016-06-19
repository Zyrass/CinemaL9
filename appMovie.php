<?php
include "header.php";
include "vendor/autoload.php";
// include "src/Movie.php";
// include "src/Connexion.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$myConnexion = new Connexion("root", "troiswa", 3306, "localhost", "cinemal9");
echo "<div class='col-md-12 well'>";
echo var_dump($myConnexion);
echo "<br />";
echo "<pre>";
echo var_dump($myConnexion->Connect());
echo "</pre>";
echo "</div>";


// ---------------------------------------------------------------------
// -------------------------------------------------- FILM 1
// ---------------------------------------------------------------------
$bestOfTheBest = new Movie(1990,"hbo" ,$myConnexion,400);
// -------------------------------------------------- SETTER FILM 1
$bestOfTheBest->setTitre('Best of the best');
$bestOfTheBest->setSynopsis("Pour affronter l'équipe Coréenne en compétition officielle de karaté Tae Kwon Do, cinq champions de karaté americains sont sélectionnés pour suivre un entrainement intensif. Tous ont leurs soucis personnels, et avant de d'affronter la cruauté des Coréens, ils auront à supporter la rigueur de l'entraineur Frank Couzo.");
// $bestOfTheBest->setAnnee(1990);
$bestOfTheBest->setDateRelease('05/06/2010');
$bestOfTheBest->setBudget("7845456465465");
// $bestOfTheBest->setVisible();
// $bestOfTheBest->setDistributeur();
// -------------------------------------------------- FIN SETTER FILM 1
// -------------------------------------------------- GETTER FILM 1
// echo $bestOfTheBest->getTitre();
// echo $bestOfTheBest->getSynopsis();
// echo $bestOfTheBest->getAnnee();
// echo $bestOfTheBest->getDateRelease();
// echo $bestOfTheBest->getBudget();
// echo $bestOfTheBest->getVisible();
// echo $bestOfTheBest->getDisctributeur();
// -------------------------------------------------- FIN GETTER FILM 1
// ---------------------------------------------------------------------
// //////////////////////////////////////////////////////////////////////////////////////////////
// -------------------------------------------------- FILM 2
// ---------------------------------------------------------------------
$coachCarter = new Movie(2005, "United International Pictures (UIP)", $myConnexion,500);
// -------------------------------------------------- SETTER FILM 2
$coachCarter->setTitre('Coach Carter');
$coachCarter->setSynopsis("L'histoire vraie de Ken Carter, l'entraîneur de basket d'une équipe de lycée, qui devint célèbre en 1999 après avoir renvoyé ses joueurs à leurs chères études, déclarant forfait deux matchs de suite alors que l'équipe était invaincue, parce que ces derniers n'avaient pas obtenu des résultats scolaires suffisants.");
// $coachCarter->setAnnee(2005);
$coachCarter->setDateRelease('17/08/2005');
$coachCarter->setBudget("30000000");
// $coachCarter->setVisible();
// $coachCarter->setDistributeur();

// -------------------------------------------------- FIN SETTER FILM 2
// -------------------------------------------------- GETTER FILM 2
// echo $coachCarter->getTitre();
// echo $coachCarter->getSynopsis();
// echo $coachCarter->getAnnee();
// echo $coachCarter->getDateRelease();
// echo $coachCarter->getBudget();
// echo $coachCarter->getVisible();
// echo $coachCarter->getDistributeur();
// -------------------------------------------------- FIN GETTER FILM 2
// ---------------------------------------------------------------------
// // //////////////////////////////////////////////////////////////////////////////////////////////
// ---------------------------------------------------------------------
// -------------------------------------------------- FILM 3
$Hobbit = new Movie(2012, "Warner Bros. France", $myConnexion,450);
// -------------------------------------------------- SETTER FILM 3
$Hobbit->setTitre('Le Hobbit : un voyage inattendu');
$Hobbit->setSynopsis("Dans UN VOYAGE INATTENDU, Bilbon Sacquet cherche à reprendre le Royaume perdu des Nains d'Erebor, conquis par le redoutable dragon Smaug. Alors qu'il croise par hasard la route du magicien Gandalf le Gris, Bilbon rejoint une bande de 13 nains dont le chef n'est autre que le légendaire guerrier Thorin Écu-de-Chêne. Leur périple les conduit au cœur du Pays Sauvage, où ils devront affronter des Gobelins, des Orques, des Ouargues meurtriers, des Araignées géantes, des Métamorphes et des Sorciers…
Bien qu'ils se destinent à mettre le cap sur l'Est et les terres désertiques du Mont Solitaire, ils doivent d'abord échapper aux tunnels des Gobelins, où Bilbon rencontre la créature qui changera à jamais le cours de sa vie : Gollum.
C'est là qu'avec Gollum, sur les rives d'un lac souterrain, le modeste Bilbon Sacquet non seulement se surprend à faire preuve d'un courage et d'une intelligence inattendus, mais parvient à mettre la main sur le 'précieux' anneau de Gollum qui recèle des pouvoirs cachés… Ce simple anneau d'or est lié au sort de la Terre du Milieu, sans que Bilbon s'en doute encore… ");
// $Hobbit->setAnnee(2012);
$Hobbit->setDateRelease('12/12/2012');
$Hobbit->setBudget("180000000");
// $Hobbit->setVisible();
// $Hobbit->setDistributeur();

// -------------------------------------------------- FIN SETTER FILM 3
// -------------------------------------------------- GETTER FILM 3
// echo $Hobbit->getTitre();
// echo $Hobbit->getSynopsis();
// echo $Hobbit->getAnnee();
// echo $Hobbit->getDateRelease();
// echo $Hobbit->getBudget();
// echo $Hobbit->getVisible();
// echo $Hobbit->getDistributeur();
// -------------------------------------------------- FIN GETTER FILM 3
// ---------------------------------------------------------------------
// // //////////////////////////////////////////////////////////////////////////////////////////////
// ---------------------------------------------------------------------
// -------------------------------------------------- FILM 4
$insideOut = new Movie(2015, "The Walt Disney Company France", $myConnexion,999);
// -------------------------------------------------- SETTER FILM 4
$insideOut->setTitre('Vice Versa');
$insideOut->setSynopsis("Au Quartier Général, le centre de contrôle situé dans la tête de la petite Riley, 11 ans, cinq Émotions sont au travail. À leur tête, Joie, débordante d’optimisme et de bonne humeur, veille à ce que Riley soit heureuse. Peur se charge de la sécurité,  Colère s’assure que la justice règne, et Dégoût empêche Riley de se faire empoisonner la vie – au sens propre comme au figuré. Quant à Tristesse, elle n’est pas très sûre de son rôle. Les autres non plus, d’ailleurs… Lorsque la famille de Riley emménage dans une grande ville, avec tout ce que cela peut avoir d’effrayant, les Émotions ont fort à faire pour guider la jeune fille durant cette difficile transition. Mais quand Joie et Tristesse se perdent accidentellement dans les recoins les plus éloignés de l’esprit de Riley, emportant avec elles certains souvenirs essentiels, Peur, Colère et Dégoût sont bien obligés de prendre le relais. Joie et Tristesse vont devoir s’aventurer dans des endroits très inhabituels comme la Mémoire à long terme, le Pays de l’Imagination, la Pensée Abstraite, ou la Production des Rêves, pour tenter de retrouver le chemin du Quartier Général afin que Riley puisse passer ce cap et avancer dans la vie… ");
// $insideOut->setAnnee(2015);
$insideOut->setDateRelease('17/06/2015');
$insideOut->setBudget("78");
// $insideOut->setVisible();
// $insideOut->setDistributeur();
// -------------------------------------------------- FIN SETTER FILM 4
// -------------------------------------------------- GETTER FILM 4
// echo $insideOut->getTitre();
// echo $insideOut->getSynopsis();
// echo $insideOut->getAnnee();
// echo $insideOut->getDateRelease();
// echo $insideOut->getBudget();
// echo $insideOut->getVisible();
// echo $insideOut->getDistributeur();
// -------------------------------------------------- FIN GETTER FILM 4
// ---------------------------------------------------------------------
// // //////////////////////////////////////////////////////////////////////////////////////////////
// // ---------------------------------------------------------------------
/**
 * [$tabInfo : Tableau associatif de mes films sur 1 niveau]
 * @var [string]
 */
$tabInfo = [
  'film1' => $bestOfTheBest,
  'film2' => $coachCarter,
  'film3' => $Hobbit,
  'film4' => $insideOut,
];
/**
 * J'affiche ici mes films qui sont parcouruent.
 */
//echo $bestOfTheBest->allInfoMovie($tabInfo);
echo $bestOfTheBest->getFrenchPrice();
echo $bestOfTheBest->compareBudget($insideOut);
echo $bestOfTheBest->compteMotsSynopsis();
echo $bestOfTheBest->tableauFilm($tabInfo);

if($bestOfTheBest->checkDistribVisible()){
  echo "<p>Oui le distributeur est WB et il est visible</p>";
} else {
  echo "<p>Ce n'est pas le bon distributeur ou il n'est pas visible</p>";
}



echo "<div class='col-md-12 well'>";
echo "<pre>";
  echo var_dump($insideOut);
echo "</pre>";
echo "</div>";


$bestOfTheBest->insererMovieInDb();


$tab=$bestOfTheBest->threeLastMovies("Warner Bros", "VF");
foreach($tab as $val){
  echo $val['title']."<br/>";
}




$bestOfTheBest->injectTableauMovies([$insideOut, $Hobbit]);

// Créer une méthode qui permet de supprimer en Base de données un film selon un parametre ID
// Mysql Requete de suppression: DELETE FROM ...
$bestOfTheBest->deleteMovieByid(38);
echo "<div class='col-md-12 well'>";
echo "<h4 style='color:black'>Supprimer un film</h4>";
echo "<pre>";
  echo var_dump($bestOfTheBest->deleteMovieByid(38));
echo "</pre>";
echo "</div>";

// CRéer une méthode permettant de modifier un film dans ma base de données selon un ID et un objet Movie envoyés en paramètre
// Mysql Requete: UPDATE ... SET
$bestOfTheBest->updateMovieByid(35, $insideOut);
echo "<div class='col-md-12 well'>";
echo "<h4 style='color:black'>Mettre à jour un film</h4>";
echo "<pre>";
  echo var_dump($bestOfTheBest->updateMovieByid(35, $insideOut));
echo "</pre>";
echo "</div>";

// Ajouter l'attribut id dans ma classe Movie. Cet id sera initialisé lors de la construction de mon objet
$test = new Movie (2999,"3wa" ,$myConnexion, 310);
$test->setTitre('Fiouk');
$test->setSynopsis("Synop.....");
// $test->setAnnee(1990);
$test->setDateRelease('01/05/2999');
$test->setBudget("1");



// echo deleteMovie();






include "footer.php";
?>
