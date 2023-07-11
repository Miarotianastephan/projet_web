<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin');
        $this->load->model('AdminRegime_model');
        $this->load->model('AdminActivite_model');
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
        $data['statnombre'] = $this->Admin->getStatNombre();
        $data['statnom'] = $this->Admin->getStatNom();
        $this->load->view('admin/accueil',$data);
    }

    public function accueildashboard()
    {

        $data['matin'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(1);
        $data['midi'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(2);
        $data['soir'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(3);
        $data['gouter'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(4);
        $data['activite'] = $this->AdminActivite_model->getAllActivite();
        $data['statNombre'] = $this->Admin->getStatNombre();
        $data['statNom'] = $this->Admin->getStatNom();
        $this->load->view('admin/dashboard',$data);
    }

    // Fonction pour les CRUD 
    
    public function insertRegime()
    {
        try {
            $this->load->model('AdminRegime_model');
            $nomRegime = $this->input->post("nomRegime");
            $activite = $this->input->post("activite");
            $menuMidi = $this->input->post("menuMidi");
            $menuMatin = $this->input->post("menuMatin");
            $menuSoir = $this->input->post("menuSoir");
            $menuGouter = $this->input->post("menuGouter");
            $pourcentageMatin = $this->input->post("pourcentageMatin");
            $pourcentageMidi = $this->input->post("pourcentageMidi");
            $pourcentageSoir = $this->input->post("pourcentageSoir");
            $pourcentageGouter = $this->input->post("pourcentageGouter");
            $calorie = $this->input->post("calorie");

            $somme = $pourcentageGouter + $pourcentageSoir + $pourcentageMidi + $pourcentageMatin ;
            if ($somme > 100) {
                throw new Exception("Pourcentage non valide , plus de 100");
            }
            if ($somme < 0){
                throw new Exception("Pourcentage non valide negative");
            }
            $this->AdminRegime_model->insertRegimeMenuMatinMidiSoir($nomRegime,$menuMatin,$menuMidi,$menuSoir,$menuGouter,$pourcentageMatin,$pourcentageMidi,$pourcentageSoir,$pourcentageGouter,$calorie,$activite);
            $this->accueildashboard();
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }
        
    public function regime(){
        $this->load->view('admin/regime',$data);
    }


    public function insertActivite(){
        $this->load->model('AdminActivite_model');
        $nomactivite = $this->input->post("nomactivite");
        $descriptionactivite = $this->input->post("descriptionactivite");
        $photoactivite = $this->upload_image('photoactivite');
        $this->AdminActivite_model->insertActivite($nomactivite,$photoactivite['file_name'],$descriptionactivite);
        $this->accueildashboard();
    }

    public function activite(){
        $this->load->view('admin/activite');
    }

    public function upload_image($nom_image){
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload');
		$this->upload->initialize($config);
		$this->upload->do_upload($nom_image);
		return $file_info = $this->upload->data();
	}

}


?>