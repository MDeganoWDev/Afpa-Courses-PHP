<?php
include_once "Personne.php";
class Majeur extends Personne
{
    private $vote;

    public function __construct($nom = "", $prenom = "", $age = "", $vote = true)
    {
        parent::__construct($nom,$prenom,$age);
        $this->vote = $vote;
    }

    function afficher(){
        parent::afficher();
        echo $this->vote ? "Je vote<br/>" : "Je ne vote pas<br/>";
    }
}
