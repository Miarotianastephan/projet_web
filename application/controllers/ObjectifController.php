<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifController extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Objectif');
    }
    
    public function allObjectif()
    {
        $listobjectif = $this->Objectif->listObjectif();
        $data['listobjectif'] = $listobjectif;

        $this->load->view('users/choixObjectif',$data);
    }



}


?>