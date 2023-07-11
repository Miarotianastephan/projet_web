<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('RegimeActivite');
    }

    public function voirRegime()
    {

        if ($this->session->has_userdata("idutilisateur")){

            $idutilisateur = $this->session->userdata("idutilisateur"); // Session IDUtilisateur
            $kilo = $this->input->post("kilo");
            $nbsemaine= $this->input->post("nbsemaine");
            $statu = $this->input->post("status");
            $objectif = $this->input->post("idobjectif");
            $listregime = $this->RegimeActivite->getListRegime($idutilisateur,$kilo,$nbsemaine,$statu,$objectif);
            $data=array();
            $data['listRegime'] = $listregime;
            $this->load->view('users/accueil',$data);
            
        }else{
            redirect(base_url());
        }
    }

    public function index()
    {   
        $this->load->view('index2');
    }
    


}


?>