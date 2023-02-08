<?php
include "Config.php";


spl_autoload_register(function ($class) {
    foreach(Config::$modules as $module){
        foreach(Config::$packages as $package){
            if(file_exists("{$module}/{$package}/{$class}.php")){
                include_once "{$module}/{$package}/{$class}.php";
                return true;
            }
        }
    }
});


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
//include_once "ctrl/Ctrl.php";

/* var_dump($_GET);
die(); */

/* $ctrl = new Ctrl();
$ctrl->formulaire(); */

$c= isset($_GET['c']) ? $_GET['c'] : "CtrlForm";
$ctrl = new $c;

$m = isset($_GET['m']) ? $_GET['m'] : "formulaire";
$ctrl->$m();



