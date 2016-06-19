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
  protected $host = "localhost";
  // --------------------------
  /*
  * Attribut login
  */
  protected $login = "root";
  // --------------------------
  /*
  * Attribut charset
  */
  protected $charset = "utf8"; // On peut ajouter une valeur par défaut
  // --------------------------
  /*
  * Attribut password
  */
  protected $password;
  // --------------------------
  /*
  * Attribut dbname
  */
  protected $dbname;
  // --------------------------
  /*
  * Attribut tempsConnexion
  */
  protected $timeOut = 1; // On spécifie un temps de connexion par défaut à 3 secondes.

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
  /**
   * Constante SGBD
   */
  const SGBD = "Mysql";

  /*
  * GETTER
  * Accéder à l'attribut host
  */
  public function getHost(){
    return $this->host;
  }
  /*
  * GETTER
  * Accéder à l'attribut login
  */
  public function getLogin(){
    return $this->login;
  }
  /*
  * GETTER
  * Accéder à l'attribut password
  */
  public function getPassword(){
    return $this->password;
  }
  /*
  * GETTER
  * Accéder à l'attribut dbname
  */
  public function getDbname(){
    return $this->dbname;
  }
  /*
  * GETTER
  * Accéder à l'attribut charset
  */
  public function getCharset(){
    return "Le type d'encodage est : <strong>{$this->charset}</strong><br />";
  }
  /*
  * GETTER
  * Accéder à l'attribut timeOut
  */
  public function getTimeOut(){
    return "Le temps de connexion est de : <strong>{$this->timeOut} secondes</strong><br />";
  }




  /*
  * SETTER
  * Modifier l'attribut $charset
  */
  public function setCharset($charset){
    $this->charset = $charset; // Le égale $charset correspond au paramètre de notre SETTER
  }
  /*
  * SETTER
  * Modifier l'attribut $login
  */
  public function setLogin($login){
    $this->login = $login; // Le égale $login correspond au paramètre de notre SETTER
  }
  /*
  * SETTER
  * Modifier l'attribut $password
  */
  public function setPassword($password){
    $this->password = $password; // Le égale $password correspond au paramètre de notre SETTER
  }
  /*
  * SETTER
  * Modifier l'attribut $timeOut
  */
  public function setTimeOut($timeOut){
    $this->timeOut = $timeOut; // Le égale $timeOut correspond au paramètre de notre SETTER
  }
  /*
  * SETTER
  * Modifier l'attribut $host
  */
  public function setHost($host){
    $this->host = $host; // Le égale $host correspond au paramètre de notre SETTER
  }
  /*
  * SETTER
  * Modifier l'attribut $dbname
  */
  public function setDbname($dbname){
    $this->dbname = $dbname; // Le égale $dbname correspond au paramètre de notre SETTER
  }


  /*
  * METHODE
  * C'est en gros une fonction dans une class.
  // /!\ $this représente l'objet courant dans ma class
  */
  public function info(){
    return "<p>Host : {$this->host}<br />
            Login : {$this->login}<br />
            Password : {$this->password}</br>
            </p>";
  }


  // --- Exo 2
  // + Créer une methode dans la class Connexion qui permet d'afficher sous une alerte
  //   bootstrap le charset et le nom de la db de mes connexions
  // --- BONUS EXO 2
  // + Ajouter un paramètre qui permet de régler la couleur de cette alert (primary, danger...)
  // --- BONUS 2
  // + L'icone font-awesome a mettre dans mon alert
  // + Par defaut, l'icone sera un point d'esclamation
  // -- Exo 3
  // + Crée une méthode qui m'affiche toutes mes informations de la connexion
  // + Sous une div Jumbotron (Bootstrap)
  // + Information, Login, password, base de donné et charset
  public function alert($typeAlert = "info", $icon = "<i class='fa fa-exclamation' aria-hidden='true'></i>"){
    if (preg_match('/^info|warning|danger|success$/i', $typeAlert)) {
      return "<div class='alert alert-{$typeAlert}'>
                <p>Charset : <strong>{$this->charset}</strong><span class='pull-right'>$icon</span></p>
                <p>DBname : <strong>{$this->dbname}</strong><span class='pull-right'>$icon</span></p>
              </div>";
    } else {
      return "Attention, c'est une mauvaise classe de bootstrap...";
    }

  }

  /**
  * Affiche sous une alert mes infos de connexion
  * @param $classAlert : class de mon alert
  * @param $icon : font-awesome
  * @return string: Mon alert de bootstrap
  */



  /**
  *
  * Permet d'afficher sous Jumbotron les infos de ma connexion
  * @param $couleur : string Nom de la couleur sous Jumbotron
  *
  */
  public function infoJumbotron($typeAlert = "success"){
    return "<div class='jumbotron'>
              <p class='bg-{$typeAlert}'>Authentification : {$this->login} {$this->password} </p>
              <p class='bg-{$typeAlert}'>Base de données : {$this->dbname} {$this->charset}</p>
            </div>";
  }


  /**
  * Affiche les attribut login et password pour chaque objet
  * @param $tabObjets : Tableau d'objets de la class connexion
  *
  **/
  public function infoTabBootstrap($tabObjets = []){

    foreach ($tabObjets as $key => $value) {
      echo "<div class='alert alert-info'>
              {$value->login} {$value->password}
            </div>";
    }
  }

  // --- EXO 3
  /**
  * Créer une méthode qui permet d'afficher dans une colonne (col-x) de Bootstrap
  * le jumbotron qui récapitule les informations d'une connexion
  *
  * On mettra en paramètre à cette méthode le numéro de cette colonne qui sera par defaut 3
  */

  /**
  * Je créer une méthode qui me permet d'afficher la taille d'une colonne dans bootstrap
  * @param : $size -> Me permet de définir la taille
  * @param : $type -> Me permet de sélectionner la taille afficher à l'écran
  *
  */

  public function colSize($size = 3){
    return "<div class='col-sm-{$size}'>
              <div class='jumbotron'>
                <p>{$this->login}</p>
                <p>{$this->password}</p>
                <p>{$this->host}</p>
                <p>{$this->charset}</p>
                <p>{$this->dbname}</p>
                <p>{$this->timeOut}</p>
              </div>
            </div>";
  }

