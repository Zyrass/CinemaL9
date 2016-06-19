<?php
namespace src;

class BlueRay extends Movie
{

  protected $typeMedia = "Disque optique par défaut";
  protected $codage = ['MPEG-4', 'H.264', 'VC-1'];
  protected $mecanisme;
  protected $utilisation;



    /**
     * Get the value of Type Media
     *
     * @return mixed
     */
    public function getTypeMedia()
    {
        return $this->typeMedia;
    }

    /**
     * Set the value of Type Media
     *
     * @param mixed typeMedia
     *
     * @return self
     */
    public function setTypeMedia($typeMedia)
    {
        $this->typeMedia = $typeMedia;

        return $this;
    }

    /**
     * Get the value of Codage
     *
     * @return mixed
     */
    public function getCodage()
    {
        return $this->codage;
    }

    /**
     * Set the value of Codage
     *
     * @param mixed codage
     *
     * @return self
     */
    public function setCodage($codage)
    {
        $this->codage = $codage;

        return $this;
    }




    /**
     * Get the value of Mecanisme
     *
     * @return mixed
     */
    public function getMecanisme()
    {
        return $this->mecanisme;
    }

    /**
     * Set the value of Mecanisme
     *
     * @param mixed mecanisme
     *
     * @return self
     */
    public function setMecanisme($mecanisme)
    {
        $this->mecanisme = $mecanisme;

        return $this;
    }

    /**
     * Get the value of Utilisation
     *
     * @return miMoviexed
     */
    public function getUtilisation()
    {
        return $this->utilisation;
    }

    /**
     * Set the value of Utilisation
     *
     * @param mixed utilisation
     *
     * @return self
     */
    public function setUtilisation($utilisation)
    {
        $this->utilisation = $utilisation;

        return $this;
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
      }
    }


}
 ?>
