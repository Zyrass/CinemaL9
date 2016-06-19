<?php
namespace src;

class ActeurFilm extends Acteur {

  protected $cv;
  protected $oscar = [];


    /**
     * Get the value of Cv
     *
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Get the value of Oscar
     *
     * @return mixed
     */
    public function getOscar()
    {
        return $this->oscar;
    }


    /**
     * Set the value of Cv
     *
     * @param mixed cv
     *
     * @return self
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Set the value of Oscar
     *
     * @param mixed oscar
     *
     * @return self
     */
    public function setOscar($oscar)
    {
        $this->oscar = $oscar;

        return $this;
    }

}

 ?>
