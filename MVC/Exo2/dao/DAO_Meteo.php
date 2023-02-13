<?php
class DAO_Meteo implements DAO {

    public static function requete($ville){
        $data = file_get_contents("https://www.prevision-meteo.ch/services/json/".$ville);
        return $data;
    }
}