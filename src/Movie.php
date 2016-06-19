<?php
namespace src;
use \DateTime;
// --------------------------------------------------------------------------------------------
// + CREATION D'UNE CLASS MOVIE AVEC LES ATTRIBUTS
// + TITRE, SYNOPSIS, ANNEE, DATE_RELEASE, BUDGET
// + AJOUTER LES GETTER ET SETTER
// + CREER UNE METHOD QUI AFFICHE
// + TOUTES LES INFOS D'UN OBJET MOVIE
// + CREER 4 OBJETS DE LA CLASSE MOVIE
// + LA CONSTRUCTION DE L'OBJET PERMETTRA D'INITIALISER
// + L'ANNEE À L'ANNEE D'AUJOURD'HUI
// --------------------------------------------------------------------------------------------

class Movie {

    /**
     * Attributs de ma classe Movie
     * --------------------------------------
     * @param [$titre]         -> défini le titre du film
     * @param [$ynopsis]       -> Synopsis en relation avec le titre du film
     * @param [$annee]         -> défini l'année du film
     * @param [$date_release]  -> défini la date de sortie du film
     * @param [$budget]        -> défini l'investissement du film
     * @param [$visible]       -> défini la visibilité de mon film
     * @param [$distributeur]  -> Spéfici le distributeur
     */
    protected $titre;
    protected $synopsis;
    protected $annee;
    protected $date_release;
    protected $budget;
    protected $visible = true;
    protected $distributeur;
    protected $connexion;
    protected $id;
    protected $prix;
      protected $diametre;
        protected $poids;

    const VERSION = "1.0";
  // -------------------------------------------------- GETTER

  /**
   * [getTitre]
   * @return [string] [Le titre du film]
   */
  public function getTitre(){
    return $this->titre;
  }
  /**
   * [getSynopsis]
   * @return [string] [Le synopsis du film]
   */
  public function getSynopsis(){
    return $this->synopsis;
  }
  /**
   * [getAnnee]
   * @return [int] [L'année du film]
   */
  public function getAnnee(){
    return $this->annee;
  }
  /**
   * [getDateRelease]
   * @return [] [L'année de sortie du film]
   */
  public function getDateRelease(){
    return $this->date_release;
  }
  /**
   * [getBudget]
   * @return [string] [Le budget total du film]
   */
  public function getBudget(){
    return $this->budget;
  }

  public function getVisible(){
    return $this->visible;
  }

  /**
   * [getTitre]
   * @return [string] [Le titre du film]
   */
  public function getConnexion(){
    return $this->connexion;
  }

  /**
   * [getDistributeur]
   * @return [string] [Cette fonction renvoie le nom du distributeur du film]
   */
  public function getDistributeur(){
    return $this->distributeur;
  }
  /**
   * [getYearNow]
   * @return [string] [renvoi l'année d'aujourd'hui]
   */
  public function getYearNow(){
    return date("Y");
  }

  public function getMovieId(){
    return $this->$id;
  }



  // -------------------------------------------------- __CONSTRUCTEUR
  /**
   * [__construct]
   * @param string $distributeur [Si Null alors on ajoute un "?" par défaut..
   *                              Sinon on saisi son contenu]
   * @param int $annee [ Si mon année est NULL
   *                   	alors j'ajoute l'année d'aujourd'hui
   *                    sinon l'année sera ajouter dynamiquement]
   */
  public function __construct($annee = "", $distributeur = "?", Connexion $connexion = null, $id ="", $titre = "") {
    // ---------------------------------------------
    // ---- CONNEXION
    // ---------------------------------------------
    // J'initialise ma connexion à la base de données par l'intermédiaire de mon objet $connexion
    $this->connexion = $connexion->connect();
    // ---------------------------------------------
    // ---- TITRE
    // ---------------------------------------------
      $this->titre = $titre;
    // ---------------------------------------------
    // ---- ID
    // ---------------------------------------------
    if(!empty($id))
      {
        $this->id = $id;
      }
    // ---------------------------------------------
    // ---- DISTRIBUTEUR
    // ---------------------------------------------
      if ($distributeur == "") {
      $this->distributeur = $distributeur;
    } else {
      $this->distributeur = $distributeur;
    }
    // ---------------------------------------------
    // ---- ANNEE
    // ---------------------------------------------
    if ($annee == "") {
      $this->annee = date("Y");
    } else {
      $this->annee = $annee;
    }
    // ---------------------------------------------
  }
  // -------------------------------------------------- SETTER
  /**
   * [setTitre]
   * @param [string] $titre [Edit le titre du film]
   */
  public function setTitre($titre){
    $this->titre = $titre;
  }
  /**
   * [setSynopsis]
   * @param [type] $synopsis [Le synopsis du film]
   */
  public function setSynopsis($synopsis){
    $this->synopsis = $synopsis;
  }
  /**
   * [setAnnee]
   * @param [type] $annee [L'année du film]
   */
  public function setAnnee($annee){
    $this->annee = $annee;
  }
  /**
   * [setDateRelease]
   * @param [type] $date_release [Date de sortie du film]
   */
  public function setDateRelease($date_release){
    $this->date_release = $date_release;
  }
  /**
   * [setBudget]
   * @param [type] $budget [budget du film]
   */
  public function setBudget($budget){
    $this->budget = $budget;
  }

