<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Model {
    
    public function getID($link){
        $this->db->like("link_menu", $link);
        $resultado = $this->db->get("menus");
        return $resultado->row();
    }
    
    public function getPermisos($idmenu, $rol_id){
        $this->db->where("idmenu", $idmenu);
        $this->db->where("idroles", $rol_id);
        
        $resultado = $this->db->get("permisos");
        
        return $resultado->row();
                
        
    }
    
    
    
}

