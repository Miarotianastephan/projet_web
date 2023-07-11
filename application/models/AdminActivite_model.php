<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class AdminActivite_model extends CI_Model
{
    public function insertActivite($nomactivite,$photoactivite,$descriptionactivite){
        $sql = "insert into activite values (default,'".$nomactivite."','".$photoactivite."','".$descriptionactivite."')";
        $this->db->query($sql);
    }
    public function getAllActivite(){
        $sql = $this->db->query("select * from activite");
        $tab = array();
        $i=0;
        foreach($sql->result_array() as $row){
            $tab[$i]['idactivite'] = $row['idactivite'];
            $tab[$i]['photoactivite'] = $row['photoactivite'];
            $tab[$i]['descriptionactivite'] = $row['descriptionactivite'];
            $tab[$i]['nomactivite'] = $row['nomactivite'];
            $i++;
        }
        return $tab;
    }
}
?>