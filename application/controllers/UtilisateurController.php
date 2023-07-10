<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurController extends CI_Controller {

    public function index()
    {   
      $this->load->view('users/index');
    }
    
    public function nouveau_membre()
    {
        $this->load->library('form_validation');
        $this->load->model('Utilisateur');
        $nom = $this->input->post('nom'); 
        $prenom = $this->input->post('prenom');
        $contact = $this->input->post('contact');
        $genre= $this->input->post('idgenre');
        $mail = $this->input->post('mail');
        $adresse = $this->input->post('adresse');
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');
        $dtn = $this->input->post('dtn');
        $this->Utilisateur->insertUtilisateur($nom, $prenom,$genre,$contact,$mail,$adresse,$taille,$poids,$dtn);
        $this->load->view('users/index');
    }

   
    public function inscrire()
    {
        $this->load->view('users/inscription');
    }
    


    public function login()
    {

		$this->load->model('Utilisateur');
	    $pseudo = $this->input->post("mail");
		$mdp = $this->input->post("mdp"); 
		$logged = $this->Utilisateur->is_logged($pseudo,$mdp);
		$auth = $logged->row_array();
		if($auth['logged'] == 1)
		{
            $query = $this->Utilisateur->get_id($pseudo);
            $idutilisateur = $query->row_array();

            $this->session->set_userdata("idutilisateur",$idutilisateur['id']);
			redirect('UtilisateurController/accueill');
            //redirect('Users/accueill');	
		}
		else {		  		
        $this->session->set_flashdata('incorrect','Mail ou mot de passe icorrect');	 //eto 
        $this->session->flashdata('incorrect');
		redirect('UtilisateurController/index');	
        }
    }

    public function accueill()
    {
        $this->load->model('Utilisateur');
        $this->load->model('Societe');
        $id=$this->session->idutilisateur;
        $this->load->view('users/accueill');
    }
    





}

?>