<?php
class local
{
    private ?int $id_local= null;
    private ?string $adresse_local = null;
    private ?string $description_local = null;
    private ?string $capacite_local = null;
    

    public function __construct($id , $n, $p, $a, $d)
    {
        $this->id_local = $id;
        $this->adresse_local = $n;
        $this->description_local = $p;
        $this->capacite_local = $a;
       
    }

    /**
     * Get the value of idClient
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Get the value of adresse_local
     */
    public function getadresse_local()
    {
        return $this->adresse_local;
    }

    /**
     * Set the value of adresse_local
     *
     * @return  self
     */
    public function setadresse_local($adresse_local)
    {
        $this->adresse_local = $adresse_local;

        return $this;
    }

    /**
     * Get the value of description_local
     */
    public function getdescription_local()
    {
        return $this->description_local;
    }

    /**
     * Set the value of description_local
     *
     * @return  self
     */
    public function setdescription_local($description_local)
    {
        $this->description_local = $description_local;

        return $this;
    }

    /**
     * Get the value of capacite_local
     */
    public function getcapacite_local()
    {
        return $this->capacite_local;
    }

    /**
     * Set the value of capacite_local
     *
     * @return  self
     */
    public function setcapacite_local($capacite_local)
    {
        $this->capacite_local = $capacite_local;

        return $this;
    }

   
}
