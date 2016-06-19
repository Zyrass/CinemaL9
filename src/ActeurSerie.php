<?php
namespace src;

class ActeurSerie extends Acteur{

  protected $nomdeserie;
  protected $surnom;






    /**
     * Get the value of Nomdeserie
     *
     * @return mixed
     */
    public function getNomdeserie()
    {
        return $this->nomdeserie;
    }

    /**
     * Get the value of Surnom
     *
     * @return mixed
     */
    public function getSurnom()
    {
        return $this->surnom;
    }


    /**
     * Set the value of Nomdeserie
     *
     * @param mixed nomdeserie
     *
     * @return self
     */
    public function setNomdeserie($nomdeserie)
    {
        $this->nomdeserie = $nomdeserie;

        return $this;
    }

    /**
     * Set the value of Surnom
     *
     * @param mixed surnom
     *
     * @return self
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

}





?>
