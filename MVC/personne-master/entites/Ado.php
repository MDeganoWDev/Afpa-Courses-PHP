<?php
include_once "Mineur.php";
class Ado Extends Mineur{
    private $assr;

    public function __construct($nom = "", $prenom = "", $age = "", $classe="", $assr = true)
    {
        parent::__construct($nom, $prenom, $age, $classe);
        $this->assr = $assr;
    }

    public function afficher(){
        parent::afficher();
        echo ($this->assr)?"j'ai l'ASSR <br/>":"je n'ai pas l'ASSR<br/>";
    }

    /**
     * Get the value of assr
     */ 
    public function getAssr()
    {
        return $this->assr;
    }

    /**
     * Set the value of assr
     *
     * @return  self
     */ 
    public function setAssr($assr)
    {
        $this->assr = $assr;

        return $this;
    }
}