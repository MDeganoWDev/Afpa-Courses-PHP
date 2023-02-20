<?php

class ModelUser
{
    public function __construct()
    {
    }

    public function seConnecter($data)
    {
        $sql = "SELECT * FROM `users` WHERE `users`.`login`='{$data['login']}' AND `users`.`pass`='{$data['pass']}'";

        $result = DAO_MySQLi::requete($sql);

        return $result;
    }
}
