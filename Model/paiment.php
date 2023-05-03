<?php
class paiment
{
    private ?string $cin_p = null;
    private ?string $nom_prenom_p = null;
    private ?string $email_p = null;
    private ?string $adr = null;
    private ?string $city = null;
  
    public function __construct($cin_p , $nom_prenom_p, $email_p, $adr, $city)
{  
    $this->cin_p  = $cin_p;
    $this->nom_prenom_p = $nom_prenom_p;
    $this->email_p = $email_p;
    $this->adr = $adr;
    $this->city = $city;

}


    /**
     * Get the value of cin_p 
     */
    public function getcin_p ()
    {
        return $this->cin_p ;
    }
 /**
     * Set the value of cin_p
     *
     * @return  self
     */
    public function setcin_p($cin_p)
    {
        $this->cin_p = $cin_p;

        return $this;
    }
    /**
     * Get the value of nom_prenom_p
     */
    public function getnom_prenom_p()
    {
        return $this->nom_prenom_p;
    }

    /**
     * Set the value of nom_prenom_p
     *
     * @return  self
     */
    public function setnom_prenom_p($nom_prenom_p)
    {
        $this->nom_prenom_p = $nom_prenom_p;

        return $this;
    }

    /**
     * Get the value of email_p
     */
    public function getemail_p()
    {
        return $this->email_p;
    }

    /**
     * Set the value of email_p
     *
     * @return  self
     */
    public function setemail_p($email_p)
    {
        $this->email_p = $email_p;

        return $this;
    }

    /**
     * Get the value of adr
     */
    public function getadr()
    {
        return $this->adr;
    }

    /**
     * Set the value of adr
     *
     * @return  self
     */
    public function setadr($adr)
    {
        $this->adr = $adr;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getcity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setcity($city)
    {
        $this->city = $city;

        return $this;
    }
  
}
