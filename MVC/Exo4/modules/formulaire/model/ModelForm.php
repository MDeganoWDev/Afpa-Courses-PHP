<?php

class ModelForm
{


    public function __construct()
    {
    }

    public function insert($data)
    {
        $sql = "INSERT INTO `contact3` (`nom`, `prenom`, `tel`, `email`, `message`) VALUES ('{$data['nom']}', '{$data['prenom']}', '{$data['tel']}', '{$data['email']}', '{$data['message']}');";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
}
