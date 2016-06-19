<?php
namespace src;

use \DateTime;

/**
 * Classe User extends Personnel
 */
class User
{
  protected $login;
  protected $password;
  protected $email;
  protected $gravatar;
  protected $sexe;


    /**
     * Get the value of Classe User extends Personnel
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of Date Auth
     *
     * @return mixed
     */
    public function getDateAuth()
    {
        return $this->dateAuth;
    }

    /**
     * Get the value of Gravatar
     *
     * @return mixed
     */
    public function getGravatar()
    {
        return $this->gravatar;
    }

    /**
     * Get the value of Sexe
     *
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }





    /**
     * Set the value of Classe User extends Personnel
     *
     * @param mixed login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Set the value of Password
     *
     * @param mixed password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the value of Email
     *
     * @param mixed email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of Date Auth
     *
     * @param mixed dateAuth
     *
     * @return self
     */
    public function setDateAuth($dateAuth)
    {
        $this->dateAuth = $dateAuth;

        return $this;
    }

    /**
     * Set the value of Gravatar
     *
     * @param mixed gravatar
     *
     * @return self
     */
    public function setGravatar($gravatar)
    {
        $this->gravatar = $gravatar;

        return $this;
    }

    /**
     * Set the value of Sexe
     *
     * @param mixed sexe
     *
     * @return self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * [getSha1Password Hash le password]
     * @return [type] [description]
     */
    public function getSha1Password(){

      return sha1($this->password);

    }




}

 ?>
