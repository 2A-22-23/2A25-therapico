<?php
class maladie
{
    private ?int $id_maladie= null;
    private ?string $id_local = null;
    private ?string $type_maladie = null;
    private ?string $nbre_locaux_possibles = null;
    

    public function __construct($id =null , $n, $p, $a)
    {
        $this->id_maladie = $id;
        $this->id_local = $n;
        $this->type_maladie = $p;
        $this->nbre_locaux_possibles = $a;
       
    }

    
    public function getId_maladie()
    {
        return $this->id_maladie;
    }

  
    public function getid_local()
    {
        return $this->id_local;
    }

   

    public function gettype_maladie()
    {
        return $this->type_maladie;
    }

    public function getnbre_locaux_possibles()
    {
        return $this->nbre_locaux_possibles;
    }

    public function setId_maladie($id_maladie)
    {
        $this->id_maladie = $id_maladie;

        return $this;
    }

   
    public function setid_local($id_local)
    {
        $this->id_local = $id_local;

        return $this;
    }


    public function settype_maladie($type_maladie)
    {
        $this->type_maladie = $type_maladie;

        return $this;
    }

    public function setnbre_locaux_possibles($nbre_locaux_possibles)
    {
        $this->nbre_locaux_possibles = $nbre_locaux_possibles;

        return $this;
    }
   
}
