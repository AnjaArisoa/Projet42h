<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		session_destroy();
		$this->load->view('login');
  	}

	public function sign_in(){
		$this->load->model('login_model');
		$nom = $_POST['email'];
		$pwd = $_POST['pwd'];
		$idUser = $this->login_model->check($nom,$pwd);
		if ($idUser == 1) {
			$_SESSION['idUser'] = $idUser;
			redirect('Menu/');	
		}
		redirect('Welcome/');
	}
}