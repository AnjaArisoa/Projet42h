<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logon_model extends CI_Model {

	public function INSERT($name, $mdp){
        $sql = "INSERT INTO user VALUES(%s, %s)";
        $sql = sprintf($sql, $this->db->escape($name), $this->db->escape($mdp));
        $this->db->query($sql);
        $this->session->set_userdata('name', $name);
        $this->session->set_userdata('mdp', $mdp);
    }
}
