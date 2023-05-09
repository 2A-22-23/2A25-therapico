<?php
class rique
{
    private ?int $ID_rdv= null;
    private  ?DateTime $rdv_annulee = null;
    private  ?DateTime $rdv_passee= null;
    private  ?DateTime $rdv_future= null;
    private  ?DateTime $rdv_courant= null;
    private ?int $stats = null;
    

    public function __construct($ID_rdv =null , $rdv_annulee, $rdv_passee, $rdv_future, $rdv_courant,$stats)
    {
        $this->ID_rdv = $ID_rdv;
        $this->rdv_annulee = $rdv_annulee;
        $this->rdv_passee= $rdv_passee;
        $this->rdv_future = $rdv_future;
        $this->rdv_courant = $rdv_courant;
        $this->stats = $stats;
    }
    public function getID_rdv()
    {
        return $this->ID_rdv;
    }

    

    
   
    public function getrdv_annulee()
    {
        return $this->rdv_annulee;
    }

   
    public function setrdv_annulee($rdv_annulee)
    {
        $this->rdv_annulee = $rdv_annulee;

        return $this;
    }
    /**
     * Get the value of rdv_passee
     */
    public function getrdv_passee()
    {
        return $this->rdv_passee;
    }

    /**
     * Set the value of rdv_passee 
     *
     * @return  self
     */
    public function setrdv_passee($rdv_passee)
    {
        $this->rdv_passee = $rdv_passee;

        return $this;
    }

   
    /**
     * Get the value of rdv_future
     */
    public function getrdv_future()
    {
        return $this->rdv_future;
    }

    /**
     * Set the value of rdv_future
     *
     * @return  self
     */
    public function setrdv_future($rdv_future)
    {
        $this->rdv_future = $rdv_future;

        return $this;
    }

    /**
     * Get the value of rdv_courant
     */
    public function getrdv_courant()
    {
        return $this->rdv_courant;
    }

    /**
     * Set the value of rdv_courant
     *
     * @return  self
     */
    public function setrdv_courant($rdv_courant)
    {
        $this->rdv_courant = $rdv_courant;

        return $this;
    }
 /** 
  * GET the value of stats
  */
    public function getstats()
    {
        return $this->stats;
    }

    public function setstats($stats)
    {
        $this->stats = $stats;

        return $this;
    }
}