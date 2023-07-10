<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    
    public function index()
    {
        $this->load->view('admin/index');
    }


    public function deconnexion(){
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('AdminController/index');
    }


    public function login()
    {
        $this->load->model('Utilisateur');
	    $pseudo = $this->input->post("mail");
		$mdp = $this->input->post("mdp"); 
		$logged = $this->Admin->is_logged($pseudo,$mdp);
		$auth = $logged->row_array();
		if($auth['logged'] == 1)
		{
            $query = $this->Admin->get_id($pseudo);
            $idAdmin = $query->row_array();
            $this->session->set_userdata("idAdmin",$idAdmin['id']);
			redirect('AdminController/accueill');
            //redirect('Users/accueill');	
		}
		else {		  		
        $this->session->set_flashdata('incorrect','Mail ou mot de passe icorrect');	 //eto 
        $this->session->flashdata('incorrect');
		redirect('AdminController/index');	
        }

    }

        /*fonction qui retourne la vue index */
    public function accueill()
    {
        $this->load->view('admin/accueill');
    }



}


?>