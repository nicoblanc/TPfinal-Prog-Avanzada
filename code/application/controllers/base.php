<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of base
 *
 * @author Mauricio Besson
 */
class Base extends CI_Controller {

    function __construct() {

    }




//fue reemplazado por la libreria table.js
//    public function generar_tabla($cabecera, $filas) {
//        $html = '';
//        $html .= '<table class="table table-bordered table-hover">';
//
//        $html .= '<thead>';
//        $html .= '<tr>';
//        foreach ($cabecera as $value) {
//            $html .= '<th>' . $value . '</th>';
//        }
//        $html .= '</tr>';
//        $html .= '</thead>';
//
//        $html .= '<tbody>';
//        foreach ($filas as $fila) {
//            $html .= '<tr>';
//            foreach ($fila as $dato) {
//                $html .= '<td>' . $dato . '</td>';
//            }
//            $html .= '</tr>';
//        }
//        $html .= '</tbody>';
//        $html .= '</table>';

//        return $html;
//    }

    public function tabla_view() {
        $this->load->view();
    }
    
    public function loadView($url = 'home/tabla_view', $data)
    {
        //var_dump('gsgagjhGASGAsdghjhsdg');

        $ci = &get_instance();
        $ci->load->view('base/head_view', $data);
        $ci->load->view($url, $data);
        $ci->load->view('base/footer_view', $data);
    }

}
