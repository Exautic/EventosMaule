<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_model extends CI_Model {
    
    public function getPermisos(){
        $this->db->select("p.*,m.nombre_menu as menu, r.tipo_usuario as rol");
        $this->db->from("permisos p");
        $this->db->join("roles_usuarios r", "p.idroles = r.idroles_usuarios");
        $this->db->join("menus m", "p.idmenu = m.idmenu");
        $resultados = $this->db->get();
        return $resultados->result();
    }
    public function getPermiso($idpermisos){
        $this->db->where("idpermisos", $idpermisos);
        $resultados = $this->db->get("permisos");
        return $resultados->row();
    }
    
    public function getMenus(){
        $resultados = $this->db->get("menus");
        return $resultados->result();
        
    }
    public function save($data){
        return $this->db->insert("permisos", $data);
    }
    
     public function update($idpermisos, $data){
        $this->db->where("idpermisos", $idpermisos);
        return $this->db->update("permisos", $data);  
    }
    
    public function delete($idpermisos){
        $this->db->where("idpermisos", $idpermisos);
        $this->db->delete("permisos");
        
    }
}