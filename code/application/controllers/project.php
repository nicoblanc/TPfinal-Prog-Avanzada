<?php


require_once APPPATH . 'controllers/base.php';

class Project extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->model('project_model', 'Project_Model');
    }

    public function render_view($pOutput = null)
    {
        $this->load->view('project/project_crud_view.php',$pOutput);
    }

    public function show_crud_view()
    {
        $this->Project_Model->set_db_table_name('project');
        //$this->User_Model->set_unset_columns_view(['password']);
        /*
         *$this->User_Model->set_change_columns_name(
            ['usercode'=>'Usuario']);
        */

        $output = $this->Project_Model->crud();


        $this->load->view('base/head_view', $output);
        $this->render_view($output);
        $this->load->view('base/footer_view', $output);

    }
}