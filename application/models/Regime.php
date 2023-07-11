<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Regime extends CI_Model
{
    /*liste users*/
    public function listRegime()
    {
        $requete = $this->db->from("Regime")->select("*")->get();
        return $requete->result_array();
    }

    public function getNomRegime($id)
    {
        $requete = $this->db->select("nomRegime")->from("Regime")->where("idRegime", $id)->get()->result_array();
        // $requete = $this->db->query("select nomRegime from Regime where idRegime='$id' ");
        return $requete[0]['nomRegime'];
    }


 


    


   
}
?>