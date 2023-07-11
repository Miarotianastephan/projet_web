<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegime extends CI_Controller {

    
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

        $this->load->model('AdminRegime_model');

        $data['matin'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(1);
        $data['midi'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(2);
        $data['soir'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(3);
        $data['gouter'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(4);
        
        $this->load->view('regime',$data);
    }
}


?>