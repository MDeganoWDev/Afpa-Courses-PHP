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

 public function tableContacts()
 {
    if ($this->model->select()){
        $this->vue->afficherTable($this->model->select());
    } else {
        $this->vue->afficherError();
    }
 }
 
 public function deleteContact($id) {
    $this->model->delete($id);
    $this->vue->afficherTable($this->model->select());
 }

 public function editContact($id) {
    $this->model->editSelect($id);
    $this->vue->afficherEdit($this->model->editSelect($id));
 }
 
}
