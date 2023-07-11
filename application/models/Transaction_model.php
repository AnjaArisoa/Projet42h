<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    date_default_timezone_set("europe/paris");
    class Transaction_model extends CI_Model{
        public function payer($idAccount, $montant){
            try {
                $this->updateAccount($idAccount, -$montant);
            } catch (Exception $e) {
                return $e->getMessage();
            }
            $this->insertTransac($idAccount, 1, $montant);
        }

        public function payerDater($idAccount, $montant, $date){
            try {
                $this->updateAccount($idAccount, -$montant);
            } catch (Exception $e) {
                return $e->getMessage();
            }
            $this->insertTransacDater($idAccount, 1, $montant, $date);
        }

        public function getAccountValue($idAccount){
            $sql = "SELECT montant FROM account WHERE idAccount=" . $idAccount;
            $result = $this->db->query($sql);
            $ans = $result->result_array();
            return $ans[0]['montant'];
        }

        public function updateAccount($idAccount, $value)
        {
            $current_value = $this->getAccountValue($idAccount);
            if ($value < 0 && $current_value < -$value) {
                throw new Exception("Transaction invalide, balance insuffisante");
            }
            $sql = "UPDATE account set montant=%s WHERE idAccount=%s";
            $sql = sprintf($sql, $current_value + $value, $idAccount);
            $this->db->query($sql);
        }

        public function insertTransac($idAccount, $mouvement, $montant){
            $sql = "INSERT INTO transaction VALUES(%s, %s, %s, current_date())";
            $sql = sprintf($sql, $idAccount,$mouvement ,$montant);
            echo $sql;
            $this->db->query($sql);
        }

        public function insertTransacDater($idAccount, $mouvement, $montant, $date){
            $sql = "INSERT INTO transaction VALUES(%s, %s, %s, %s)";
            $sql = sprintf($sql, $idAccount,$mouvement,$montant,$this->db->escape($date));
            $this->db->query($sql);
        }

        public function generateCode($montant){
            $sql = "INSERT INTO code_credit VALUES(null, (SELECT key_value FROM key_char), 0, %s)";
            $sql = sprintf($sql, $montant);
            $this->db->query($sql);
        }

        public function getValidCode(){
            $sql = "SELECT * FROM code_credit WHERE used=0";
            $result = $this->db->query($sql);
            $ans = array();
            foreach ($result->result_array() as $row) {
                array_push($ans, 
                    array(
                        'code' => $this->getCode($row), 
                        'montant' => $row['value']
                    ));
            }
            return $ans;
        }

        public function getCode($row){
            $completing = count($row['numeric_value']);
            $zeros = "";
            for ($i=$completing; $i < 7; $i++) { 
                $zeros = $zeros . '0';
            }
            return $row['key_char'] . $zeros . $row['numeric_value'];
        }

        public function valider($idAccount, $code){
            $codes = $this->getValidCode();
            if (!in_array($code, $codes)) {
                return false;
            }
            return true;
        }

        public function switchToGold($idUser){
            $this->load->model('User_model');
            $idAccount = $this->User_model->getAccount($idUser);
            $this->updateAccount($idAccount, -30000);
            $this->insertTransac($idAccount, 1, 30000);
            $sql = "UPDATE user set isGold=1 WHERE idUser=" . $idUser;
            $this->db->query($sql);
        }

        public function Achat($idUser, $idRegime, $isGold){
            $this->load->model('Regime_model');
            $this->load->model('User_model');
            $prix = $this->Regime_model->getPrix($idRegime);
            if ($isGold == 1) {
                $prix = $prix - $prix * 0.15;
            }
            $idAccount = $this->User_model->getAccount($idUser);
            $this->payer($idAccount, $prix);
            $sql = "INSERT INTO achat VALUES(%s, %s, %s, current_date())";
            $sql = sprintf($sql, $idUser, $idRegime, $prix);
            $this->db->query($sql);
        }
    }
?>