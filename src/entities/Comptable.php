<?php
require_once 'Personne.php';
class Comptable extends Personne
{
 private $certification;

 public function __construct($nom,$prenom,$certification)
 {
     parent::__construct($nom,$prenom);
     $this->certification=$certification;
 }

    /**
     * @return mixed
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * @param mixed $certification
     */
    public function setCertification($certification)
    {
        $this->certification = $certification;
    }
}