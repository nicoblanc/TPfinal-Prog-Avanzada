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

    public function tabla_view() {
        $this->load->view();
    }
    
    public function loadView($url = 'home/tabla_view', $data)
    {
        $ci = &get_instance();
        $ci->load->view('base/head_view', $data);
        $ci->load->view($url, $data);
        $ci->load->view('base/footer_view', $data);
    }

}
