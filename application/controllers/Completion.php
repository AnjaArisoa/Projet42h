<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class completion extends CI_Controller {
    public function insert_detail(){
        $this->load->model('user_model');
		$this->user_model->insert_detail($_SESSION['idUser'], $_GET['transport'],$_GET['taille'],$_GET['poids']);
        $this->load->model('Regime_model');
        $data['suggestion']=$this->Regime_model-> getRegimeFit($_GET['objectif'],$_GET['taille'],$_GET['poids'],$_GET['transport'],$_GET['nbkilo']); 
        $this->load->model('Admin');
        $data['objet']=$this->Admin->selectNiveau();
        $this->load->view('header');
        $this->load->view('choix',$data);
        $this->load->view('footer');
      
        
    }
    
  
}
  
