<?php
include_once("Majeur.php");
include_once("Mineur.php");
include_once("Ado.php");

$majeur = new Majeur("Martin", "Paul", 25, true);

$majeur->afficher();

$majeur->setPrenom("Pierre");

$majeur->afficher();

$ado = new Ado("Carbini", "Lorenzo", 17,"terminal", false);

$ado->afficher();

$ado->setClasse("seconde");

$ado->afficher();

$enfant = new Enfant("Tillier", "Edouard", 10,"CM2", true);

$enfant->afficher();

$enfant->setJoue(false);

$enfant->afficher();
