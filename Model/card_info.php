<?php
class card_info {
    
   
    private ?int    $cin_pt = null;
    private ?string $cname = null;
    private ?string $ccnum = null;
    private ?string $expmonth = null;
    private ?string $expyear = null;
    private ?string $cvv = null;
    public function __construct($cin_pt= null, $cname, $ccnum, $expmonth, $expyear, $cvv) {
        $this->cin_pt = $cin_pt;
        $this->cname = $cname;
        $this->ccnum = $ccnum;
        $this->expmonth = $expmonth;
        $this->expyear = $expyear;
        $this->cvv = $cvv;
    }
    
    public function getcin_pt() {
        return $this->cin_pt;
    }
    /*
    public function setcin_pt($cin_pt) {
        $this->cin_pt = $cin_pt;
    }*/
    public function getcname() {
        return $this->cname;
    }
    
    public function setcname($cname) {
        $this->cname = $cname;
    }
    
    public function getccnum() {
        return $this->ccnum;
    }
    
    public function setccnum($ccnum) {
        $this->ccnum = $ccnum;
    }
    
    public function getexpmonth() {
        return $this->expmonth;
    }
    
    public function setexpmonth($expmonth) {
        $this->expmonth = $expmonth;
    }
    
    public function getexpyear() {
        return $this->expyear;
    }
    
    public function setexpyear($expyear) {
        $this->expyear = $expyear;
    }
    
    public function getcvv() {
        return $this->cvv;
    }
    
    public function setcvv($cvv) {
        $this->cvv = $cvv;
    }
}
