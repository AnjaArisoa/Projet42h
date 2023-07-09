<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function logon(){
		$this->load->model('logon_model');
		$this->logon_model->INSERT($_POST['name'], $_POST['psw']);
		echo $this->session->userdata('name');
		echo $this->session->userdata('mdp');
	}

	public function index()
	{
		$this->load->view('logon');
	}		
}
