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
        // echo "Det ".$det;
        // echo "kilojour ".$kilojour;
        // echo "diff calorie consommena sy depensena ".$difdfcalorie;
        $calorieejeina=0;
        $list=array();
        if($objectif == 1){
            // echo "CALORIE MILA CONSOMMENA RAHA TE AHIA";
            $calorieejeina = $difdfcalorie - $det;
            // echo $calorieejeina;
            $list ="select * from regime_activite where kilocalories > ".$calorieejeina." order by kilocalories ASC ";
            $list = $this->db->query($list)->result_array();
        }
        if($objectif == 2){
            // echo "CALORIE MILA CONSOMMENA RAHA TE ATAVY";
            $calorieejeina = $det + $difdfcalorie;
            // echo $calorieejeina;
            $list = "select * from regime_activite where kilocalories > ".$calorieejeina." order by kilocalories DESC ";
            $list = $this->db->query($list)->result_array();
        }
        $rep=[];
        $j=0;
            foreach($list as $rows) {
                $rep[$j]['jour'] = " Jour ".$j+1;
                $rep[$j]['id'] =$rows['idregimeactivite'];
                $rep[$j]['idregime']=$rows['idregime'];
                $rep[$j]['nomregime']= $this->getNomRegime($rows['idregime']);
                $rep[$j]['quantite']= $rows['quantite'];
                $rep[$j]['idactivite']= $rows['idactivite'];
                $rep[$j]['nomactivite']= $this->getNomActivite($rows['idactivite']);
                $rep[$j]['dure']= $rows['dureactivite'];
                $rep[$j]['semaine']= $nbsemaine;
                $rep[$j]['menu']= $this->getDescription($rows['idregime']);
                $prix =$this->getPrix($rows['idregime'],$rows['quantite']);
                $rep[$j]['prix'] =$prix  * $nbsemaine * 7;
                // echo "       -----------              ".$j;
                $j++;
            }
            //var_dump($rep);
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
            //  echo "lahy";
            $det = 655.1 + (9.56 * $poids) + (5*$taille) -(4.68 * $age);
        }else{
            // echo "vavy";
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
        return $requete;
    }


    public function getActivite($idactivite){
        $requete = $this->db->select("*")->from("activite")->where("idactivite", $idactivite)->get()->result_array();
        return $requete[0];
    }



    public function getNomRegime($id)
    {
        $requete = $this->db->select("nomregime")->from("Regime")->where("idRegime", $id)->get()->result_array();
        // $requete = $this->db->query("select nomRegime from Regime where idRegime='$id' ");
        return $requete[0]['nomregime'];
    }

    public function getNomActivite($id)
    {
        $requete = $this->db->select("nomactivite")->from("activite")->where("idactivite", $id)->get()->result_array();
        // $requete = $this->db->query("select nomRegime from Regime where idRegime='$id' ");
        return $requete[0]['nomactivite'];
    }



    public function getRegimeSemaine($idutilisateur,$kilomax,$nbsemaine,$statu,$objectif){
        $tableau = $this->getListRegime($idutilisateur,$kilomax,$nbsemaine,$statu,$objectif);
        $temp = count($tableau);
        $rep= $tableau;
        return $rep;
    }

    public function getdetail($id){
        $requete = $this->db->select("*")->from("regime_activite")->where("idregimeactivite", $id)->get()->result_array();
        // $requete = $this->db->query("select nomRegime from Regime where idRegime='$id' ");
        $idregime=$requete[0]['idregime'];
        $idactivite=$requete[0]['idactivite'];
        $quantite = $requete[0]['quantite'];
        $dure = $requete[0]['dureactivite'];
        $menu=$this->getDescription($idregime);
        $activite =$this->getActivite($idactivite);
        $rep=[];
        $rep['menu']=$menu;
        $rep['quantite']=$quantite;
        $rep['dure']=$dure;
        $rep['activite']=$activite;
        return $rep;
    }


   
}
?>