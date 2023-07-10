<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Utilisateur extends CI_Model
{
    /*liste users*/
    public function listeUtilisateur()
    {
        $requete = $this->db->query("select* from utilisateur ");
        return $requete;
    }

    
  
        public function insertUtilisateur($nom, $prenom,$genre,$contact,$mail,$mdp,$adresse,$taile,$poids,$datenaissance)
    {
        $requete = "insert into Utilisateur(nom,prenom,idgenre,contact,mail,mdp,adresse,taille,poids,datenaissance ) values('%s','%s','%d','%s','%s','%s','%s','%s','%s','%s')";
        $requete= sprintf($requete, $nom, $prenom,$genre,$contact,$mail,$mdp,$adresse,$taile,$poids,$datenaissance);
        $requete = $this->db->query($requete);
        $requete = $this->db->affected_rows();
        return $requete;
    }

  

   
    public function is_logged($pseudo,$mdp)
    {
        $requete = $this->db->query("select count(*) as logged from utilisateur where mail='$pseudo' and mdp='$mdp' ");
        return $requete;
    }

    public function get_id($pseudo)
    {
        $requete = $this->db->query("select id from utilisateur where mail='$pseudo' ");
        return $requete;
    }

    public function get_nom($id)
    {
        $requete = $this->db->query("select mail from utilisateur where id='$id' ");
        return $requete;
    }

   
}
?>