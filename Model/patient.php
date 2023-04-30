<?php
class patient
{
    private $cin_p;
    private $nom_prenom_p ;
    private $date_n_p;
    private  $tel_p;
    private $email_p;
    private $sexe_p;
    private  $pass_p;
    

    public function __construct($cin_p, $nom_prenom_p, $date_n_p, $tel_p, $email_p,$sexe_p,$pass_p)
    {
        $this->cin_p = $cin_p;
        $this->nom_prenom_p = $nom_prenom_p;
        $this->date_n_p = $date_n_p;
        $this->tel_p = $tel_p;
        $this->email_p = $email_p;
        $this->sexe_p = $sexe_p;
        $this->pass_p = $pass_p;
    }

    /**
     * Get the value of cin p
     */
    public function get_cin_p()
    {
        return $this->cin_p;
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
     * Get the value of nom prenom
     */
    public function getnom_prenom_p()
    {
        return $this->nom_prenom_p;
    }

    /**
     * Set the value of nom prenom
     *
     * @return  self
     */
    public function setnom_prenom_p($nom_prenom_p)
    {
        $this->nom_prenom_p = $nom_prenom_p;

        return $this;
    }

   
    /**
     * Get the value of email p
     */
    public function getemail_p()
    {
        return $this->email_p;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setemail_p($email_p)
    {
        $this->email_p = $email_p;

        return $this;
    }

    /**
     * Get the value of date n p
     */
    public function getdate_n_p()
    {
        return $this->date_n_p;
    }

    /**
     * Set the value of date n p
     *
     * @return  self
     */
    public function setdate_n_p($date_n_p)
    {
        $this->date_n_p = $date_n_p;

        return $this;
    }

    public function gettel_p()
    {
        return $this->tel_p;
    }

    public function settel_p($tel_p)
    {
        $this->tel_p = $tel_p;

        return $this;
    }

    public function getsexe_p()
    {
        return $this->sexe_p;
    }

    public function setsexe_p($sexe_p)
    {
        $this->sexe_p= $sexe_p;

        return $this;
    }

    public function getpass_p()
    {
        return $this->pass_p;
    }

    public function setpass_p($pass_p)
    {
        $this->pass_p = $pass_p;

        return $this;
    }

}
