<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Code_model extends CI_Model
{
    /*liste users*/
    public function listCode(){
        $requete = $this->db->from("Code")->select("*")->get();
        return $requete->result_array();
    }

    public function listNotification(){
        $requete = "select * from notification 
        join utilisateur on notificqtion.utilisateur = utlisateur.idutilisateur 
        join code on notification.idcode=code.idcode 
        where statu != 2";
        $requete = $this->db->query($requete);
        return $requete->result_array();
    }

    public function getIdcode($numero)
    {
        $requete = $this->db->select("idcode")->from("Code")->where("numerocode", $numero)->get()->result_array();
        if($requete == null){
            return 0;
        }
        return $requete[0]['idcode'];
    }

    public function verifCode($numero){
        $id=$this -> getIdcode($numero);
        if($id == 0){
            return false;
        }
        $requete = $this->db->select("*")->from("Notification")->where("idcode", $id)->get()->result_array();

        foreach($requete as $rows) {
            if($rows['statu' == 1]) { //valider le code
                return false;
            }else{
                return true;
            }
        }
        return true;
    }


    public function crediteCode($utilisateur , $numero){
        $verif = $this ->verifCode($numero);
        if($verif == false){
            return "Code invalide ou deja utilise";
        }
        if($verif == true){
            $id= $this-> getIdcode($numero);
            $requete = "insert into Notification(idutilisateur,idcode,statu) values('%d','%d',0)";
            $requete= sprintf($requete,$utilisateur , $numero);
            $requete = $this->db->query($requete); 
            return "En attente de validation d'admnistrateur ";
        }
    }


    public function validerCode($idnotification, $idadmin){

        $requete = $this->db->select("*")->from("Notification")->where("idnotification", $idnotification)->get()->result_array();
        $idcode = $requete[0]['idcode'];
        $idutilisateur = $requete[0]['idutilisateur'];

        $code = $this->db->select("*")->from("code")->where("idcode", $idcode)->get()->result_array();
        $vola = $this->db->select("*")->from("portemonnaie")->where("idutilisateur", $idutilisateur)->get()->result_array();

        $solde = 0;
        $solde = $vola[0]['solde'];
        $credit = $code[0]['valeurcode'];


        if($solde == 0){
            $sql1 = "insert into portemonnaie(idutilisateur,solde) values('%d','%s')";
            $sql1= sprintf($sql1,$idnotification, $credit);
            $sql1 = $this->db->query($sql1); 
        }else{
            $solde = $solde + $credit;
            $sql2 = "update from portemonnaie set solde ='%s' where idutilisateur='%d'";
            $sql2= sprintf($sql2,$solde, $idutilisateur);
            $sql2 = $this->db->query($sql2); 
        }

        $date = date('Y-m-d H:i:s');
        $sql = "insert into Transaction(idnotification,idadmin,transactiondate) values('%d','%d','%s')";
        $sql= sprintf($sql,$idnotification, $idadmin,$date);
        $sql = $this->db->query($sql); 

        $sql3 = "update from notification set statu ='%d' where idnotification='%d'";
        $sql3= sprintf($sql3,1, $idnotification);
        $sql3 = $this->db->query($sql3); 


    }

    public function reffuserCode($idnotification, $idadmin){
        $sql3 = "update from notification set statu ='%d' where idnotification='%d'";
        $sql3= sprintf($sql3,2, $idnotification);
        $sql3 = $this->db->query($sql3); 
        return true;

    }

 


    


   
}
?>