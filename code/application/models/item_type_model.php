<?php

/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 11/5/2017
 * Time: 8:08 PM
 */


class Item_Type_Model extends Base_Model
{

    private $tableViewHeaders = array('Código de Item', 'Item', 'Proyecto');

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }



    public function crud(){
        $this->grocery_crud->set_table($this->db_table_name);
        $this->grocery_crud->unset_columns($this->unset_columns_view);
        $this->grocery_crud->unset_export();
        $this->grocery_crud->unset_print();
        //Renombre columnas
        foreach ($this->change_columns_name as $key => $val)
        {
            $this->grocery_crud->display_as($key, $val);
        }

        //$this->grocery_crud->field_type('itemtype','dropdown',
        //    array('1' => 'Nuevo requeriminto', '2' => 'Bug','3' => 'Mejora'));
        $output = $this->grocery_crud->render();
        return $output;
    }


    public function getAllitemType()
    {
        $sql = "SELECT * FROM `itemtype`";
        $query = $this->db->query($sql);
        return $query;
    }








}