  public function setMovieId($id){
    $this->id = $id;
  }

  // -------------------------------------------------- METHODE
  public function allInfoMovie($tabInfo){
    foreach ($tabInfo as $filmNumero => $contenuDuFilm) {
      echo "<div class='col-md-offset-2 col-md-8 alert alert-info'>
              <h1 style='color:black' class='text-right'>{$contenuDuFilm->titre}</h1>
              <blockquote>
                <p>{$contenuDuFilm->synopsis}</p>
                <p class='alert alert-warning text-center'>DISTRIBUTEUR : <strong>{$contenuDuFilm->distributeur}</strong></p>
                <hr />
                <div  class='well'>
                  <footer>{$contenuDuFilm->annee}</footer>
                  <footer>{$contenuDuFilm->budget}</footer>
                  <footer>{$contenuDuFilm->date_release}</footer>
                </div>
              </blockquote>
            </div>";
    }
  }

  /*
  * Exercice 2:
  *
  *
  * + Créer


  * +
  * +
  *
  * + Créer une méthode qui prends en parametre un tableau de film et qui me retourne la moyenne des budgets inférieur à 1 000 000€
  */

 /**
  * [budgetConvertEuro]
  * une methode qui retourne le budget du Movie formaté en français avec 2 000 000 €
  * @param  string $budget :
  * @return [string]
  */
  public function getFrenchPrice(){
    return number_format($this->budget, 0, '.', ' ')."€";
   }
  /**
   * [compareBudget]
   * Créer une méthode qui compare 2 budgets de 2 films et qui retourne le film le plus cher
   * @return [string] [Saisir un film afin de comparer un autre film]
   */
  public function compareBudget(Movie $filmTemp){
    if ($this->budget > $filmTemp->budget) {
      return "<div class='col-md-12'>
                <div class='alert alert-warning'>
                  <p>Mon film {$this->titre} dispose d'un buget supérieur</p>
                </div>
              </div>";
    } else if ($this->budget < $filmTemp->budget) {
      return "<div class='col-md-12'>
                <div class='alert alert-warning'>
                  <p>Mon film {$filmTemp->titre} dispose d'un buget supérieur</p>
                </div>
              </div>";
    } else {
      return "<div class='col-md-12'>
                <div class='alert alert-warning'>
                  <p>Mon film {$this->titre} et mon film {$filmTemp->titre} dispose d'un buget équivalent</p>
                </div>
              </div>";
    }
  }
  /**
   * [compteMotSynopsis description]
   * Créer une méthode qui me retourne le nombre de mots que comporte le synopsis.
   * On retournera ce nombre sous un badge Boostrapp
   * @return boolean [description]
   */
  public function compteMotsSynopsis() {
    return "<div class='col-md-12'>
              <div class='alert alert-info'>
                <blockquote>
                  <p>{$this->synopsis}</p>
                  <footer class='pull-right'>Mon synopsis dispose de
                  <span class='badge'>".str_word_count($this->synopsis)."</span> mots</footer>
                </blockquote>
              </div>
            </div>";
  }
  /**
   * [tableauFilm]
   * Créer une methode qui prends en paramètre un tableau de film
   * et qui me retourne le nb de film qui ont un budget inférieur à 1 000 000€
   * @return [array] [Spéficie l'intégralité du tableau de film]
   */
  public function tableauFilm($tabInfo){
    $compteur = 0;
    foreach ($tabInfo as $keyTabInfo => $valTabInfo) {
      if ($valTabInfo < 1000000) {
        $compteur++;
      }
    }
    return "<div class='col-md-12'>
            <div class='alert alert-info'>
              <p>Vous disposer de : ".$compteur." films avec un budget inférieur à 1.000.000 €</p>
            </div>
          </div>";
  }

