<?php
class CtrlUser
{

    private $model;
    private $vue;

    public function __construct()
    {
        $this->model = new ModelUser();
        $this->vue = new VueUser();
    }

    function login()
    {
        $this->vue->afficherLogin();
    }

    function seConnecter()
    {
        $data = $this->model->seConnecter($_POST);

        if (empty($data)) {
            /*                 unset($_SESSION['pseudo']);
                unset($_SESSION['droit']); */
            Session::delDroit();
            Session::delPseudo();
        } else {
/*             $_SESSION['pseudo'] = $data[0]['pseudo'];
            $_SESSION['droit'] = $data[0]['droit']; */
            Session::setDroit($data[0]['droit']);
            Session::setPseudo($data[0]['pseudo']);

            $this->vue->connexionOk($data);
        }

        /* $this->vue->seConnecter($_POST); */
    }

    public function seDeconnecter()
    {
        /*         unset($_SESSION['pseudo']);
        unset($_SESSION['droit']); */
        Session::delDroit();
        Session::delPseudo();
        $this->login();
    }
}
