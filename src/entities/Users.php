<?php


class Users
{
    private $id;
    private $email;
    private $password;
    private $etat;
    private $personne;

    public function __construct($id,$email,$password,$etat,$personne)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->etat = $etat;
        $this->personne = $personne;
    }

    public function getId()
    {
        return $this->id;;
    }
    
    public function setId($id)
    {
       $this->id = $id;
    }

    public function getEmail()
    {
        return $this->email;;
    }
    
    public function setEmail($email)
    {
       $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($password)
    {
      $this->password =$password;
    }

    public function getEtat()
    {
        return $this->etat;
    }
    
    public function setEtat($etat)
    {
       $this->etat = $etat;
    }
    
    public function getPersonne()
    {
        return $this->personne;;
    }
    
    public function setPersonne($personne)
    {
       $this->personne = $personne;
    }
}