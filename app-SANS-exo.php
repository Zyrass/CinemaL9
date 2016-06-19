<?php
include "vendor/autoload.php";
// 1* on récupère avec include notre connexion.php (Ce dernier inclus notre class)
// include "src/Connexion.php";
// On crée ici un objet de la class Connexion.
$connexion = new Connexion();
// Je crée un second objet de la class Connexion.
// --------------------------------------------------------------------
// /!\ Nos variables ici sont appelé attribut
// --------------------------------------------------------------------
// La flèche permet de modifier l'atribut login
$connexion->login = "root";
// ici on modifie l'attribut password
$connexion->password = "troiswa";

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



$connexionTwo = new Connexion();
$connexionTwo->login = "root";
$connexionTwo->password = ""; // <- J'indique mon mot de passe que j'ai chez moi ce qui me permettra de me connecté simplement.
$connexionTwo->charset = "latin-swedish"; // <- permet d'écraser la valeur par défaut qui était utf8

// Fonction de débogage pour l'orienté objet
// var_dump est l'équivalent de print_r() qui nous permettra d'afficher nos valeurs avec le type : "string, number etc..."
var_dump($Connexion);


//----------------------------------------------------------- EXERCICES

// --- EXO 1
// + Généraliser tous les host en localhost par défaut
// --- EXO 2
// + Créer une 3ème connexion en ultra general_ci sur le host ovh.mysql.net
// --- Exo 3
// + Ajouter un attribut temps de connexion avec valeur par defaut 3 (secondes)
// + La seconde connexion aura elle 2 secondes de connexion
 ?>
