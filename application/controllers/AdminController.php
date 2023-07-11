<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin');
    }
    
    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
	    $email = $this->input->post("email");
		$password = $this->input->post("password"); 

        
        $loger = new Admin();

		$logged = $loger->is_logged($email,$password);
		$auth = $logged;

		if($auth['logged'] == 1)
		{
            $admin = $loger->connect($email,$password);

            $this->session->set_userdata("idadmin",$admin['idadmin']);
            $this->session->set_userdata("nomadmin",$admin['nomadmin']);
            $this->session->set_userdata("mail",$admin['mail']);
            $this->session->set_userdata("estadmin","oui");

			// redirect('AdminController/accueiladmin');
			redirect('AdminController/accueildashboard');
		}
		else {		  		
            $this->session->set_flashdata('incorrect','Mail ou mot de passe icorrect');
            $this->session->flashdata('incorrect');
		    redirect('AdminController/index');
        }

    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('AdminController/index');
    }

    public function accueil()
    {
        $this->load->view('users/index');
    }

    public function accueiladmin()
    {
        $this->load->view('admin/accueil');
    }

    public function accueildashboard()
    {
        $this->load->view('admin/dashboard');
    }

    // Fonction pour les CRUD 
 
    public function insertRegime()
    {
        try {
            $nomRegime = $pseudo = $this->input->post("nomRegime");
            $menuMidi = $pseudo = $this->input->post("menuMidi");
            $menuMatin = $pseudo = $this->input->post("menuMatin");
            $menuSoir = $pseudo = $this->input->post("menuSoir");
            $menuGouter = $pseudo = $this->input->post("menuGouter");
            $pourcentageMatin = $pseudo = $this->input->post("pourcentageMatin");
            $pourcentageMidi = $pseudo = $this->input->post("pourcentageMidi");
            $pourcentageSoir = $pseudo = $this->input->post("pourcentageSoir");
            $pourcentageGouter = $pseudo = $this->input->post("pourcentageGouter");

            $somme = $pourcentageGouter + $pourcentageSoir + $pourcentageMidi + $pourcentageMatin ;
            if ($somme > 100) {
                throw new Exception("Pourcentage non valide , plus de 100");
            }
            if ($somme < 0){
                throw new Exception("Pourcentage non valide negative");
            }
            $this->regime();
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }

    
    public function regime(){

        $admin = new Admin();

        $data['matin'] = $admin->getAllRegimeMenuByStatutMenu(1);
        $data['midi'] = $admin->getAllRegimeMenuByStatutMenu(2);
        $data['soir'] = $admin->getAllRegimeMenuByStatutMenu(3);
        $data['gouter'] = $admin->getAllRegimeMenuByStatutMenu(4);
        
        $this->load->view('regime',$data);
    }



}


?>