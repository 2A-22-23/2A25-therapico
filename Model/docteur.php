<?php

class docteur
{
    private ?int $cin_d= null;
    private ?string $firstName_d = null;
    private ?string $lastName_d = null;
    private ?string $email_d = null;
    private ?string $passwd_d = null;
    private ?string $confirmPassword_d = null;

    public function __construct($cin_d, $fn, $ln, $em, $ps, $cps)
    {
        $this->cin_d = $cin_d;
        $this->firstName_d = $fn;
        $this->lastName_d = $ln;
        $this->email_d = $em;
        $this->passwd_d = $ps;
        $this->confirmPassword_d = $cps;
    }

    /**
     * Get the value of cin_d
     */
    public function getcin_d()
    {
        return $this->cin_d;
    }
/**
     * Set the value of cin_d
     *
     * @return  self
     */
    public function setcin_d($cin_d)
    {
        $this->cin_d = $cin_d;

        return $this;
    }
    /**
     * Get the value of firstName_d
     */
    public function getfirstName_d()
    {
        return $this->firstName_d;
    }

    /**
     * Set the value of firstName_d
     *
     * @return  self
     */
    public function setfirstName_d($firstName_d)
    {
        $this->firstName_d = $firstName_d;

        return $this;
    }

    /**
     * Get the value of lastName_d
     */
    public function getlastName_d()
    {
        return $this->lastName_d;
    }

    /**
     * Set the value of lastName_d
     *
     * @return  self
     */
    public function setlastName_d($lastName_d)
    {
        $this->lastName_d = $lastName_d;

        return $this;
    }

    /**
     * Get the value of email_d
     */
    public function getemail_d()
    {
        return $this->email_d;
    }

    /**
     * Set the value of email_d
     *
     * @return  self
     */
    public function setemail_d($email_d)
    {
        $this->email_d = $email_d;

        return $this;
    }

    /**
     * Get the value of passwd_d
     */
    public function getpasswd_d()
    {
        return $this->passwd_d;
    }

    /**
     * Set the value of passwd_d
     *
     * @return  self
     */
    public function setpasswd_d($passwd_d)
    {
        $this->passwd_d = $passwd_d;

        return $this;
    }

    /**
     * Get the value of confirmPassword_d
     */
    public function getconfirmPassword_d()
    {
        return $this->confirmPassword_d;
    }

    /**
     * Set the value of confirmPassword_d
     *
     * @return  self
     */
    public function setconfirmPassword_d($confirmPassword_d)
    {
        $this->confirmPassword_d = $confirmPassword_d;

        return $this;
    }
}