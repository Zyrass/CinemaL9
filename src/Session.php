<?php
namespace src;


/**
 *
 */
class Session
{

  protected $dateSession;
  protected $dateCreated;
  protected $idMovie;



  const NB_BILLET = "100";
  const TROISD = true;
  const ANNEE = 2012;


    /**
     * Get the value of Date Session
     *
     * @return mixed
     */
    public function getDateSession()
    {
        return $this->dateSession;
    }

    /**
     * Get the value of Date Created
     *
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Get the value of Id Movie
     *
     * @return mixed
     */
    public function getIdMovie()
    {
        return $this->idMovie;
    }














    /**
     * Set the value of Date Session
     *
     * @param mixed dateSession
     *
     * @return self
     */
    public function setDateSession($dateSession)
    {
        $this->dateSession = $dateSession;

        return $this;
    }

    /**
     * Set the value of Date Created
     *
     * @param mixed dateCreated
     *
     * @return self
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Set the value of Id Movie
     *
     * @param mixed idMovie
     *
     * @return self
     */
    public function setIdMovie($idMovie)
    {
        $this->idMovie = $idMovie;

        return $this;
    }








    // Créer une méthode qui permet de sortir
    // la date de la session au format "Le 15 Juin 2004 à 12h30"
    public function getDateFormatSession(){
      $date = new \DateTime('2004-06-15 12:30:00');
      return $date->format ('d/m/Y H:i:s');
    }
    // correction Zoé
    public function dateFormat(){

    $myDate = new \DateTime($this->datecreated);
    return $myDate->format('d/m/Y à H:i:s');

    }


    // Créer une méthode qui retourne l'année de la date de session
    public function getAnneeSortie(){
      $date = new \DateTime('2004-06-15 12:30:00');
      return $date->format ('Y');
    }
    // Créer une methode statique qui va prendre
    // 2 objets sessions en parametre et qui va retourner
    // la différences en nb de jours entre les dates de séances
    /*Martin */
    public static function getTheDiff(Session $session, Session $sessionTwo){
        $dateTimeOne = new \DateTime($session->getDateSession());
        $dateTimeTwo = new \DateTime($sessionTwo->getDateSession());

        $interval = $dateTimeOne-> diff($dateTimeTwo);

        return $interval-> format('%a days');
      }

    // Créer une méthode statique me retournant tous les séances de la table
    // session après un parametre $dateAfter de type à
    // (injecter la Connexioàn en parametre)
    /**STEEVE */
      public static function seanceAfter(\DateTime $dateAfter, Connexion $co){
        $req=$co->connect()->query(
        "SELECT id
        FROM sessions
        WHERE DATEDIFF(date_session, {$dateAfter->format('Y-m-d')})"
      );
      return $req->fetchAll();
      }

      /**
      * Créer une methode qui permet de soustraire la date de la session à une intervale donnée
      * en paramètre (fonction sub() de DatetIme)
      */
      public static function getTheDateSub($interval){
        $date = new \DateTime('2000-01-20');
        $date = sub(new \DateInterval($interval));
        return $date->format('d/m/Y H:i:s') . "\n";
      }

      // Correxion ROXANE
      // Permet de soustraire une intervale sur une date (objet DateTime);
      public function sousDateIntervale($intervale){
        var_dump($intervale);
        $dates = new \DateTime($this->getDateSession());
        $date = $dates->sub(new \DateInterval($intervale));

        return $date->format('d-m-Y H:i:s') . "\n";
      }



      /**
      * Créer une méthode qui prends en parametre un tableau d'objet Session et qui retourne
      * uniquement les objets Session qui ont une date de session en 2012
      */

      public static function getTabObjSession2012($tabFilm = []){

        $newTabObjs = [];

        foreach ($tabFilm as $value) {
          $date = new \DateTime($value->getDateSession());
          if ($date->format('Y') == self::ANNEE) {
            $newTabObjs[] = $value;
          }
        }
        return $newTabObjs;
      }
      /**
      * Créer une méthode qui prends en parametre 1 objet Session et 1 objet Datetime
      * et qui retourne true si l'objet Session a une date de session supérieur à mon objet Datetime
      * et false si l'objet Session a une date de session supérieur à mon objet Datetime
      *
      */
      public static function getOneObjSessAndOneObjDateTime(Session $sessionTwo,  \DateTime $sessionFive){

        if ($sessionTwo > $sessionFive) {
          return true;
        } else {
          return false;
        }
      }

      // * CORRECTION QUENTIN
      /**
       * Compares object and DateTime parameters
       * @param  [$objectSess]  Object of "Session" class
       * @param  [$objectDate]  Date type "DateTime"
       * @return [Boolean] true or false, if DateSession if greater or smaller
       */
      public static function boolIfSupOrInf(Session $objectSess, \DateTime $objectDate){

        $DateTimeSess = new \DateTime($objectSess->getDateSession());

         return $DateTimeSess > $objectDate;

      }// end funtion boolIfSupOrInf




    /**
      * Crée une méthode qui retourne le nombre de séances comprises entre 2 paramètres DateTime.
      */

      public static function getNbSeanceInTwoDate(\DateTime $sessionTwo, \DateTime $sessionFive){
        $req=$connexion->connect()->query(
        "SELECT (id)
         FROM sessions

         WHERE (date_session < {$sessionTwo->format('Y-m-d')}
         AND date_session > '{$sessionFive->format('Y-m-d')}' )

         OR (date_session > {$sessionTwo->format('Y-m-d')}
         AND date_session < '{$sessionFive->format('Y-m-d')}')"
      );

      $resultat = $req->fetchAll();

      return count($resultat);
      }

      /**
       * [returnSessionSelect description]
       * @param  [type] $dateTimeOne [description]
       * @param  [type] $dateTimeTwo [description]
       * @param  [type] $connect     [description]
       * @return [type]              [description]
       */
      public static function returnSessionSelect(\DateTime $dateTimeOne, \DateTime $dateTimeTwo, Connexion $connect){
      $req=$connect->connectionBdd()->query(
      "SELECT id, date_session
      FROM sessions
      WHERE date_session > '$dateTimeTwo' AND date_session < '$dateTimeOne'"
    );
    $resultat = $req->fetchAll();
    foreach($resultat as $result){
      echo "<div class='alert alert-warning'><hr/> Voici la Session : <span class=badge>".$result['id']."</span> // <p class='alert alert-info'>".$result['date_session'].'</p></div>';
    }
  }

}


?>
