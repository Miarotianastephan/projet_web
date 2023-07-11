<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class RegimeActivite extends CI_Model
{
    /*liste users*/
    public function listRegimeActivite()
    {
        $requete = $this->db->from("regime_activite")->select("*")->get();
        return $requete->result_array();
    }

    public function getListRegime($idutilisateur,$kilomax,$nbsemaine,$statu,$objectif){
        $det= $this-> getDET($idutilisateur,$statu);
        $kilojour=$kilomax/($nbsemaine*7);
        $difdfcalorie=$kilojour*3500/0.45;
        echo "Det ".$det;
        echo "kilojour ".$kilojour;
        echo "diff calorie consommena sy depensena ".$difdfcalorie;
        $calorieejeina=0;
        $list=array();
        if($objectif == 1){
            echo "CALORIE MILA CONSOMMENA RAHA TE AHIA";
            $calorieejeina = $difdfcalorie - $det;
            echo $calorieejeina;
            $list = $this->db->select("*")->from("regime_activite")->where("kilocalories >", $calorieejeina)->get()->result_array();
        }
        if($objectif == 2){
            echo "CALORIE MILA CONSOMMENA RAHA TE ATAVY";
            $calorieejeina = $det + $difdfcalorie;
            echo $calorieejeina;
            $list = $this->db->select("*")->from("regime_activite")->where("kilocalories >", $calorieejeina)->get()->result_array();
        }
        //var_dump($list);
        $rep=array();
        $temp = 0;
        // foreach($list as $rows) {
        //     $temp++;
        // }

        for($i =0; $i<7 ; $i++){
            
            // echo($i);
            $rep[$i]['jour'] = " Jour ".$i;
            foreach($list as $rows) {
                $rep[$i]['regime']= $this->getDescription($rows['idregime']);
                $rep[$i]['activite']= $this->getActivite($rows['idactivite']);
                $prix =$this->getPrix($rows['idregime'],$rows['quantite']);
                $rep[$i]['prix'] =$prix  * $nbsemaine;
            } 
        }
        var_dump($rep[0]);
        var_dump($rep[6]);
        return $rep;
    }

    public function getDET($idutilisateur,$statu){
        $requete = $this->db->select("*")->from("Utilisateur")->where("idutilisateur", $idutilisateur)->get()->result_array();
        $utlisateur = $requete[0];
        $poids=$utlisateur['poids'];
        $sexe=$utlisateur['idgenre'];
        $taille=$utlisateur['taille'];
        $age=$utlisateur['age'];
        $det=0;
        if($sexe == 1){
             echo "lahy";
            $det = 655.1 + (9.56 * $poids) + (5*$taille) -(4.68 * $age);
        }else{
            echo "vavy";
            $det = 66.5 + (13.75 * $poids) + (5*$taille) -(6.75 * $age);
        }
        $valeurpc=$this-> getValeurePhysique($statu);
        $rep = $det * $valeurpc;
        return $rep;
    }

    public function getValeurePhysique($statu){
        $rep=0;
        if($statu == 0){
            $rep = 1.2;
        }
        if($statu == 1){
            $rep = 1.375;
        }
        if($statu == 2){
            $rep = 1.55;
        }
        else{
            $rep = 1.725;
        }
        return $rep;
    }

    public function getPrix($idregime,$quantiteregime){
        $requete = $this->db->select("*")->from("regime_menu")->where("idregime", $idregime)->get()->result_array();
        $rep = 0;
        foreach($requete as $rows) {
            $compose= $quantiteregime * $rows['composition'] /100;
            $prixmenuregime = $this-> getPrixMenu($rows['idmenu'],$compose);
            $rep = $rep + $prixmenuregime;
        } 
        return $rep;

    }

    public function getPrixMenu($idmenu,$quantite){
        $requete = $this->db->select("*")->from("menu")->where("idmenu", $idmenu)->get()->result_array();
        $menu = $requete[0];
        $prixg= $menu['prixmenu'];
        $rep = $quantite * $prixg / 100;
        return $rep;
    }

    public function getDescription($idregime){
        $sql = "select * from regime_menu join menu on regime_menu.idmenu = menu.idmenu 
        join regime on regime_menu.idregime=regime.idregime where regime_menu.idregime = '%d'";
        $requete= sprintf($sql,$idregime);
        $requete = $this->db->query($requete)->result_array();
        // var_dump($requete);
        return $requete;
    }

    public function getActivite($idactivite){
        $sql = "select * from regime_activite join activite on regime_activite.idactivite = activite.idactivite 
         where  regime_activite.idactivite = '%d'";
        $requete= sprintf($sql,$idactivite);
        $requete = $this->db->query($requete)->result_array();
        // var_dump($requete);
        return $requete;
    }



   
}
?>