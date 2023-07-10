<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model("Genre");
    }
	
	public function index()
	{
        $listgenre = $this->Genre->listGenre();
        $data['listGenre'] = $listgenre;
		$this->load->view('inscription',$data);
	}
}
