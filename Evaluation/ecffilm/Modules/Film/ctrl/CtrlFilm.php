<?php
class CtrlFilm
{

    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueFilm();
        $this->model = new ModelFilm();
    }
    //METHODE POUR SELECTIONNER TOUT LES FILM, METHODE PAR DEFAUT LORS DU LANCEMENT DU SITE
    public function allFilm()
    {
        @$films = $this->model->selectAllFilm();
        //SECURITEE POUR VERIFIER QUE LE SERVEUR A BIEN RENVOYER UNE DATA SINON IL RENVOI UN BOOLEEN FALSE
        if (!$films || empty($films)) {
            $this->vue->afficherError("ERREUR SERVEUR, VEUILLEZ CONTACTER LES PERSONNES CONCERNEES");
        } else {
            $this->vue->afficherAll($films);
        }
    }

    //METHODE POUR SELECTIONNER LES FILMS SELON LE GENRE DEFINI PAR L'UTILISATEUR
    public function thisGenre()
    {
        //SECURITEE POUR VERIFIER QUE NOUS AVONS RECU LE POST DU FORMULAIRE 
        if (isset($_POST)) {
            @$genre = $_POST['genre'];
            @$films = $this->model->selectGenre($genre);
            //SECURITEE POUR VERIFIER QUE LE SERVEUR A BIEN RENVOYER UNE DATA SINON IL RENVOI UN BOOLEEN FALSE
            if (!$films || empty($films)) {
                $this->vue->afficherError("ERREUR SERVEUR, VEUILLEZ CONTACTER LES PERSONNES CONCERNEES");
            } else {
                $this->vue->afficherThisGenre($films, $genre);
            }
        } else {
            $this->vue->afficherError("ERREUR DU TRAITEMENT DU FILTRE, VEUILLEZ CONTACTER LES PERSONNES CONCERNEES");
        }
    }
}