<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifController extends CI_Controller {

    
    public function listObjectif()
    {
        echo 'Haha';
        $this->load->model('Objectif');
        $listobjectif = $this->Objectif->selectObjectif();
        $data=array();
        $data['listobjectif'] = $listobjectif;
        echo 'HUHU';
        $this->load->view('acceuill',$data);
    }



}


?>