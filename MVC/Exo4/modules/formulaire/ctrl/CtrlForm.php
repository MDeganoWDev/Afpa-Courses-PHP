<?php
class CtrlForm
{
    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueForm();
        $this->model = new ModelForm();
    }

    public function formulaire()
    {
        $this->vue->afficherFormulaire();
    }

    public function enregistrerFormulaire()
    {
        if ($this->model->insert($_POST)){
        $this->vue->afficherResultat($_POST);
        } else {
            $this->vue->afficherError();
        }
    }
}
