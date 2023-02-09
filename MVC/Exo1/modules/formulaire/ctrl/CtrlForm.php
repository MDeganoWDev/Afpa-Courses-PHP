<?php
class CtrlForm{

    private $vue;

    public function __construct()
    {
        $this->vue = new VueForm();
    }

    public function formulaire(){
        $this->vue->afficherFormulaire();
    } 
    
    public function enregistrerFormulaire(){
        
        $this->vue->afficherOk($_POST);
    }

}