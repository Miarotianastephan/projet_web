<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurController extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Utilisateur');
        $this->load->model('Genre');
    }

    public function index()
    {   
        $this->load->view('users/index');
    }
    
    public function nouveau_utilisateur()
    {

        $nomutilisateur = $this->input->post('nomutilisateur'); 
        $mail = $this->input->post('mail');
        $pwd = $this->input->post('pwd');
        $idgenre= $this->input->post('idgenre');
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');
        $age = $this->input->post('age');

        $this->Utilisateur->insertUtilisateur($nomutilisateur,$mail,$pwd,$idgenre,$taille,$poids,$age);
        redirect(base_url());
    }
    
    public function login()
    {

	    $email = $this->input->post('email');
		$password = $this->input->post('password'); 

        $loger = new Utilisateur();

		$logged = $loger->is_logged($email,$password);
		$auth = $logged;

		if($auth['logged'] == 1)
		{
            $utilisateur = $loger->connect($email,$password);

            $this->session->set_userdata("idutilisateur",$utilisateur["idutilisateur"]);
            $this->session->set_userdata("nomutilisateur",$utilisateur["nomutilisateur"]);
            $this->session->set_userdata("estadmin","non");
            
			redirect('ObjectifController/allObjectif');
		}
		else {		  		
            $this->session->set_flashdata('incorrect','Mail ou mot de passe icorrect');
            $this->session->flashdata('incorrect');
            redirect('UtilisateurController/index');	
        }
    }

    function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url());
    }

    public function accueill()
    {
        $id=$this->session->idutilisateur;
        $this->load->view('users/accueil');
    }
    





}

?>