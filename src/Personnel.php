<?php
namespace src;

/**
 * Personnel du Cinéma
 * Super classe
 */
class Personnel {

  protected $nom;
  protected $prenom;
  protected $dob;
  protected $ville;
  protected $biography;
  protected $salaire;



  const PAYS = "France";
  const LANGUE = "FR";

  /**
   * Get the value of Nom
   *
   * @return mixed
   */
  public function getNom()
  {
      return $this->nom;
  }

  /**
   * Get the value of Prenom
   *
   * @return mixed
   */
  public function getPrenom()
  {
      return $this->prenom;
  }

  /**
   * Get the value of Dob
   *
   * @return mixed
   */
  public function getDob()
  {
      return $this->dob;
  }

  /**
   * Get the value of Ville
   *
   * @return mixed
   */
  public function getVille()
  {
      return $this->ville;
  }

  /**
   * Get the value of Biography
   *
   * @return mixed
   */
  public function getBiography()
  {
      return $this->biography;
  }

  /**
   * Get the value of Salaire
   *
   * @return mixed
   */
  public function getSalaire()
  {
      return $this->salaire;
  }



  // -----------------------------------------------------------





  /**
   * Set the value of Nom
   *
   * @param mixed nom
   *
   * @return self
   */
  public function setNom($nom)
  {
      $this->nom = $nom;

      return $this;
  }

  /**
   * Set the value of Prenom
   *
   * @param mixed prenom
   *
   * @return self
   */
  public function setPrenom($prenom)
  {
      $this->prenom = $prenom;

      return $this;
  }

  /**
   * Set the value of Dob
   *
   * @param mixed dob
   *
   * @return self
   */
  public function setDob($dob)
  {
      $this->dob = $dob;

      return $this;
  }

  /**
   * Set the value of Ville
   *
   * @param mixed ville
   *
   * @return self
   */
  public function setVille($ville)
  {
      $this->ville = $ville;

      return $this;
  }

  /**
   * Set the value of Biography
   *
   * @param mixed biography
   *
   * @return self
   */
  public function setBiography($biography)
  {
      $this->biography = $biography;

      return $this;
  }





    /**
     * Set the value of Salaire
     *
     * @param mixed salaire
     *
     * @return self
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }


    /**
     * [commenterMovie description]
     * @param  Movie  $movie [description]
     * @return [type]        [description]
     */
    public function commenterMovie(Movie $movie){

      return "<p>
        {$this->nom}
        {$this->prenom}
        a commenté un film {$movie->getTitre()}
      </p>";

    }

}


?>