  /// CORRECTION MARTIN

 public function movieBudget($tabMovie){
    $sum = $compteur = 0;
    // setlocale(LC_MONETARY, 'fr_fr');
    foreach ($tabMovie as $value) {
      echo $value->titre." ".money_format('as un budget de %i',$value->budget)."€";
      echo "<br/>";
      if ($value->budget < 100000){
        $sum += $value->budget;
        $compteur++;
      }

    }
    $moyenne = $moy / $moyTwo;

    return "la moyenne des budget inferieur a 1000000 est "."<div class='alert alert-danger'>".$moy/$moyTwo." € </div>
    et le nombre de film avec ce type de budget est de $compteur";
  }



  // * + Créer une méthode qui me dit si oui ou non le film est en distributeur Warner Bros et s'il est visible
  public function checkDistribVisible(){
    if($this->distributeur == "Warner Bros" && $this->visible == true) {
      return true;
    }
    return false;
  }



/**
* Calclul la moyenne de budget des film ayant un petit budget (moins de 1 000 000)
* @param  [array] tableau d'objet
* @return [integer] moyenne des budget ()
*/
public function getMoyFilmPetitBudget($tabObjet=[]){
 $budgetTot =  $nbFilm =  $budgetMoyen =0;

 foreach ($tabObjet as $key => $value) {
   // budget formaté au départ au format en français 350 000 000€
   // int permet de transformer une chaine en nombre
   // str_replace() permet de remplacer un caractère par un autre
   //
   if ((int) str_replace( " ", "", $value->budget) <= 10000000) {
     $budgetTot = $budgetTot + ((int) str_replace( " ", "", $value->budget));
     $nbFilm ++;
   }
 }
 return $budgetMoyen = ($budgetTot/$nbFilm);
}



  /**
  * Commentaires :
  * Summary (1 phrase)
  * @param String $titre : Titre de mon objet MOvie
  * @par$typeAlerturn String: le budget du film le plus cher
  *
  */

  /*
  * Exercice 3:
  * Créer une méthode dans la classe Connexion qui retourne un objet PDO permettant la connexion à la BDD Cinema L9
  * Créer un attribut $connexion dans la classe Movie qui est un objet de la classe Connexion
  * Créer une methode qui permettra d'insérer un objet movie dans ma table movie
  *
  * Créer une méthode qui me retourne les 3 derniers films français visibles
   avec pour paramètre le nom du distributeur et la bo
  *
  * Ajouter l'attribut id dans ma classe Movie. Cet id sera initialiser lors de la construction de mon objet
  * Créer une méthode qui permettra d'insérer un commentaire à partir d'un parametre objet Movie
  *
  */

  /**
   * [insererMovieInDb]
   * Permettre d'insérer un film dans ma base de donnée
   * @return [type] [description]
   */
  public function insererMovieInDb(){

    $ask = $this->connexion->prepare(
      "INSERT INTO movies(title, synopsis, annee, budget, date_release)
       VALUES(:title, :synopsis, :annee, :budget, :dateR)"
    );
    $ask->execute([
      'title' => $this->titre,
      'synopsis' => $this->synopsis,
      'annee' => $this->annee,
      'budget' => $this->budget,
      'dateR' => $this->dateRelease,
    ]);
  }

  public function threeLastMovies($distributeur, $bo){
    $ask = $this->connexion->query(

    "SELECT title
     FROM movies
     WHERE bo like '$bo'
     AND languages = 'fr'
     AND visible = 1
     AND distributeur like '$distributeur'
     ORDER BY created_at DESC
     LIMIT 3"
   );
   $reponse = $ask->fetchAll();
   return $reponse;
  }

  public function injectTableauMovies($tabInfo = []){
    foreach ($tabInfo as $key => $value) {
      if ($value->existMovieInDb() == false) {
      $value->insererMovieInDb();
      }
    }
  }

