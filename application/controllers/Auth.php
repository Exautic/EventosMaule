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
