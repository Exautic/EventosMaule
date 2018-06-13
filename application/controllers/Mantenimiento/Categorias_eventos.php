<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_eventos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Categorias_model");
    }

    public function index() {
        $data = array(
            'categoria_evento' => $this->Categorias_model->getCategorias(),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/categorias/list', $data);
        $this->load->view('layouts/footer');
    }
    
    public function add(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/categorias/add');
        $this->load->view('layouts/footer');
    }
    
    public function store(){
        $nombre_categoria = $this->input->post("nombre_categoria");
        $estado_categoria = $this->input->post("estado_categoria");
        $data = array(
            "nombre_categoria" => $nombre_categoria,
            "estado_categoria" => $estado_categoria,
        );
        
        if ($this->Categorias_model->save($data)) {
            redirect(base_url()."Mantenimiento/Categorias_eventos/");
        }else{
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url()."Mantenimiento/Categorias_eventos/add");
        }
    }
    
    public function edit($idcategoria_eventos){
        $data = array(
            'categoria_eventos' => $this->Categorias_model->getCategoria($idcategoria_eventos),   
        );  
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/categorias/edit', $data);
        $this->load->view('layouts/footer');
    }
    
    public function update(){
        $nombre_categoria = $this->input->post("nombre_categorias");
        $estado_categoria = $this->input->post("estado_categorias");
        $idcategoria_eventos = $this->input->post("idcategoria_eventos");
        $data = array(
            "nombre_categoria" => $nombre_categoria,
            "estado_categoria" => $estado_categoria
        );
        if ($this->Categorias_model->update($idcategoria_eventos, $data)) {
            redirect(base_url()."Mantenimiento/Categorias_eventos");
        }else{
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url()."Mantenimiento/Categorias_eventos/edit/".$idcategoria_eventos);
        }
    }
    
    public function view($idcategoria_eventos){
        $data = array(
            "categoria_eventos" => $this->Categorias_model->getCategoria($idcategoria_eventos)
        );
        $this->load->view("admin/categorias/view", $data);
    }
    
    public function delete($idcategoria_eventos){
        $data = array(
            "estado_categoria" => "0",
        );
        $this->Categorias_model->update($idcategoria_eventos, $data);
        echo "Mantenimiento/Categorias_eventos";
    }
}
