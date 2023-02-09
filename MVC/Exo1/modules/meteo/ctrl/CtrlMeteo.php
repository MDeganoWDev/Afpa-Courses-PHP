<?php
class CtrlMeteo{

    private $vue;

    public function __construct()
    {
        $this->vue = new VueMeteo();
    }

    public function meteo(){
        $this->vue->afficherMeteo();
    } 
   
}