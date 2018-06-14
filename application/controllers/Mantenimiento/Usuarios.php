<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

      private $permisos;
    
    public function __construct() {
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
        $this->load->model("Usuarios_model");
    }

    public function index() {
        $data = array(
            'permisos' => $this->permisos,
            'usuarios' => $this->Usuarios_model->getUsuarios(),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/usuarios/list', $data);
        $this->load->view('layouts/footer');
    }

    public function add(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/usuarios/add');
        $this->load->view('layouts/footer');
    }
    
    public function store(){
        $nombre_usuario = $this->input->post("nombre_usuario");
        $apellido_usuario = $this->input->post("apellido_usuario");
        $telefono = $this->input->post("telefono");
        $ciudad_usuario = $this->input->post("ciudad_usuario");
        $email_usuario = $this->input->post("email_usuario");
        $user_usuario = $this->input->post("user_usuario");
        $clave_usuario = $this->input->post("clave_usuario");
        $rol_id = "2";
        $estado_usuario = "1";
        $data = array(
            "nombre_usuario" => $nombre_usuario,
            "apellido_usuario" => $apellido_usuario,
            "telefono" => $telefono,
            "ciudad_usuario" => $ciudad_usuario,
            "email_usuario" => $email_usuario,
            "user_usuario" => $user_usuario,
            "clave_usuario" => $clave_usuario,
            "rol_id" => $rol_id,
            "estado_usuario" => $estado_usuario,
        );
        
        if ($this->Usuarios_model->save($data)) {
            redirect(base_url()."Mantenimiento/Usuarios/");
        }else{
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url()."Mantenimiento/Usuarios/add");
        }
    }
    
    public function edit($idusuarios){
        $data = array(
            'usuarios' => $this->Usuarios_model->getUsuario($idusuarios),   
        );  
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/usuarios/edit', $data);
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
        $rol_id = $this->input->post("rol_id");
        $estado_usuario = $this->input->post("estado_usuario");
        $idusuarios = $this->input->post("idusuarios");
        $data = array(
            "nombre_usuario" => $nombre_usuario,
            "apellido_usuario" => $apellido_usuario,
            "telefono" => $telefono,
            "ciudad_usuario" => $ciudad_usuario,
            "email_usuario" => $email_usuario,
            "user_usuario" => $user_usuario,
            "clave_usuario" => $clave_usuario,
            "rol_id" => $rol_id,
            "estado_usuario" => $estado_usuario,
            "idusuarios" => $idusuarios
        );
        if ($this->Usuarios_model->update($idusuarios, $data)) {
            redirect(base_url()."Mantenimiento/Usuarios");
        }else{
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url()."Mantenimiento/Usuarios/edit/".$idusuarios);
        }
    }
    
    public function view($idusuarios){
        $data = array(
            "usuarios" => $this->Usuarios_model->getUsuario($idusuarios)
        );
        $this->load->view("admin/usuarios/view", $data);
    }
    
    public function delete($idusuarios){
        $data = array(
            "estado_usuario" => "0",
        );
        $this->Usuarios_model->update($idusuarios, $data);
        echo "Mantenimiento/Usuarios";
    }
}
