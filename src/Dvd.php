<?php
namespace src;

/**
 *
 */
class Dvd extends Movie
{
  protected $prixTtc;
  protected $taxe = 19.6;
  protected $capacite = ['4Go', '6Go', '8Go', '16Go', '32Go', '64Go', '128Go', '256Go', '512Go'];
  protected $fabricant = ['Phillips', 'Sony', 'Toshiba'];
  protected $coucheDouble;

  const DIAMETRE = '12Cm';
  const POIDS = "10gr";


    /**
     * Get the value of Prix Ttc
     *
     * @return mixed
     */
    public function getPrixTtc()
    {
        return $this->prixTtc;
    }

    /**
     * Get the value of Taxe
     *
     * @return mixed
     */
    public function getTaxe()
    {
        return $this->taxe;
    }

    /**
     * Get the value of Capacite
     *
     * @return mixed
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Get the value of Fabricant
     *
     * @return mixed
     */
    public function getFabricant()
    {
        return $this->fabricant;
    }

    /**
     * Get the value of Couche Double
     *
     * @return mixed
     */
    public function getCoucheDouble()
    {
        return $this->coucheDouble;
    }


    // ---------------------------------------------
    // ---- CONNEXION
    // ---------------------------------------------
    // J'initialise ma connexion à la base de données par l'intermédiaire de mon objet $connexion;
/**
 * J'écrase mon constructeur parent par mon constructor
 * On appel ça Overridé .... ou un Override
 * @param [type] $connexion [description]
 */
    public function __construct(Connexion $connexion = null) {
      if($connexion == true){
        $this->connexion = $connexion->connect();
        var_dump($this->connexion);

      }
    }





    /**
     * Set the value of Prix Ttc
     *
     * @param mixed prixTtc
     *
     * @return self
     */
    public function setPrixTtc($prixTtc)
    {
        $this->prixTtc = $prixTtc;

        return $this;
    }

    /**
     * Set the value of Taxe
     *
     * @param mixed taxe
     *
     * @return self
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;

        return $this;
    }

    /**
     * Set the value of Capacite
     *
     * @param mixed capacite
     *
     * @return self
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Set the value of Fabricant
     *
     * @param mixed fabricant
     *
     * @return self
     */
    public function setFabricant($fabricant)
    {
        $this->fabricant = $fabricant;

        return $this;
    }

    /**
     * Set the value of Couche Double
     *
     * @param mixed coucheDouble
     *
     * @return self
     */
    public function setCoucheDouble($coucheDouble)
    {
        $this->coucheDouble = $coucheDouble;

        return $this;
    }


    // --------------------- Comparer le budget des 2 premiers Objets DVD Crées
    // Dans appDvd.php
    // echo $filmOne->compareBudget($filmTwo);




    // --------------------- Retourne le Nb et la Moyenne du budget des 5 objets
    public function getNbAndMoyFiveBudget($tabDvd){

      $nbFilm = 0;

      foreach ($tabDvd as $nomFilm => $valeurFilm) {
        //var_dump($valeurFilm);
        $calc += $valeurFilm->budget;
        $nbFilm++;
      }
      $moyenne = $calc / $nbFilm;
      var_dump($calc);
      var_dump($nbFilm);

      return "<div class='alert alert-info'>".
              $moyenne.
              " est la moyenne de mes ".$nbFilm." films</div>";

    }






}



?>
