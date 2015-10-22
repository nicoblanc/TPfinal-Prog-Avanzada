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

    public function generar_tabla($cabecera, $filas) {
        $html = '';
        $html .= '<table class="table table-bordered table-hover">';

        $html .= '<thead>';
        $html .= '<tr>';
        foreach ($cabecera as $value) {
            $html .= '<th>' . $value . '</th>';
        }
        $html .= '</tr>';
        $html .= '</thead>';

        $html .= '<tbody>';
        foreach ($filas as $fila) {
            $html .= '<tr>';
            foreach ($fila as $dato) {
                $html .= '<td>' . $dato . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</tbody>';
        $html .= '</table>';

        return $html;
    }

    public function tabla_view() {
        $this->load->view();
    }

}
