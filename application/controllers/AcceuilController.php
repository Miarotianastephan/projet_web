<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcceuilController extends CI_Controller {
	
	public function index()
	{
		$this->load->view('users/choixObjectif');
	}
}
