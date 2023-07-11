<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeController extends CI_Controller {

    
    public function voirRegime()
    {
        echo 'Haha';
        $this->load->model('RegimeActivite');
        $idutilisateur = 2;
        $kilomax = 5;
        $nbsemaine= 1;
        $statu = 1;
        $objectif = 2;
        $listregime = $this->RegimeActivite->getListRegime($idutilisateur,$kilomax,$nbsemaine,$statu,$objectif);
        $data=array();
        $data['listRegime'] = $listregime;
        echo 'HUHU';
        //$this->load->view('acceuill',$data);
    }

    public function index()
    {   
        $this->load->view('index2');
    }
    


}


?>