<?php
namespace src;
/*
* Class représentative de ma Connexion en bdd
// La norme veut que la class commence par une Majuscule et porte le nom de mon fichier
*/

// on a créer un fichier à la racine app.php 1*
class Connexion {
  // --------------------------
  /*
  * Attribut host
  */
  public $host;
  // --------------------------
  /*
  * Attribut login
  */
  public $login;
  // --------------------------
  /*
  * Attribut charset
  */
  public $charset = "utf8"; // On peut ajouter une valeur par défaut
  // --------------------------
  /*
  * Attribut password
  */
  public $password;
  // --------------------------
  /*
  * Attribut dbname
  */
  public $dbname;
  /*
  // --------------------------

  // Si non renseigné cela affichera dans app :
  /*
    object(Connexion)#1 (5) {
      ["host"]=> NULL
      ["login"]=> NULL
      ["password"]=> NULL
      ["charset"]=> NULL
      ["dbName"]=> NULL
    }

  */


}

?>
