<?php
class ModelFilm
{
    public function __construct()
    {
    }
    //METHODE POUR SELECTIONNER TOUT LES FILMS DANS LA BDD VIA LA DAO
    public function selectAllFilm()
    {
        $sql = "SELECT * FROM `film`";
        $result = DAO_Film::requete($sql);
        return $result;
    }

    //METHODE POUR SELECTIONNER LES FILMS DU GENRE SELECTIONNE DANS LA BDD VIA LA DAO
    public function selectGenre($genre)
    {
        $sql = "SELECT *
        FROM `film`
        JOIN `appartenir` ON `appartenir`.`id_film` = `film`.`id_film`
        JOIN `genre` ON `genre`.`id_genre` = `appartenir`.`id_genre`
        WHERE `genre`.`genre` = '{$genre}'
        ";
        $result = DAO_Film::requete($sql);
        return $result;
    }
}