<?php
class VueFilm
{
    public function __construct()
    {

    }
    //METHODE POUR AFFICHER TOUT LES FILM DANS LE TEMPLATE film.html
    public function afficherAll($films)
    {
        $partial = "Modules/Film/templates/selectFilm.html";
        include "templates/default.html";
    }
    //METHODE POUR AFFICHER LES FILMS DU GENRE SELECTIONNE DANS LE TEMPLATE film.html
    public function afficherThisGenre($genres, $films, $thisGenre)
    {
        $partial = "Modules/Film/templates/selectFilm.html";
        include "templates/default.html";
    }
    //METHODE POUR AFFICHER LES ERREURS DE SERVEUR
    public function afficherError($text)
    {
        $partial = "Modules/Film/templates/error.html";
        include "templates/default.html";
    }
}