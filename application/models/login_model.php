<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function check($nom,$pwd){
        $sql = "SELECT * FROM user WHERE email = %s AND password = %s";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($pwd));
        $rows = $this->db->query($sql);
        if(count($rows->result_array()) == 0){
            return 0;
		}
        return 1;
        // $this->db->query($sql);
        // $this->session->set_userdata('nom', $nom);
        // $this->session->set_userdata('mdp', $mdp);
    }
}
