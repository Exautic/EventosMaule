<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {
        $id = "3";
        $data = array(
            'usuarios' => $this->Usuarios_model->getUsuario2($id),    
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('usuario/usuario/list', $data);
        $this->load->view('layouts/footer');
    }

    public function edit($idusuarios){
        $data = array(
            'usuarios' => $this->Usuarios_model->getUsuario($idusuarios),   
        );  
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('usuario/usuario/edit', $data);
        $this->load->view('layouts/footer');
    }
    
    public function update(){
        $nombre_usuario = $this->input->post("nombre_usuario");
        $apellido_usuario = $this->input->post("apellido_usuario");
        $telefono = $this->input->post("telefono");
        $ciudad_usuario = $this->input->post("ciudad_usuario");
        $email_usuario = $this->input->post("email_usuario");
        $user_usuario = $this->input->post("user_usuario");
        $clave_usuario = $this->input->post("clave_usuario");
        $idusuarios = $this->input->post("idusuarios");
        $data = array(
            "nombre_usuario" => $nombre_usuario,
            "apellido_usuario" => $apellido_usuario,
            "telefono" => $telefono,
            "ciudad_usuario" => $ciudad_usuario,
            "email_usuario" => $email_usuario,
            "user_usuario" => $user_usuario,
            "clave_usuario" => $clave_usuario,
            "idusuarios" => $idusuarios
        );
        if ($this->Usuarios_model->update($idusuarios, $data)) {
            redirect(base_url()."Usuario/Usuarios");
        }else{
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url()."Usuario/Usuario/edit/".$idusuarios);
        }
    }
    
    public function view($idusuarios){
        $data = array(
            "usuarios" => $this->Usuarios_model->getUsuario($idusuarios)
        );
        $this->load->view("usuario/usuario/view", $data);
    }
    
    public function delete($idusuarios){
        $data = array(
            "estado_usuario" => "0",
        );
        $this->Usuarios_model->update($idusuarios, $data);
        echo "Usuario/Usuarios";
    }
}
