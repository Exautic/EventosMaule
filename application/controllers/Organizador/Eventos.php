<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

    private $permisos;

    public function __construct() {
        parent::__construct();
         $this->permisos = $this->backend_lib->control();
        $this->load->model("Eventos_model");
    }

    public function index() {
        $id = "7";
        $estado = "1";
        $data = array(
            'eventos' => $this->Eventos_model->getEvento2($id, $estado),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('organizador/eventos/list', $data);
        $this->load->view('layouts/footer');
    }

    public function add() {
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('organizador/eventos/add');
        $this->load->view('layouts/footer');
    }

    public function store() {
        $nombre_evento = $this->input->post("nombre_evento");
        $ciudad_evento = $this->input->post("ciudad_evento");
        $direccion_evento = $this->input->post("direccion_evento");
        $horai_evento = $this->input->post("horai_evento");
        $horaf_evento = $this->input->post("horaf_evento");
        $fecha_evento = $this->input->post("fecha_evento");
        $descripcion_evento = $this->input->post("descripcion_evento");
        $valor_evento = $this->input->post("valor_evento");
        $categoria_id = $this->input->post("categoria_id");
        $estado_evento = $this->input->post("estado_evento");
        $publicador = $this->input->post("publicador");

        $data = array(
            "nombre_evento" => $nombre_evento,
            "ciudad_evento" => $ciudad_evento,
            "direccion_evento" => $direccion_evento,
            "horai_evento" => $horai_evento,
            "horaf_evento" => $horaf_evento,
            "fecha_evento" => $fecha_evento,
            "descripcion_evento" => $descripcion_evento,
            "valor_evento" => $valor_evento,
            "categoria_id" => $categoria_id,
            "estado_evento" => $estado_evento,
            "publicador" => $publicador,
        );

        if ($this->Eventos_model->save($data)) {
            redirect(base_url() . "Organizador/Eventos/");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url() . "Organizador/Eventos/add");
        }
    }

    public function edit($ideventos) {
        $data = array(
            'eventos' => $this->Eventos_model->getEvento($ideventos),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('organizador/eventos/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update() {
        $nombre_evento = $this->input->post("nombre_evento");
        $ciudad_evento = $this->input->post("ciudad_evento");
        $direccion_evento = $this->input->post("direccion_evento");
        $horai_evento = $this->input->post("horai_evento");
        $horaf_evento = $this->input->post("horaf_evento");
        $fecha_evento = $this->input->post("fecha_evento");
        $descripcion_evento = $this->input->post("descripcion_evento");
        $valor_evento = $this->input->post("valor_evento");
        $categoria_id = $this->input->post("categoria_id");
        $estado_evento = $this->input->post("estado_evento");
        $publicador = $this->input->post("publicador");
        $data = array(
            "nombre_evento" => $nombre_evento,
            "ciudad_evento" => $ciudad_evento,
            "direccion_evento" => $direccion_evento,
            "horai_evento" => $horai_evento,
            "horaf_evento" => $horaf_evento,
            "fecha_evento" => $fecha_evento,
            "descripcion_evento" => $descripcion_evento,
            "valor_evento" => $valor_evento,
            "categoria_id" => $categoria_id,
            "estado_evento" => $estado_evento,
            "publicador" => $publicador,
        );
        $ideventos = "7";
        if ($this->Eventos_model->update($ideventos, $data)) {
            redirect(base_url() . "Organizador/Eventos");
        } else {
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url() . "Organizador/Eventos/edit/" . $ideventos);
        }
    }

    public function view($ideventos) {
        $data = array(
            "eventos" => $this->Eventos_model->getEvento($ideventos)
        );
        $this->load->view("organizador/eventos/view", $data);
    }

    public function delete($ideventos) {
        $data = array(
            "estado_Evento" => "0",
        );
        $this->Eventos_model->update($ideventos, $data);
        echo "Organizador/Eventos";
    }

}
