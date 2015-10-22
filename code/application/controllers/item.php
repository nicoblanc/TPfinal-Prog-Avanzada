<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of item
 *
 * @author Mauricio
 */
class Item extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function alta_item() {
        $this->load->view('base/head_view', $data);
        $this->load->view('item/formulario_view', $data);
        $this->load->view('base/footer_view', $data);
    }

}
