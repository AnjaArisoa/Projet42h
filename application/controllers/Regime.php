<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
    public function index(){
        $this->load->model('Regime_model');
        $data['objet']=$this->Regime_model->getDetail($_GET['id'], $_GET['duree']); 
        $this->load->view('regime',$data);
    }
    public function pdf(){
        $this->load->model('Regime_model');
        $this->load->model('Login_model');
        $data['objet']=$this->Regime_model->getDetail($_GET['id'], $_GET['duree']);
        $data['olona']=$this->Login_model->olona($_SESSION['idUser']);  
        $this->load->view('pdf',$data);
       
    }
   
}