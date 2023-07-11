<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminActivite extends CI_Controller {

    public function insertActivite(){
        $this->load->model('AdminActivite_model');
        $nomactivite = $this->input->post("nomactivite");
        $descriptionactivite = $this->input->post("descriptionactivite");
        $photoactivite = $this->upload_image('photoactivite');
        $this->AdminActivite_model->insertActivite($nomactivite,$photoactivite['file_name'],$descriptionactivite);
    }
    public function activite(){
        $this->load->view('activite');
    }
    public function upload_image($nom_image){
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload');
		$this->upload->initialize($config);
		$this->upload->do_upload($nom_image);
		return $file_info = $this->upload->data();
		// $config['max_size'] = '00000000000';
		// $config['max_width']  = '10240000000';
		// $config['max_height']  = '7680000000';
		// $config['overwrite'] = TRUE;
		// $config['encrypt_name'] = FALSE;
		// $config['remove_spaces'] = TRUE;
	}
}


?>