<?php

/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 18/10/2016
 * Time: 9:33 PM
 */
class Client extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->model('client_model', 'Client_Model');
    }

    public function render_view($pOutput = null)
    {
        $this->load->view('client/client_crud_view.php',$pOutput);
    }

    public function show_crud_view()
    {
        $this->Client_Model->set_db_table_name('client');
        //$this->User_Model->set_unset_columns_view(['password']);
        //$this->User_Model->set_change_columns_name(['usercode'=>'Usuario']);

        $output = $this->Client_Model->crud();
        //var_dump($output);

        $this->load->view('base/head_view', $output);
        $this->render_view($output);
        //$this->load->view('base/footer_view', $output);

    }
}