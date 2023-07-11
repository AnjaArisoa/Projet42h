<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	public function insertNiveau($nom,$desc){
            $sql = "INSERT INTO niveau VALUES(NULL, %s, %s)";
            $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($desc));
            $this->db->query($sql);
        }
        public function insertPlat($nom,$desc,$idinute,$image){
            $sql = "INSERT INTO composant VALUES(NULL, %s, %s,%s,%s)";
            $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($desc),$idinute,$this->db->escape($image));
            $this->db->query($sql);
        }
        public function insertSport($nom,$desc,$idinute,$image){
            $sql = "INSERT INTO composant VALUES(NULL, %s, %s,%s,%s)";
            $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($desc),$idinute,$this->db->escape($image));
            $this->db->query($sql);
        }
	public function selectNiveau(){
            $sql = "SELECT * FROM niveau";
            $rows = $this->db->query($sql);
            return $rows->result_array();
        }

    }
