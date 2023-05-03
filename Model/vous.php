<?php
class vous
{
    private ?int $ID_rdv= null;
    private  ?string $Nom = null;
    private  ?string $Prenom= null;
    private  ?string $Sexe= null;
    private  ?string $Profession= null;
    private ?DateTime $Date_RDV = null;
    private  ?string $Type_RDV= null;
    private ?int $telephone= null;
    private  ?string $email_r= null;
    private ?int $age= null;
    

    public function __construct($ID_rdv = null, $Nom, $Prenom, $Sexe, $Profession,$Date_RDV,$Type_RDV,$telephone,$email_r,$age)
    {
        $this->ID_rdv = $ID_rdv;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Sexe = $Sexe;
        $this->Profession = $Profession;
        $this->Date_RDV = $Date_RDV;
        $this->Type_RDV = $Type_RDV;
        $this->telephone = $telephone;
        $this->email_r = $email_r;
        $this->age = $age;
    }
    public function getID_rdv()
    {
        return $this->ID_rdv;
    }
/*
    
    public function setID_rdv($ID_rdv)
    {
        $this->ID_rdv = $ID_rdv;

        return $this;
    }*/
    /**
     * Get the value of nom 
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of nom 
     *
     * @return  self
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }
    /**
     * Get the value of prenom 
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of prenom 
     *
     * @return  self
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

   
    /**
     * Get the value of Sexe
     */
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * Set the value of Sexe
     *
     * @return  self
     */
    public function setSexe($Sexe)
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    /**
     * Get the value of Profession
     */
    public function getProfession()
    {
        return $this->Profession;
    }

    /**
     * Set the value of Professio
     *
     * @return  self
     */
    public function setProfession($Profession)
    {
        $this->Profession = $Profession;

        return $this;
    }
 /** 
  * GET the value of Date_rdv
  */
    public function getDate_RDV()
    {
        return $this->Date_RDV;
    }

    public function setDate_RDV($DATE_RDV)
    {
        $this->Date_RDV = $DATE_RDV;

        return $this;
    }

    public function getType_RDV()
    {
        return $this->Type_RDV;
    }

    public function setType_RDV($Type_RDV)
    {
        $this->Type_RDV= $Type_RDV;

        return $this;
    }

    public function gettelephone()
    {
        return $this->telephone;
    }

    public function settelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
    /**
     * get the value if email_r
     */
    public function getemail_r()
    {
        return $this->email_r;
    }

    /**
     * Set the value of email_r
     * @return  self
     */
    public function setemail_r($email_r)
    {
        $this->email_r = $email_r;

        return $this;
    }
    /**
     * Get the value of age 
     */
    public function getage()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setage($age)
    {
        $this->age = $age;

        return $this;
    }



}
