 <?php
class review
{
    private ?int $id_review=null;
    private ?int $cin_p=null;
    private ?string $fullname=null;
    private ?string$email=null;
    private ?string$review=null;
   


    public function __construct($id_review=null,$cin_p,$fullname,$email,$review )
    {
        $this->id_review = $id_review;
        $this->cin_p = $cin_p;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->review = $review;
        
    }



    /**
     * Get the value of id_review
     */
    public function getid_review()
    {
        return $this->id_review;
    }




 

/**
     * Get the value of cin_p
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
     * Get the value of fullname
     */
    public function getfullname()
    {
        return $this->fullname;
    }


    /**
     * Set the value of fullname
     *
     * @return  self
     */
    public function setfullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }


    /**
     * Get the value of email
     */
    public function getemail()
    {
        return $this->email;
    }



/**
     * Set the value of email
     *
     * @return  self
     */
    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }


  /**
     * Get the value of review
     */
    public function getreview()
    {
        return $this->review;
    }


    /**
     * Set the value of review
     *
     * @return  self
     */
    public function setreview($review)
    {
        $this->review = $review;

        return $this;
    }

  

   

   
    
 

   
}
