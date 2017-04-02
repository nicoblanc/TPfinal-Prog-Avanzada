<?php

require_once APPPATH . 'controllers/base.php';


class Project extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->base = new Base();
        $this->load->model('project_model', 'Project_Model');
        $this->load->model('item_model', 'Item_model');
    }

    public function render_view($pOutput = null)
    {
        $this->load->view('project/project_crud_view.php',$pOutput);
    }

    public function show_crud_view()
    {
        $this->Project_Model->set_db_table_name('project');
        $output = $this->Project_Model->crud();

        $this->load->view('base/head_view', $output);
        $this->render_view($output);
        $this->load->view('base/footer_view', $output);

    }


    public function listProjects(){
        $data = [];
        $data['projects'] = $this->Project_Model->listProjects();
        $this->base->loadView('project/tabla_view', $data);
    }

    //administracion del proyecto
    function adminPeoject($pId=""){
        //obj:
        //--conectara al modelo
        //--conectar a la vista
        if($pId != null and $pId != "")
        {
            $data = [];
            $data['project_code'] = $pId;
            $data['project_Name'] = "CODIGO DE PRUEBA";
            $data['project_client'] = "";

            //Listado de items
            $data['list_items'] = $this->Item_model->listItems();


            $this->base->loadView('project/admin_view', $data);
        }
        else
        {
            $data = [];
            $data["msj"] = "Debe seleccionar un Proyecto en la tabla.";
            $this->base->loadView('project/admin_view', $data);
        }
    }

    function getDataProject()
    {

    }

    //permite configurar
    function addItems(){
        $listItem = ['crear usuarios', 'asignacion de usuario'];


        var_dump($_POST);


        foreach ($_POST as $itemcode => $estado) {

            echo "{$itemcode} => {$estado} ";
            if ($estado == "on")
            {
                $this->Item_model->updateItem($_POST['projectcode'], str_replace("_", " ",$itemcode));
            }
        }



    }

    function asignCliente(){}//asignacion de cliente

    function editStatus(){} //Modificar el estado del proyecto

}