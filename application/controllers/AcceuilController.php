<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcceuilController extends CI_Controller {
	
	public function index()
	{
		$this->load->view('users/choixObjectif');
	}
    public function crediter(){
        $this->load->model('Code_model');
        $idutilisateur =  $this->session->userdata("idutilisateur"); 
        $numero = $this->input->post('code');
        $result = $this->Code_model->crediteCode($idutilisateur , $numero);
        $data['result'] = $result;
        $this->load->view('profil',$data);
    }
    
	public function rechargement(){
        $this->load->model('Code_model');
        $data['code'] = $this->Code_model->listCode();
		$this->load->view('users/rechargement',$data);
	}
}
