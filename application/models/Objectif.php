<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Objectif extends CI_Model
{
    /*liste users*/
    public function selectObjectif()
    {
        $requete = $this->db->query("select* from Objectif ");
        return $requete;
    }
   
}
?>