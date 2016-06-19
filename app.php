<?php
include "vendor/autoload.php";

// 1* on récupère avec include notre connexion.php (Ce dernier inclus notre class)
// include "src/Connexion.php";
// On crée ici un objet de la class Connexion.
use src\Connexion;



$connexion = new Connexion("root", "troiswa", 3306, "localhost", "cinemal9");
// Je crée un second objet de la class Connexion.
// --------------------------------------------------------------------
// /!\ Nos variables ici sont appelé attribut
// --------------------------------------------------------------------
// ici on modifie l'attribut password
//$connexion->password = "troiswa";

// Affiche grâce à notre var_dump :
/*
object(Connexion)#1 (5) {
  ["host"]=> NULL
  ["login"]=> string(4) "root"
  ["password"]=>  string(7) "troiswa"
  ["charset"]=> string(4) "utf8"
  ["dbName"]=> NULL
}
*/
$connexionTwo = new Connexion("root", "troiswa", 3306, "localhost", "cinemal9");
//$connexionTwo->login = "admin";
//$connexionTwo->password = ""; // <- J'indique mon mot de passe que j'ai chez moi ce qui me permettra de me connecté simplement.
//$connexionTwo->charset = "latin-swedish"; // <- permet d'écraser la valeur par défaut qui était utf8
//$connexionTwo->timeOut = 2;

$connexionThree = new Connexion("root", "troiswa", 3306, "localhost", "cinemal9");
//$connexionThree->login = "modo";
//$connexionThree->host = "ovh.mysql.net";
//$connexionThree->password = "123";
//$connexionThree->charset = "ultra_general_ci";

$connexionFour = new Connexion("root", "troiswa", 3306, "localhost", "cinemal9");
//$connexionFour->login = "yo";
//$connexionFour->password = "yoyo";

$connexionFive = new Connexion("root", "troiswa", 3306, "localhost", "cinemal9");
//$connexionFive->login = "yaya";
//$connexionFive->password = "ya";
// Fonction de débogage pour l'orienté objet
// var_dump est l'équivalent de print_r() qui nous permettra d'afficher nos valeurs avec le type : "string, number etc..."


//----------------------------------------------------------- EXERCICES

// --- EXO 1
// + Généraliser tous les host en localhost par défaut
// + Créer une 3ème connexion en ultra general_ci sur le host ovh.mysql.net
// + Ajouter un attribut temps de connexion avec valeur par defaut 3 (secondes)
// + La seconde connexion aura elle 2 secondes de connexion

// --- EXO 2 + Exo 3 + Exo 4
// + Créer un tableau de 5 objets de connexion
// + afficher pour chaque objets le login et le mdp
// --- Exo 3
// + Dans l'affichage des connexions, si le login est root ou admin et que le host est localhost.
// + afficher "<p>La connexion est superAdmin en local</p>"
// --- Exo 4
// + Si le temps de connexion est inférieur ou égal à 2
// + Afficher "<p>La connexion est courte</p>"
// --- Exo 5
// + Modifier le temps d'exécution pour chaque objets à 5
// + Modifier la 2ème connexion pour qu'elle est le même login et mdp que la 1ère connexion

$tabConnexions = [ // /!\ Rien avoir avec un tableau associatif mais c'est un tableau d'OBJETS ASSOCIATIF
  "Connexion1" => $connexion,
  "Connexion2" => $connexionTwo,
  "Connexion3" => $connexionThree,
  "Connexion4" => $connexionFour,
  "Connexion5" => $connexionFive,
];
// $connexionCourante : élément courant dans ma boucle
/*foreach ($tabConnexions as $key => $connexionCourante) {
  echo "<p> Login: <b>{$connexionCourante->login}</b><br />
            Mot de passe : <b>{$connexionCourante->password}</b><br />
            Host : <b>{$connecionCourante->host}</b>
        </p>";
  if (
  ($connexionCourante->login == "root" || $connexionCourante->login == "admin")
  && $connexionCourante->host == "localhost"){
    echo "<p>La connexion est superAdmin en local</p>";
  }
  if ($connexionCourante->timeOut <= 2) {
    echo "<p>La connexion est courte</p>";
  }
}
// Je parcours le tableau d'objet en modifiant le timout directement ici
foreach ($tabConnexions as $obj) {
  $obj->timeOut = 5;
}

// + Modifier la 2ème connexion pour qu'elle est le même login et mdp que la 1ère connexion
foreach ($tabConnexions as $keyObjets => $valObjets) {
  if ($keyObjets == "Connexion1") {
    $valtempCoOneLogin = $valObjets->login;
    $valtempCoOnePassword = $valObjets->password;
  }
  if ($keyObjets == "Connexion2") {
    $valObjets->login = $valtempCoOneLogin;
    $valObjets->password = $valtempCoOnePassword;
  }
}
echo "<pre>";
var_dump($tabConnexions);
echo "</pre>";
// + Modifier la 2ème connexion pour qu'elle est le même login et mdp que la 1ère connexion FAçON ROXOUNETTE
$connexionTwo->login = $connexion->login;
$connexionTwo->password = $connexion->password;
// + Modifier la 2ème connexion pour qu'elle est le même login et mdp que la 1ère connexion FAçON Quentin
$connexion['Connexion2']->login = $connexionTwo['Connexion2']->login
*/
 ?>
