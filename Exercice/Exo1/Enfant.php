<?php
include_once "Mineur.php";
class Enfant extends Mineur {
    private $joue;

    public function __construct($nom = "", $prenom = "", $age = "", $classe = "", $joue=false)
    {
        parent::__construct($nom,$prenom,$age,$classe);
        $this->joue = $joue;
    }
    function afficher(){
        parent::afficher();
        echo $this->joue ? "joue<br/>" : "ne joue pas<br/>";
    }

    public function getJoue()
    {
        return $this->joue;
    }

    public function setJoue($joue)
    {
        $this->joue = $joue;

        return $this;
    }
}