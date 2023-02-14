<?php
class CtrlForm{

    private $vue;
    private $model;

    public function __construct()
    {
        $this->vue = new VueForm();
        $this->model = new ModelForm();
    }

    public function formulaire(){
        $this->vue->afficherFormulaire();
    }   

    public function enregistrerFormulaire(){        
        $this->vue->afficherResultat($_POST);
    }
    
    public function getFormulaire($form)
    {
        $data = $this->model->getFormulaireData($form);
        $this->vue->afficherResultat($data);
        // switch (true) {
        //     case (isset($data['name'])):
        //         $this->vue->afficherResultat($data);
        //         break;
        //     case (isset($data['errors'])):
        //         $this->vue->afficherError($data);
        //         break;
        // }
    }

}