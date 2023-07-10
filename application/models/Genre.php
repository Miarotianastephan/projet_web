<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Genre extends CI_Model
{
    /*liste users*/
    public function listGenre()
    {
        $requete = $this->db->from("Genre")->select("*")->get();
        return $requete->result_array();
    }

    public function getNomGenre($id)
    {
        $requete = $this->db->select("nomgenre")->from("Genre")->where("idgenre", $id)->get()->result_array();
        // $requete = $this->db->query("select nomgenre from Genre where idgenre='$id' ");
        return $requete[0]['nomgenre'];
    }

   
}
?>