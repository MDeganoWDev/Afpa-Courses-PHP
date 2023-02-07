<?php
include_once("Majeur.php");
include_once("Mineur.php");
include_once("Ado.php");

$majeur = new Majeur("Martin", "Paul", 25, true);

$majeur->afficher();

$majeur->setPrenom("Pierre");

$majeur->afficher();
