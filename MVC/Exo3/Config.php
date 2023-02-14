<?php
class Config
{
    static $modules = array(
        "modules/formulaire",
        "modules/meteo",
        "dao"
    );
    static $packages = array(
        "ctrl", "vue", "model", ""
    );

    static $apiMeteo = array(
        'url' => "https://www.prevision-meteo.ch/services/json/"
    );
}
