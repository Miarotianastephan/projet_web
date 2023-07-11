<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Commande extends CI_Model
{
    /*liste users*/
    public function listCommande()
    {
        $requete = $this->db->from("Code")->select("*")->get();
        return $requete->result_array();
    }

    public function getCommande($numero)
    {
        $requete = $this->db->select("*")->from("commande")->where("idregime", $numero)->get()->result_array();
        $requete = $this->db->affected_rows();
        return ;
    }

//................
    public function getCommandeRegime($id){
        $sql = "select * from regime 
        join commande on commande = ";
    }

    public function insertCommande($idutilisateur,$regact,$nbsemaine,$prixcommande,$datecommande)
    {
        $requete = "insert into Commande(idutilisateur,idregimeactivite,semaine,prixcommande,datecommande) values('%d','%d','%s','%s','%s')";
        $requete= sprintf($requete,$idutilisateur,$regact,$nbsemaine,$prixcommande,$datecommande);
        $requete = $this->db->query($requete);
        $requete = $this->db->affected_rows();
        return $requete;
    }
   
}
?>