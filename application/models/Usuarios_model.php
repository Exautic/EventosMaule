<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function login($user_usuario, $clave_usuario){
        $this->db->where("user_usuario", $user_usuario);
        $this->db->where("clave_usuario", $clave_usuario);
        
        $resultados = $this->db->get("usuarios");
        
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        }else{
            return false;
        }
    }
    
     public function getUsuarios(){
        $this->db->where("estado_usuario", "1");
        $resultados = $this->db->get("usuarios");
        return $resultados->result();
    }
    
    public function save($data){
        return $this->db->insert("usuarios", $data);
    }
    
    public function getUsuario($idusuarios){
        $this->db->where("idusuarios", $idusuarios);
        $resultados = $this->db->get("usuarios");
        return $resultados->row();
    }
    
    public function update($idusuarios, $data){
        $this->db->where("idusuarios", $idusuarios);
        
        return $this->db->update("usuarios", $data);
        
    }
    
    
    
}
