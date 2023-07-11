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

    public function insertRegimeMenuMatinMidiSoir($nomregime,$idmenuMatin,$idmenuMidi,$idmenuSoir,$idmenuGouter,$pourcentageMatin,$pourcentageMidi,$pourcentageSoir,$pourcentageGouter,$calorie,$activite){
        $this->insertRegime($nomregime);
        $data = $this->getAllRegime();
        if (count($data)-1<0) {
            return none;
        }
        $idRegime = $data[count($data)-1]['idregime']; 
        $minute = rand(5,20);
        
        $sqlRegimeActivite = "insert into regime_activite values (default,".$idRegime.",100,".$activite.",".$minute.",".$calorie.")";
        $this->db->query($sqlRegimeActivite);

        if ($pourcentageMatin != 0) {
            $sqlMatin = "insert into regime_menu values (default,".$idRegime.",".$idmenuMatin.",".$pourcentageMatin.")";
            $this->db->query($sqlMatin);
        }
        if ($pourcentageMidi != 0) {
            $sqlMidi = "insert into regime_menu values (default,".$idRegime.",".$idmenuMidi.",".$pourcentageMidi.")";
            $this->db->query($sqlMidi);
        }
        if ($pourcentageSoir != 0) {
            $sqlSoir = "insert into regime_menu values (default,".$idRegime.",".$idmenuSoir.",".$pourcentageSoir.")";
            $this->db->query($sqlSoir);
        }
        if ($pourcentageGouter != 0) {
            $sqlGouter = "insert into regime_menu values (default,".$idRegime.",".$idmenuGouter.",".$pourcentageGouter.")";
            $this->db->query($sqlGouter);
        }
    }
    public function insertRegime($nomregime){
        $sql = "insert into regime values (default,'".$nomregime."')";
        $this->db->query($sql);
    }
    public function getAllRegime(){
        $sql = $this->db->query("select * from regime");
        $tab = array();
        $i=0;
        foreach($sql->result_array() as $row){
            $tab[$i]['idregime'] = $row['idregime'];
            $tab[$i]['nomregime'] = $row['nomregime'];
            $i++;
        }
        return $tab;
    }

    // ..............................
   
}
?>