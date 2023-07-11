<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function check($nom,$pwd){
        $sql = "SELECT * FROM user WHERE email = %s AND password = %s";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($pwd));
        $rows = $this->db->query($sql);
        $data = $rows->result_array();
        if(count($data) == 0){
            return 0;
		}
        return $data[0]['idUser'];
        // $this->db->query($sql);
        // $this->session->set_userdata('nom', $nom);
        // $this->session->set_userdata('mdp', $mdp);
    }
    public function olona($id){
        $sql = "SELECT * FROM user WHERE idUser=".$id."";
      
        $rows = $this->db->query($sql);
        $data = $rows->result_array();
        return $data;
    }
}
