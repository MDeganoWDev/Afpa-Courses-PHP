<?php
class VueForm{
    public function __construct()
    {
        
    }

    public function afficherFormulaire(){
        $partial = "formulaire.html";
        include "templates/template.html";
    }

    public function afficherOk($data){        
        $partial = "ok.html";
        include "templates/template.html";
    }

    public function afficherNotOk(){

    }
}