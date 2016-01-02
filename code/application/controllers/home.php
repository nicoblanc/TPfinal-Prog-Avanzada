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

        $base = new Base();

        $data['tabla'] = ''; //colocar los elemetos de la tabla, objeto(ver formato en table.js )
        //Carga la vista de la tabla con el header y el footer.
        $base->loadView('home/tabla_view', $data);

    }

    //put your code here
}
