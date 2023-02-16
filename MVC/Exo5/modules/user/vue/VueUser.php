<?php
class VueUser{

    public function __construct()
    {
        
    }

    function afficherLogin(){
        $partial = "modules/user/templates/login.html";
        include "templates/template.html";
    }

    function seConnecter()
    {

    }

    function connexionOk(){
        $partial = "modules/user/templates/connexionOk.html";
        include "templates/template.html";
    }
}
