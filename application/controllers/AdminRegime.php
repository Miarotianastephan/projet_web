<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegime extends CI_Controller {

    
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
            $this->regime();
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }

    public function regime(){

        $this->load->model('AdminRegime_model');
        $this->load->model('AdminActivite_model');

        $data['matin'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(1);
        $data['midi'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(2);
        $data['soir'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(3);
        $data['gouter'] = $this->AdminRegime_model->getAllRegimeMenuByStatutMenu(4);
        $data['activite'] = $this->AdminActivite_model->getAllActivite();
        $this->load->view('admin/regime',$data);
    }
}


?>