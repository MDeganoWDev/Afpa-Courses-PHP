<?php
class VueMeteo{

    public function __construct()
    {
        
    }

    function afficherMeteo(){
        $partial = "modules/meteo/templates/meteo.html";
        $css = "modules/meteo/templates/css.html";
        include "templates/template.html";
    }

    function afficherPrevisionnel($data){
        $partial = "modules/meteo/templates/prev.html";
        $css = "modules/meteo/templates/css.html";
        include "templates/template.html";
    }
}