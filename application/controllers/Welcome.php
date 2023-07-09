<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
  	}

	public function sign_in(){
		$this->load->model('login_model');
		$nom = $_POST['email'];
		$pwd = $_POST['pwd'];
		
		$this->login_model->check($nom,$pwd);
	}
}

