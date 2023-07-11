<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class AdminRegime_model extends CI_Model
{

    public function getAllRegimeMenuByStatutMenu($statutmenu){
        $sql = $this->db->query("select * from menu where statutmenu = ".$statutmenu."");
        $tab = array();
        $i=0;
        foreach($sql->result_array() as $row){
            $tab[$i]['idmenu'] = $row['idmenu'];
            $tab[$i]['nonmenu'] = $row['nonmenu'];
            $tab[$i]['descriptionmenu'] = $row['descriptionmenu'];
            $tab[$i]['photomenu'] = $row['photomenu'];
            $tab[$i]['statutmenu'] = $row['statutmenu'];
            $tab[$i]['prixmenu'] = $row['prixmenu'];
            $i++;
        }
        return $tab;
    }
   
}
?>