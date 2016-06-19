<?php
include "vendor/autoload.php";
// On ré-inclus le fichier Connexion.php
// include "header.php";
// include "src/Connexion.php";
// On créer un nouvel objet
$connexion = new Connexion(9999, 'openclassroom');
// On récupère nos GETTER ET ON LES AFFICHENT
// Bonne pratique
echo $connexion->getCharset();
echo $connexion->getHost();
echo $connexion->getPassword();
echo $connexion->getLogin();
echo $connexion->getDbname();
echo $connexion->getTimeOut();
// timeOut


// On peut ici modifier nos attributs
$connexion->setHost("localhost");
$connexion->setLogin("toto");
$connexion->setPassword(123456);
$connexion->setTimeOut(10);
$connexion->setCharset("utf16");
$connexion->setDbname("Cool");

echo $connexion->setCharset($charset);
// On appel notre methode !!
echo $connexion->info();

// --- Exo 1
// + Créer un deuxième objets de la class connexion et utiliser la méthod info

$connexionTwo = new Connexion(45, '3waaa');
$connexionTwo->setHost("localhost");
$connexionTwo->setLogin("tototototo");
$connexionTwo->setPassword(159753);
$connexionTwo->setCharset("utf72");
$connexionTwo->setDbname("Ayapo.com");
$connexionTwo->setTimeOut(15);

echo "L'encodage est : <strong>{$connexionTwo->getCharset()}</strong><br />";
echo "Le temps de connexion est de : <strong>{$connexionTwo->getTimeOut()}</strong><br />";
echo "Mot de passe : <strong>{$connexionTwo->getPassword()}</strong><br />";
echo "Login : <strong>{$connexionTwo->getLogin()}</strong><br />";
echo "Dbname : <strong>{$connexionTwo->getDbname()}</strong><br />";
echo "Host : <strong>{$connexionTwo->getHost()}</strong><br />";



echo $connexionTwo->info();

// --- Exo 2
// + Créer une methode dans la class Connexion qui permet d'afficher sous une alerte
//   bootstrap le charset et le nom de la db de mes connexions
// --- BONUS EXO 2
// + Ajouter un paramètre qui permet de régler la couleur de cette alert (primary, danger...)

echo $connexionTwo->alert("danger");
echo $connexion->alert("info");


echo $connexionTwo->infoJumbotron("info");



$connexionThree = new Connexion(54, 'ovh');
$connexionThree->setHost("localhost");
$connexionThree->setLogin("tototototo");
$connexionThree->setPassword(159753);
$connexionThree->setCharset("utf72");
$connexionThree->setDbname("Ayapo.com");
$connexionThree->setTimeOut(15);

echo "L'encodage est : <strong>{$connexionThree->getCharset()}</strong><br />";
echo "Le temps de connexion est de : <strong>{$connexionThree->getTimeOut()}</strong><br />";
echo "Mot de passe : <strong>{$connexionThree->getPassword()}</strong><br />";
echo "Login : <strong>{$connexionThree->getLogin()}</strong><br />";
echo "Dbname : <strong>{$connexionThree->getDbname()}</strong><br />";
echo "Host : <strong>{$connexionThree->getHost()}</strong><br />";



$tabObjets = [$connexion, $connexionTwo, $connexionThree];
// Utiliser un objet de ma class pour pouvoir utiliser une des methode de cette class
echo $connexion->infoTabBootstrap($tabObjets);



// --- EXO 3
/**
* Créer une méthode qui permet d'afficher dans une colonne (col-x) de Bootstrap
* le jumbotron qui récapitule les informations d'une connexion
*
* On mettra en paramètre à cette méthode le numéro de cette colonne qui sera par defaut 3
*/

echo $connexion->colSize(2);

echo $connexion->colSizeTab($tabObjets);



/**
* Crée une methode qui compare 2 objets MongoConnexionException
* et retourn true si ils ont les même login et mdp
* et false si c'est le contraire
*
*/

/**
 * [$tabComparaison description]
 * @var [type]
 */
$tabComparaison = [
  "Connexion 1" => $connexion,
  "Connexion 2" => $newConnexionTwo
];
if($connexion->comparObj($tabComparaison) == true){
     echo "<div class='alert alert-danger col-md-4'>Le login et password sont identiques</div>";
  } else {
     echo "<div class='alert alert-success col-md-4'>Le login et password ne sont pas identiques</div>";
  }



echo "<div class=col-md-12>";
echo "<pre>";
if($connexionThree->compareOneObj($connexionTwo) == true) {
  echo "Les 2 objets ont une authentification identique";
} else {
  echo "Les 2 objets sont différent sur l'authentification";
}
echo "</pre>";
echo "</div>";



echo "<div class=col-md-12>";
  echo "<pre>";
     $connexionTen = new Connexion(3306, 'localhost');
     var_dump($connexionTen);
  echo "</pre>";
echo "</div>";




include "footer.php";
 ?>
