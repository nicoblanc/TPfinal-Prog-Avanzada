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

    function index()
    {
        $this->tabla();
    }

    function tabla()
    {
        $base = new Base();
        if (isset($this->session->all_userdata()['usercode']))
        {
            $data['tabla'] = ''; //colocar los elemetos de la tabla, objeto(ver formato en table.js )
            $base->loadView('home/tabla_view', $data);

        }else{

            $base->loadView('verificar_view', $data = array());
        }

    }


}