/**
 * [setColSizeTab Parcour mon tableau d'objet pour mettre chaque element dans un col-md ]
 * @param [type] $tabObjects [Le tableau d'objets]
 * --------------------------------------------------
 * @return Le contenu éditer en html
 */

public function colSizeTab($tabObjets = []){
  $html = "";
  foreach ($tabObjets as $obj) {
    $html .= $obj->colSize();
  }
  return $html;
}


  /**
  * Crée une methode qui compare 2 objets Connexion
  * et retourn true si ils ont les même login et mdp
  * et false si c'est le contraire
  *
  */

  /**
   * [comparObj description]
   * @param  [type] $tabComparaison [description]
   * @return [type]                 [description]
   */
  public function comparObj($tabComparaison){
       if($tabComparaison['Connexion 1']->login == $tabComparaison['Connexion 2']->login
         && $tabComparaison['Connexion 1']->password == $tabComparaison['Connexion 2']->password){
           return true;
       } else {
         return false; // pas obligatoire
       }
   }

   /**
    * [compareOneobj description]
    * @param  Connexion $obj [description]
    * @return [type]         [description]
    *
    * Type hinting : Type l'objet en paramètre
    */
   public function compareOneObj (ConnexionSrc $obj) {
     if($this->login == $obj->login && $this->password == $obj->password) {
       return true;
     }
     return false;
   }

/**
 * [$port description]
 * @var [type] : Port de ma connexion
 */
protected $port;

/**
 * Constructeur de ma classe
 * C'est une méthode qui me permet d'initialiser mon objet
 * La méthode peut retourner un objet
 */
public function __construct($login, $password, $port, $host, $dbname = ""){

  $this->login = $login;
  $this->password = $password;
  $this->port = $port;
  $this->host = $host;
  $this->dbname = "cinemal9";
}


/**
 * [connect description]
 * Permet une connexion à la base de données
 * @return [DBO Objet se connecter à la bdd avec PDO]
 */
public function connect(){

  $connexion = new \PDO("mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}", $this->login, $this->password);

  return $connexion;


}






}




?>
