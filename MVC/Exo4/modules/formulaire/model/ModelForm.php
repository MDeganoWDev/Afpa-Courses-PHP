<?php

class ModelForm
{
    public function __construct()
    {
    }

    public function insert($data)
    {
        $sql = "INSERT INTO `contact` (`nom`, `prenom`, `tel`, `email`, `message`) VALUES ('{$data['nom']}', '{$data['prenom']}', '{$data['tel']}', '{$data['email']}', '{$data['message']}');";
        $result = DAO_MySQLi::requete($sql);
        return $result;
    }
    public function select(){
        $sql = "SELECT * FROM `contact`";
        $result = DAO_MySQLi::requete($sql);
        return $result;        
    }
    public function delete($id){
        $sql = " DELETE FROM contact WHERE `contact`.`id`=$id";
        $result = DAO_MySQLi::requete($sql);
        return $result;        
    }
    public function editSelect($id){
        $sql = "SELECT * FROM `contact` WHERE `contact`.`id`=$id";
        $result = DAO_MySQLi::requete($sql);
        return $result;        
    }
    public function Update($data){
        $sql = "UPDATE `contact` SET `nom` = '{$data['nom']}', `prenom` = '{$data['prenom']}', `tel` = '{$data['tel']}', `email` = '{$data['email']}' WHERE `contact`.`id`= '{$data['id']}'";
        $result = DAO_MySQLi::requete($sql);
        return $result;        
    }
}
