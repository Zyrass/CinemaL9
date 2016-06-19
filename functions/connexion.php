<?php
// ====================================================================================
// ====================================================================================
// ------------------------------- CONNEXION DANS LA BDD ------------------------------
// ====================================================================================
// ====================================================================================
/*                          Je me connecter à la Base de données                      */
function connectionBdd($nomHost, $nomBdd, $login, $password, $charset = "utf8"){
  $bdd = new PDO("mysql:host={$nomHost};dbname={$nomBdd};charset={$charset}", $login, $password);
  return $bdd; // return -> retourne la connection de base de donnée
}
