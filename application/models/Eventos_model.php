<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos_model extends CI_Model {

    
     public function getEventos(){
        $this->db->where("estado_evento", "1");
        $resultados = $this->db->get("eventos");
        return $resultados->result();
    }
    
    public function save($data){
        return $this->db->insert("eventos", $data);
    }
    
    public function getEvento($ideventos){
        $this->db->where("ideventos", $ideventos);
        $resultados = $this->db->get("eventos");
        return $resultados->row();
    }
    
    public function update($ideventos, $data){
        $this->db->where("ideventos", $ideventos);
        
        return $this->db->update("eventos", $data);
        
    }
    
    
    
}
