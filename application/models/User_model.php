<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model{
        public function insert_detail($idUser, $sexe, $taille, $poids){
            $sql = "INSERT INTO detail_user VALUES(%s, %s, %s, %s)";
            $sql = sprintf($sql, $idUser, $sexe, $taille, $poids);
            $this->db->query($sql);
        }

        public function insert_user(){
            $user_pic = $this->upload_file();
            $sql = "INSERT INTO user VALUES(NULL, %s, %s, %s, DEFAULT, %s)";
            $sql = sprintf($sql, $this->db->escape($_POST['nom']), $this->db->escape($_POST['email']), $this->db->escape($_POST['pwd']), $this->db->escape($user_pic));
            $this->db->query($sql);
        }

        public function upload_file(){
            var_dump($_FILES);
            $config['upload_path'] = 'assets/img/user_pic';
            $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG';
            $config['file_name'] = $_FILES['user_pic']['name'];
            $config['max_size'] = '300000';       
            
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('user_pic')) {
                return $_FILES['user_pic']['name'];
            } else {
                return "None";
            }
        }

        public function getImg($idUser){
            $sql = "SELECT img FROM user WHERE idUser=" . $idUser;
            $result = $this->db->query($sql);
            $ans = $result->result_array();
            return $ans[0]['img'];
        }

        public function getAccount($idUser){
            $sql = "SELECT idAccount FROM account WHERE idUser = " . $idUser;
            $result = $this->db->query($sql);
            $ans = $result->result_array();
            return $ans[0]['idAccount'];
        }

        public function getUserInfo($idUser){
            $sql = "SELECT nom,email FROM user WHERE idUser=" . $idUser;
            $result = $this->db->query($sql);
            $ans = $result->result_array();
            return $ans[0];
        }

        public function deconnect(){
            session_destroy();
        }
    }
?>