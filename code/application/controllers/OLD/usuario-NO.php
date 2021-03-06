<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author Mauricio Besson
 */
require_once APPPATH . 'controllers/base.php';

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('usuario_model', 'Usuario_Model');
    }

    function alta_usuario() {
        $data = array();
        $data['accion'] = 'alta';
        $this->load->view('base/head_view', $data);
        $this->load->view('usuario/formulario_view', $data);
        $this->load->view('base/footer_view', $data);
    }

    function listar_ususario() {
        $data = array();
        $this->load->view('base/head_view', $data);
        $this->load->view('usuario/tabla_view', $data);
        $this->load->view('base/footer_view', $data);
    }

    function baja_usuario() {
        $data = array();
        $data['accion'] = 'baja';
        $this->load->view('base/head_view', $data);
        $this->load->view('usuario/formulario_view', $data);
        $this->load->view('base/footer_view', $data);
    }

    function modificar_usuario($id) {
        $data = array();
        $data['accion'] = 'modificar';

        $data['usuario'] = $this->Usuario_Model->get_by_id($id);

        $this->load->view('base/head_view', $data);
        $this->load->view('usuario/formulario_view', $data);
        $this->load->view('base/footer_view', $data);
    }

    function consulata_usuario() {

    }

    public function validar_formulario() {

    }

    public function guardar_usuario()
    {
        $data = (object) $this->input->post();

        if ($data->action == 'modificar')
        {

            $this->Usuario_Model->modificar($data);
        }
        else
            $this->Usuario_Model->guardar($data);

        $this->listar_ususario();
    }
    
    public function ajax_users_to_table_view()
    {
        echo json_encode($this->Usuario_Model->listar()); //json
    }

}
