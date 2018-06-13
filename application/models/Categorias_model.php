<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

    public function getCategorias(){
        $this->db->where("estado_categoria", "1");
        $resultados = $this->db->get("categoria_eventos");
        return $resultados->result();
    }
    
    public function save($data){
        return $this->db->insert("categoria_eventos", $data);
    }
    
    public function getCategoria($idcategoria_eventos){
        $this->db->where("idcategoria_eventos", $idcategoria_eventos);
        $resultados = $this->db->get("categoria_eventos");
        return $resultados->row();
    }
    
    public function update($idcategoria_eventos, $data){
        $this->db->where("idcategoria_eventos", $idcategoria_eventos);
        
        return $this->db->update("categoria_eventos", $data);
        
    }
}
