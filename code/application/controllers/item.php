<?php

require_once APPPATH . 'controllers/base.php';


class Item extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->base = new Base();
        $this->load->model('item_model', 'Item_Model');
    }

    public function render_view($pOutput = null)
    {
        $this->load->view('item/item_crud_view.php',$pOutput);
    }

    public function show_crud_view()
    {
        $this->Item_Model->set_db_table_name('item');
        //$this->User_Model->set_unset_columns_view(['password']);
        /*
         *$this->User_Model->set_change_columns_name(
            ['usercode'=>'Usuario']);
        */

        $output = $this->Item_Model->crud(); 

        $this->load->view('base/head_view', $output);
        $this->render_view($output);
        $this->load->view('base/footer_view', $output);

    }

    public function listItems(){
        $data = [];
        $data['items'] = $this->Item_Model->listItems();
        $this->base->loadView('item/tabla_view', $data);
    }
}
