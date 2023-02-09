<?php
class VueMeteo{
    public function __construct()
    {
        
    }

    public function afficherMeteo(){
        $partial = "meteo.html";
        include "templates/template.html";
    }

    public function afficherOk($data){
        $partial = "ok.html";
        include "templates/template.html";
    }

    public function afficherNotOk(){

    }
}