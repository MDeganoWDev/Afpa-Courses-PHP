<?php
class CtrlMeteo
{
    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueMeteo();
        $this->model = new ModelMeteo();

    }

    public function meteo()
    {
        $this->vue->afficherMeteo();
    }

    public function getMeteo($ville){
        $data = $this->model->getCityData($ville);
        $this->vue->afficherPrevisionnel($data);
    }

}
