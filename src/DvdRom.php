<?php
namespace src;

/**
 *
 * @extends Dvd
 */
class DvdRom extends Dvd
{
  protected $capacite = "4.7Go";
  protected $couleur;
  protected $enregistrable;





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
     * Get the value of Couleur
     *
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
    * Get the value of Enregistrable
    *
    * @return mixed
    */
    public function getEnregistrable()
    {
      return $this->enregistrable;
    }

    // ---------------------------------------------------------- __Construct
    /**
     * [__construct description]
     * @param [type] $enregistrable [description]
     */
    public function __construct(Connexion $connexion, $couleur = "", $enregistrable = true){

      parent:: __construct($connexion);
      $this->couleur = $couleur;
      $this->enregistrable = $enregistrable;
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
     * Set the value of Couleur
     *
     * @param mixed couleur
     *
     * @return self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }


    /**
     * Set the value of Enregistrable
     *
     * @param mixed enregistrable
     *
     * @return self
     */
    public function setEnregistrable($enregistrable)
    {
        $this->enregistrable = $enregistrable;

        return $this;
    }

}





?>
