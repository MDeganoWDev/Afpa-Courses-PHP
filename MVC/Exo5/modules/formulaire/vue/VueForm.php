<?php
class VueForm{
    public function __construct()
    {
        
    }

    public function afficherFormulaire(){
        $partial = "modules/formulaire/templates/formulaire.html";
        include "templates/template.html";
    }

    public function afficherOk($data){
        $partial = "ok.html";
        include "templates/template.html";
    }
    
    public function afficherNotOk(){
        
    }
    
    public function afficherContacts($contacts, $status){
        $message = ($status == 1) ? "Liste des contacts" : (($status==2) ? "Enregistrement supprimé" : "Erreur de suppression");
        $partial = "modules/formulaire/templates/contacts.html";
        include "templates/template.html";
    }

    public function afficherTable($data){
        $partial = "modules/formulaire/templates/table.html";
        include "templates/template.html";
    }

    public function afficherDroitsInsuffisants(){
        $partial = "templates/droitsInsuffisants.html";
        include "templates/template.html";
    }
    
    public function afficherEdit($data){
        $partial = "modules/formulaire/templates/tableEdit.html";
        include "templates/template.html";
    }
}