<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {
        if ($this->session->userdata("login")) {
            redirect(base_url()."dashboard");
        }else{
            $this->load->view('admin/login');
        }
    }
    
    public function register(){
         $this->load->view('admin/register');
    }

    public function registro(){
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
            $this->session->set_flashdata("registrado", "Registro completo");
            redirect(base_url()."Auth/index");
        }else{
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url()."Auth/register");
        }
    }


    public function login() {
        $user_usuario = $this->input->post("user_usuario");
        $clave_usuario = $this->input->post("clave_usuario");
        $res = $this->Usuarios_model->login($user_usuario, $clave_usuario);
        if (!$res) {
            $this->session->set_flashdata("error", "El usuario y/o contraseña son incorrectos");
            redirect(base_url());
        } else {
            $data = array(
                'idusuario' => $res->idusuario,
                'nombre_usuario' => $res->nombre_usuario,
                'apellido_usuario' => $res->apellido_usuario,
                'telefono' => $res->telefono,
                'ciudad_usuario' => $res->ciudad_usuario,
                'email_usuario' => $res->email_usuario,
                'user_usuario' => $res->user_usuario,
                'clave_usuario' => $res->clave_usuario,
                'rol_id' => $res->rol_id,
                'estado_usuario' => $res->estado_usuario,
                'login' => TRUE
            );
            $this->session->set_userdata($data);
            redirect(base_url()."dashboard");
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    

}
