<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCrud extends CI_Controller {
    public function insert_niveau(){
        $this->load->model('Admin');
		$this->Admin->insertNiveau($_GET['nom'],$_GET['description']);
        $this->load->view('header');
        $this->load->view('niveau');
        $this->load->view('footer');
    }
    // public function select_niveau(){
    //     $this->load->model('Admin');
    //       $data['objet']=$this->Admin->selectNiveau();
    //       $this->load->view('header');
    //       $this->load->view('choix',$data);
    //       $this->load->view('footer');
    // }
    
  
}