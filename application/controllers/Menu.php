<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index()
	{
        $this->load->model('Plat');
        $data['objet']=$this->Plat->getplat();
		$this->load->view('header');
        $this->load->view('accueil',$data);
        $this->load->model('Transaction_model');
        var_dump($this->Transaction_model->Achat($_SESSION['idUser'], 1, 0));
        $this->load->view('footer');
  	}
      public function indexwithid()
      {
          $this->load->model('Plat');
          $data['objet']=$this->Plat->getplatwithid($_GET['id']);
          $this->load->view('header');
          $this->load->view('detail',$data);
          $this->load->view('footer');
        }
    public function porte(){
        $this->load->view('header');
        $this->load->view('footer');
    }
    public function commencer(){
        $this->load->view('header');
        $this->load->view('completion');
        $this->load->view('footer');
    }
    public function sport(){           
        $this->load->model('Admin');
        $this->Admin->insertSport($_GET['nom'],$_GET['description'],$_GET['unite'],$_GET['photo']);
        $this->load->view('header');
        $this->load->view('sport');
        $this->load->view('footer');
    }
    public function plat(){
        
        $this->load->model('Admin');
        $this->Admin->insertPlat($_GET['nom'],$_GET['description'],$_GET['unite'],$_GET['photo']);
        
        $this->load->view('header');
        $this->load->view('plat');
        $this->load->view('footer');
    }
    public function niveau(){
        $this->load->view('header');
        $this->load->view('niveau');
        $this->load->view('footer');
    }
    public function sport1(){
        $this->load->view('header');
        $this->load->view('sport');
        $this->load->view('footer');
    }   
    public function plat1(){
        $this->load->view('header');
        $this->load->view('plat');
        $this->load->view('footer');
    }
}