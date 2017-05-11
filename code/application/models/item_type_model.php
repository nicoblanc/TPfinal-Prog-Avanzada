<?php

/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 11/5/2017
 * Time: 8:08 PM
 */


class Item_Type_Model extends Base_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

}