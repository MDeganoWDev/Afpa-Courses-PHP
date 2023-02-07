<?php
include_once "Mineur.php";
class Ado extends Mineur {
    private $assr;

    public function __construct($nom = "", $prenom = "", $age = "", $classe = "", $assr=true)
    {
        parent::__construct($nom,$prenom,$age,$classe);
        $this->assr = $assr;
    }
    function afficher(){
        parent::afficher();
        echo $this->assr ? "a son ASSR<br/>" : "n'a pas son ASSR<br/>";
    }

    public function getAssr()
    {
        return $this->assr;
    }

    public function setAssr($assr)
    {
        $this->assr = $assr;

        return $this;
    }
}