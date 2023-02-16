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
        $this->model->insert($_POST);
        $this->vue->afficherOk($_POST);
    }

    public function afficherContacts($status = 1)
    {
        if (Session::getDroit() == "admin" || Session::getDroit() == "editor") {
            $data = $this->model->selectContacts();
            $this->vue->afficherContacts($data, $status);
        } else {
            $this->vue->afficherDroitsInsuffisants();
        }
    }

    public function deleteContact($id)
    {
        if (Session::getDroit() == "admin") {
        $result = $this->model->deleteContact($id);
        if ($result) {
            $this->afficherContacts(2);
        } else {
            $this->afficherContacts(3);
        }
    }else{
        $this->vue->afficherDroitsInsuffisants(); 
    }
    }

    public function editContact($id) {
        if (Session::getDroit() == "admin" || Session::getDroit() == "editor") {
        $this->model->editSelect($id);
        $this->vue->afficherEdit($this->model->editSelect($id));
    } else {
        $this->vue->afficherDroitsInsuffisants();
    }
     }
     public function MAJContact() {
        if (Session::getDroit() == "admin" || Session::getDroit() == "editor") {
        $this->model->Update($_POST);
        $this->vue->afficherTable($this->model->selectContacts());
    } else {
        $this->vue->afficherDroitsInsuffisants();
    }
     }
     
    }
    