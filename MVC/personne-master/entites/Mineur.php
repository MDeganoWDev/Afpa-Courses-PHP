<?php
include_once "Personne.php";
class Mineur extends Personne{
    private $classe;

    public function __construct($nom = "", $prenom = "", $age = "", $classe="")
    {
        parent::__construct($nom,$prenom,$age);
        $this->classe = $classe;
    }

    public function afficher(){
        parent::afficher();
        echo "je suis en classe de : {$this->classe}<br/>";
    }
    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }
}