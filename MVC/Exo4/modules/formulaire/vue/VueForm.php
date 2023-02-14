<?php
class VueForm{
    public function __construct()
    {
        
    }

    public function afficherFormulaire(){
        $partial = "modules/formulaire/templates/formulaire.html";
        include "templates/template.html";
    }

    public function afficherResultat($data){
        $partial = "modules/formulaire/templates/resultatFormulaire.html";
        include "templates/template.html";
    }

    public function afficherError(){
        $partial = "modules/formulaire/templates/errorFormulaire.html";
        include "templates/template.html";
    }

    public function afficherTable($data){
        $partial = "modules/formulaire/templates/table.html";
        include "templates/template.html";
    }

     public function afficherEdit($data){
        $partial = "modules/formulaire/templates/tableEdit.html";
        include "templates/template.html";
    }
}
