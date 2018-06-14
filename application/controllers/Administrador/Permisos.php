<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

    private $permisos;
    
    public function __construct() {
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
        $this->load->model("Permisos_model");
        $this->load->model("Usuarios_model");
    }

    public function index() {
        $data = array(
            'permisos' => $this->permisos,
            'permisos' => $this->Permisos_model->getPermisos(),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/permisos/list', $data);
        $this->load->view('layouts/footer');
    }

    public function add() {
        $data = array(
            'roles_usuarios' => $this->Usuarios_model->getRoles(),
            'menus' => $this->Permisos_model->getMenus(),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/permisos/add', $data);
        $this->load->view('layouts/footer');
    }

    public function store() {
        $idmenu = $this->input->post("menus");
        $idroles_usuarios = $this->input->post("roles_usuarios");
        $read = $this->input->post("read");
        $insert = $this->input->post("insert");
        $update = $this->input->post("update");
        $delete = $this->input->post("delete");

        $data = array(
            "idmenu" => $idmenu,
            "idroles" => $idroles_usuarios,
            "read" => $read,
            "insert" => $insert,
            "update" => $update,
            "delete" => $delete,
        );

        if ($this->Permisos_model->save($data)) {
            redirect(base_url() . "Administrador/Permisos");
        } else {
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url() . "Administrador/Permisos/add");
        }
    }

    public function edit($idpermisos) {
        $data = array(
            'roles_usuarios' => $this->Usuarios_model->getRoles(),
            'menus' => $this->Permisos_model->getMenus(),
            'permisos' => $this->Permisos_model->getPermiso($idpermisos),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/permisos/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update() {
        $idpermisos = $this->input->post("idpermisos");
        $idmenu = $this->input->post("menus");
        $idroles_usuarios = $this->input->post("roles_usuarios");
        $read = $this->input->post("read");
        $insert = $this->input->post("insert");
        $update = $this->input->post("update");
        $delete = $this->input->post("delete");

        $data = array(
            "read" => $read,
            "insert" => $insert,
            "update" => $update,
            "delete" => $delete,
        );
        if ($this->Permisos_model->update($idpermisos,$data)) {
            redirect(base_url() . "Administrador/Permisos");
        } else {
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url() . "Administrador/Permisos/update/".$idpermisos);
        }
    }
    
     public function delete($idpermisos){
        $this->Permisos_model->delete($idpermisos);
        redirect(base_url()."Administrador/Permisos");
    }
}