  public function existMovieInDb(){
    $ask = $this->connexion->query(
    "SELECT title
    FROM movies
    WHERE title = '{$this->title}'" // title ici est l'alias de ma requête
    );

    $resultat = $ask->fetch();

    if ($resultat == false) {
      return false;
    } else {
      return true;
    }
  }

/**
 * [deleteMovieByid description]
 * Créer une méthode qui permet de supprimer en Base de données un film selon un parametre ID
 * Mysql Requete de suppression: DELETE FROM ...
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
  public function deleteMovieByid($id){
    $ask = $this->connexion->prepare(
    "DELETE FROM movies
     WHERE id = :id"
    );
    return $ask->execute([
      "id" => $id
    ]);
  }

  /* coorection martin */
  public function deleteMovie($idMovie){
  $req=$this->connexion->prepare(
  'DELETE FROM movies
  WHERE id= :id
  ');
  $req->execute([
    'id'=>$idMovie,
  ]);
  return "<div class='alert alert-info'>Reqûete exécuté</div>";
  }

  // CRéer une méthode permettant de modifier un film dans ma base de données selon un ID et un objet Movie envoyés en paramètre
  // Mysql Requete: UPDATE ... SET
  public function updateMovieByid($id, Movies $filmAmodif){
    $ask = $this->connexion->prepare(
    "UPDATE movies
     SET title = :title, synopsis = :synopsis, annee = :annee, date_release = :dateR,
      budget = :budget, distributeur = :distributeur
     WHERE id = :id"
    );

    return $ask->execute([ // execute returne un booleen
      "id" => $id,
      "title" => $filmAmodif->titre,
      "synopsis" => $filmAmodif->synopsis,
      "annee" => $filmAmodif->annee,
      "dateR" => $filmAmodif->date_release,
      "budget" => $filmAmodif->budget,
      "distributeur" => $filmAmodif->distributeur,
    ]);
  }

  /* Correction Olivier */

  /**
   * [updateMoviesFromID description]
   * @param  [type] $id    ID du film à modifier
   * @param  Movies $movie Onjet Filmm
   * @return [type]        Bootsrap alert pour requete ok
   */
  public function updateMoviesFromID($id, Movies $movie){
    $req=$this->connection->prepare(
    "UPDATE movies
      SET title= :titre,
        synopsis= :synopsis,
        annee= :annee,
        date_release= :dateRelease,
        budget= :budget,
        visible= :visible,
        distributeur= :distributeur
        WHERE id = :id

    ");

    $req->execute([
      'id' => $id,
      'titre' => $movie->titre,
      'synopsis' => $movie->synopsis,
      'annee' => $movie->annee,
      'dateRelease' => $movie->dateRelease,
      'budget' => $movie->budget,
      'visible' => $movie->visible,
      'distributeur' => $movie->distributeur,
    ]);
    return '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>Requete executée</div>';
  }




  public function insererMovieInDb2(){

    $ask = $this->connexion->prepare(
      "INSERT INTO movies(title, synopsis, annee, budget, date_release)
       VALUES(:title, :synopsis, :annee, :budget, :dateR)"
    );
    $ask->execute([
      'title' => $this->titre,
      'synopsis' => $this->synopsis,
      'annee' => $this->annee,
      'budget' => $this->budget,
      'dateR' => $this->dateRelease,
    ]);
  }

  // Créer une méthode permettant de retrouver un movie par son titre donné en parametre.
  // Cette methode retournera false si on ne trouve pas dans la table movie le film par son titre

  public function controlePresenceFilmDB(){
    $ask = $this->connexion->query(
    "SELECT title
    FROM movies
    WHERE title = '{$this->titre}'"
    );

    $resultat = $ask->fetch();

    if ($resultat == false) {
      return false;
    } else {
      return true;
    }
  }

  // correction Zoé
  public function retrouverFilmbyTitle($titre){

$req = $this->connexion->query(
 "SELECT title
 FROM movies
 WHERE title = '{$titre}'
 ");

$resultat = $req->fetch();

if($resultat == false){

 return false;

}

 return true;

}

// Créer une méthode qui me retourne le nombre de films dans ma table Movies selon 2 paramètres: minBudget et maxBudget.
// Ces 2 paramètres vont modifier dynamiquement la requete sur le budget minimum et le budget maximum.

/* Correction steeve */
public function nombreFilm($budgetMin = 0, $budgetMax = 0){
 $req=$this->connexion->query(
   "SELECT COUNT(title)
   FROM movies
   WHERE budget<$budgetMax AND budget>$budgetMin
   ");

 $resultat=$req->fetch();
 return $resultat;
}

// Créer une méthode permettant de prendre en paramètre un objet Movie  et dire si sa date release est passée ou futur
/* Correction */

/**** -> Oliver */



public function testDateReleaseFromMovie (Movies $movie){
 $req=$this->connection->query(
   "SELECT *
   FROM movies
   WHERE title= '{$movie->titre}'
 ");
 $resultQuery = $req->fetch();
   $myDate = DateTime::createFromFormat('Y-m-d', $resultQuery["date_release"]);
   $myDateTimeNow = new DateTime('now');

   if ($myDate > $myDateTimeNow == true) {
     return "après";
   }
   return "avant";
}



// Créer une méthode qui récupère le nom de la catégorie et sa description
// selon l'ID du film envoyé en paramètre ou le titre du film envoyé en paramètre facultatif


public function recupCatDesc($id = '', $title = ""){

$ask=$this->connexion->query(

"SELECT categories.title, categories.description
 FROM categories
 INNER JOIN movies
 ON movies.id = categories.id
 WHERE movie.id = {$id}
 OR categories.id = {$this->id}
 ");

 return $resultat = $ask->fetch();


}

// Méthode statique
// C'est une méthode particlulière qui ne traite qu'avec des constantes.
// Je ne peut pas utiliser $this dans une méthode statique
public static function getInformationOfMovie(){
  return "<div>
            La version par défaut de tous mes films
            ".self::VERSION."
          </div>";
}





    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set the value of Visible
     *
     * @param mixed visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Set the value of Distributeur
     *
     * @param mixed distributeur
     *
     * @return self
     */
    public function setDistributeur($distributeur)
    {
        $this->distributeur = $distributeur;

        return $this;
    }

    /**
     * Set the value of Connexion
     *
     * @param mixed connexion
     *
     * @return self          if($promotion!=0){
            $this->prix=$this->prix+$promotion;
          }
          if($reduction!=0){
            $this->prix=$this->prix - ($this->prix * $promotion);
          }
      }Movie
     */
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;

        return $this;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    //   * + Créer une methode permettant de modifier le prix selon 2 paramètres: une promotion
    //   (en €: valeur de 0 par défaut)
  	// ou une réduction (en %, valeur de 0% par defaut) sur tous les DVD ou tout les BlueRay





    public function modifPrix($promotion=0, $reduction=0){

      $prixDeBase = $this->prix;
      $prixModif = $this->prix;
      // var_dump($prixModif, $prixDeBase);

      if($promotion!=0){
        $prixModif = $prixDeBase - $promotion;
        // var_dump($prixModif);
      }
      if($reduction!=0){
        $prixModif = $prixDeBase - (($prixDeBase * $reduction) / 100);
        // var_dump($prixModif);
      }

      return number_format($prixModif, 2, ",", " ")." €";
    }



    /**
     * Get the value of Prix
     *
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of Prix
     *
     * @param mixed prix
     *
     * @return self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    // --------------------- Dire si le dvd et le blueray sont bien sortie cette année
    public static function getDateReleaseDvdBlueray(){
      $newAnnee = new \DateTime('Year');
      $date_release = new \DateTime('now');
      $obj = new \DateTime($this->date_release);
      if ($obj === $newAnnee) {

        return true;

      }

      return false;
    }
    /**
     * Get the value of Diametre
     *
     * @return mixed
     */
    public function getDiametre()
    {
        return $this->diametre;
    }

    /**
     * Set the value of Diametre
     *
     * @param mixed diametre
     *
     * @return self
     */
    public function setDiametre($diametre)
    {
        $this->diametre = $diametre;

        return $this;
    }

    /**
     * Get the value of Poids
     *
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of Poids
     *
     * @param mixed poids
     *
     * @return self
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }


    public function insert1x(){
      if ($this->controlePresenceFilmDB() == false) {
        $this->insererMovieInDb();
      }
    }



} // Accolade de fin de ma classe Movie


?>
