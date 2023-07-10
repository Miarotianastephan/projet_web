<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Admin extends CI_Model
{
    /*liste users*/
    public function listeAdmin()
    {
        $requete = $this->db->query("select* from Admin ");
        return $requete;
    }

    
  
        public function insertAdmin($nom, $prenom,$genre,$mail,$mdp,$datenaissance)
    {
        $requete = "insert into Admin(nom,prenom,idgenre,mail,mdp,datenaissance ) values('%s','%s','%d','%s')";
        $requete= sprintf($requete, $nom, $prenom,$genre,$mail,$mdp,$datenaissance);
        $requete = $this->db->query($requete);
        $requete = $this->db->affected_rows();
        return $requete;
    }

  

   
    public function is_logged($pseudo,$mdp)
    {
        $requete = $this->db->query("select count(*) as logged from Admin where mail='$pseudo' and mdp='$mdp' ");
        return $requete;
    }

    public function get_id($pseudo)
    {
        $requete = $this->db->query("select id from Admin where mail='$pseudo' ");
        return $requete;
    }

    public function get_nom($id)
    {
        $requete = $this->db->query("select mail from Admin where id='$id' ");
        return $requete;
    }

   
}
?>