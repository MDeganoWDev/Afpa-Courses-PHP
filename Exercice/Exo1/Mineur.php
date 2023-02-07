<?php
include_once "Personne.php";
class Mineur extends Personne {
    private $classe;

    public function __construct($nom = "", $prenom = "", $age = "", $classe = "")
    {
        parent::__construct($nom,$prenom,$age);
        $this->classe = $classe;
    }

    function afficher(){
        parent::afficher();
        echo " est en {$this->classe}<br/>";
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }
}