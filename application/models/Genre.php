<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Genre extends CI_Model
{
    /*liste users*/
    public function listeGenre()
    {
        $requete = $this->db->query("select* from Genre ");
        return $requete;
    }

    


    public function getNomGenre($id)
    {
        $requete = $this->db->query("select nomgenre from Genre where idgenre='$id' ");
        return $requete;
    }

   
}
?>