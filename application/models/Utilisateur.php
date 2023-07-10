<?php

if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Utilisateur extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    /*liste users*/
    public function listeUtilisateur()
    {
        $requete = $this->db->query("select* from utilisateur ");
        return $requete;
    }
  
    public function insertUtilisateur($nomutilisateur,$mail,$pwd,$idgenre,$taille,$poids,$age)
    {
        $requete = "insert into Utilisateur(nomutilisateur,mail,pwd,idgenre,taille,poids,age) values('%s','%s','%s','%s','%s','%s','%s')";
        $requete= sprintf($requete,$nomutilisateur,$mail,$pwd,$idgenre,$taille,$poids,$age);
        $requete = $this->db->query($requete);
        $requete = $this->db->affected_rows();
        return $requete;
    }
   
    public function is_logged($mail,$pwd)
    {
        $requete = $this->db->from("utilisateur")->select("count(*) as logged")->where("mail",$mail)->where("pwd",$pwd)->get();
        return $requete->result_array()[0];
    }

    function connect($mail,$password)
    {
        $requete = $this->db->from("utilisateur")->where("mail",$mail)->where("pwd",$password)->select("*")->get();
        return $requete->result_array()[0];
    }

    public function get_id($pseudo)
    {
        $requete = $this->db->query("select id from utilisateur where mail='$pseudo' ");
        return $requete->row_array();
    }

    public function get_nom($id)
    {
        $requete = $this->db->query("select mail from utilisateur where id='$id' ");
        return $requete;
    }

   
}
?>