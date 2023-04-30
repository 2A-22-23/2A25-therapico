<?php
class traitement
{
    private ?int    $id_T= null;
    private ?int    $cin_p = null;
    private ?string $type_T = null;
    private ?string $duree_T = null;
   
    

    public function __construct($id_T= null, $cin_p, $type_T, $duree_T)
    {
        $this->id_T= $id_T;
        $this->cin_p = $cin_p;
        $this->type_T = $type_T;
        $this->duree_T = $duree_T;
        
    }

     /**
     * Get the value of id_T
     */
    public function getid_T()
    {
        return $this->id_T;
    }
/**
     * Set the value of id_T
     *
     * @return  self
     */
    public function setid_T($id_T)
    {
        $this->id_T = $id_T;

        return $this;
    }


    /**
     * Get the value of cin p
     */
    public function getcin_p()
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
     * Get the value of type_T
     */
    public function gettype_T()
    {
        return $this->type_T;
    }

    /**
     * Set the value of type_T
     *
     * @return  self
     */
    public function settype_T($type_T)
    {
        $this->type_T = $type_T;

        return $this;
    }

   
   /**
     * Get the value of duree_T
     */
    public function getduree_T()
    {
        return $this->duree_T;
    }

    /**
     * Set the value of duree_T
     *
     * @return  self
     */
    public function setduree_T($duree_T)
    {
        $this->duree_T = $duree_T;

        return $this;
    }
}