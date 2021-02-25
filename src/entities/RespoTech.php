<?php

require_once 'Personne.php';
class RespoTech extends Personne
{
  private $domaine;

  public function  __construct($nom,$prenom,$domaine)
  {
        parent::__construct($nom,$prenom);
        $this->domaine = $domaine;
  }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }
}