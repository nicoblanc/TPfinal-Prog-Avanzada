<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Mauricio Besson
 */
require_once APPPATH . 'controllers/base.php';

class home extends CI_Controller {

    function tabla() {
        $cabecera = array('id', 'Proyecto', 'Etapa');
        $filas = array(
            'fila1' => array('1', 'Facturacion', 'Analisis'),
            'fila2' => array('2', 'gestion de serie', 'Desarrollo'),
            'fila3' => array('3', 'Colegio', 'Desarrollo')
        );

        $base = new Base();
        $data['tabla'] = $base->generar_tabla($cabecera, $filas);

        $this->load->view('base/head_view', $data);
        $this->load->view('home/tabla_view', $data);
        $this->load->view('base/footer_view', $data);
    }

    //put your code here
}
