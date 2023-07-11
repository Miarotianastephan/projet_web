<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Objectif extends CI_Model
{
   
    public function listObjectif()
    {
        return $this->db->from("Objectif")->select("*")->get()->result_array();
    }
   
}
?>