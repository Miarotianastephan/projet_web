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
  
        public function insertAdmin($nom,$mail,$mdp)
    {
        $requete = "insert into Admin(nom,mail,pwd) values('%s','%s','%s')";
        $requete= sprintf($requete, $nom,$mail,$mdp);
        $requete = $this->db->query($requete);
        $requete = $this->db->affected_rows();
        return $requete;
    }   

    public function is_logged($mail,$pwd)
    {
        $requete = $this->db->from("backoff")->select("count(*) as logged")->where("mail",$mail)->where("pwd",$pwd)->get();
        return $requete->result_array()[0];
    }

    function connect($mail,$password)
    {
        $requete = $this->db->from("backoff")->where("mail",$mail)->where("pwd",$password)->select("*")->get();
        return $requete->result_array()[0];
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

    // fonction avoir les régimes 
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