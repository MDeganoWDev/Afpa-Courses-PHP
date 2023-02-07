<?php
include_once "vue/Vue.php";
class Ctrl{

    public function __construct()
    {
        
    }
    public function formulaire(){
        $vue = new Vue();
        $vue->afficherFormulaire();
    } 
    


    public function enregistrerFormulaire(){
        $vue = new Vue();
        $vue->afficherOk($_POST);
    }

}