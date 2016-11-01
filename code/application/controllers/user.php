<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 20/9/2016
 * Time: 9:53 PM
 */
require_once APPPATH . 'controllers/base.php';

class User extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->model('user_model', 'User_Model');
    }

    public function render_view($pOutput = null)
    {
        $this->load->view('user/user_crud_view.php',$pOutput);
    }

    public function show_crud_view()
    {
        $this->User_Model->set_db_table_name('user');
        $this->User_Model->set_unset_columns_view(['password']);
        $this->User_Model->set_change_columns_name(
            ['usercode'=>'Usuario']);

        $output = $this->User_Model->crud();


        $this->load->view('base/head_view', $output);
        $this->render_view($output);
        //$this->load->view('base/footer_view', $output);

    }
}