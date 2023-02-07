<?php
/* include_once("Majeur.php");
include_once "Enfant.php";
include_once "Ado.php";

$majeur = new Majeur("Martin", "Paul", 25, true);
$majeur->afficher();
$majeur->setPrenom("Pierre");
$majeur->afficher();

$enfant = new Enfant("Martin", "Juliette", 7, "CE1", "Barbie");
$enfant->afficher();

$ado = new Ado("Martin", "Jason", 17, "Première", false);
$ado->afficher(); */

// http:localhost:81/?c=Ctrl&m=formulaire
include_once "ctrl/Ctrl.php";

/* var_dump($_GET);
die(); */

/* $ctrl = new Ctrl();
$ctrl->formulaire(); */

$ctrl = new $_GET['c']();
$m = $_GET['m'];
$ctrl->$m();

