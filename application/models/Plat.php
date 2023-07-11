<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Plat extends CI_Model{
        public function getplat(){
            $sql = "SELECT * from plat";
            $rows = $this->db->query($sql);
            return $rows->result_array();
        }
        public function getplatwithid($id){
            $sql = "SELECT * from plat where idPlat=".$id."";
            $rows = $this->db->query($sql);
            return $rows->result_array();
        }

        }
?>