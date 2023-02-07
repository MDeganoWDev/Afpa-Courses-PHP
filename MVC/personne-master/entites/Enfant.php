<?php
include_once "Mineur.php";
class Enfant extends Mineur{
private $jeu;

public function __construct($nom = "", $prenom = "", $age = "", $classe="", $jeu="")
{
    parent::__construct($nom, $prenom, $age, $classe);
    $this->jeu = $jeu;
}

public function afficher(){
    parent::afficher();
    echo "je joue à : {$this->jeu}<br/>";
}
/**
 * Get the value of jeu
 */ 
public function getJeu() {
return $this->jeu;
}

/**
 * Set the value of jeu
 *
 * @return  self
 */ 
public function setJeu($jeu)
{
$this->jeu = $jeu;

return $this;
}
}