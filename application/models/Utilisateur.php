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

    
  
        public function insertUtilisateur($nom,$genre,$mail,$mdp,$taille,$poids,$age)
    {
        $requete = "insert into Utilisateur(nom,idgenre,mail,pwd,taille,poids,age ) values('%s','%d','%s','%s','%s','%s','%d')";
        $requete= sprintf($requete, $nom,$genre,$mail,$mdp,$taille,$poids,$age);
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