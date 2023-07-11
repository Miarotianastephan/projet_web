<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('RegimeActivite');
    }

    public function voirRegime()
    {

        if ($this->session->has_userdata("listRegime") == false){
            if ($this->session->has_userdata("idutilisateur")){
                
                $idutilisateur = $this->session->userdata("idutilisateur"); // Session IDUtilisateur
                $kilo = $this->input->post("kilo");
                $nbsemaine= $this->input->post("nbsemaine");
                $statu = $this->input->post("status");
                $objectif = $this->input->post("idobjectif");
                $listregime = $this->RegimeActivite->getRegimeSemaine($idutilisateur,$kilo,$nbsemaine,$statu,$objectif);
                $data=array();
                $this->session->set_userdata("listRegime",$listregime);
                $data['listRegime'] = $listregime;
                $this->load->view('users/accueil',$data);
                
            }else{
                redirect(base_url());
            }
        }
        else if ($this->session->has_userdata("listRegime") == true){
            $data['listRegime'] =$this->session->userdata("listRegime");
            $this->load->view('users/accueil',$data);
        }
    }

    public function detailacc(){
        
        if ($this->session->has_userdata("idutilisateur")){

            $idregime = $this->input->post('idregime');
            $regimedetail = $this->RegimeActivite->getdetail($idregime);
            $data['detailregime'] = $regimedetail;
            $data['listRegime'] = $this->session->userdata("listRegime");
            $this->load->view('users/detailacc',$data);
            
        }else{
            redirect(base_url());
        }
    }

    public function detailRegime()
    {
        echo 'Haha';
        $this->load->model('RegimeActivite');
        $id = 1;
        $detail = $this->RegimeActivite->getdetail($id);
        $data=array();
        $data['result'] = $detail;
        $this->load->view('detail',$data);
    }

    public function index()
    {   
        $this->load->view('index2');
    }
    
    public function commander(){
        $this->load->model('Commande');
        $idutilisateur = 1;
        $regimeactivite = $this->input->post('id');  
        $nbsemaine = $this->input->post('nbsemaine');
        $prixcommande = $this->input->post('prix');
        $date = date('Y-m-d H:i:s');
        $this->Commande->insertCommande($idutilisateur,$regimeactivite,$nbsemaine,$prixcommande,$date);
        $this->voirRegime();
    }

}


?>