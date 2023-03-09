<?php
class Config
{
    static $modules = array(
        "Modules/Film",
        "dao"
    );
    static $packages = array(
        "ctrl", "vue", "model", ""
    );

    static $bdd = array(
        'host' => "localhost",
        'user' => "root",
        'pass' => "",
        'database' => "film"
    );
}
