<?php

require_once APPPATH . 'controllers/base.php';


class Item_Type extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->base = new Base();
        $this->load->model('item_type_model', 'Item_Type_Model');

        //session_start();
        //var_dump($_SESSION["user_login"]);die();
    }

    public function render_view($pOutput = null)
    {
        $this->load->view('item_type/item_type_crud_view.php',$pOutput);
    }

    public function show_crud_view()
    {
        $this->Item_Type_Model->set_db_table_name('itemtype');

        /* $this->Item_Model->set_change_columns_name(array(
                'itemcode'=>'Código',
                'itemtype'=>'Tipo',
                'description'=>'Descripción',
                'projectcode'=>'Código de Proyecto',
                'prioriry'=>'Prioridad'
            ));
        */

        $output = $this->Item_Type_Model->crud();

        $this->load->view('base/head_view', $output);
        $this->render_view($output);
        $this->load->view('base/footer_view', $output);
    }


    public function listItems()
    {
        $data = [];
        $data['items'] = $this->Item_Model->listItems();
        $this->base->loadView('item/tabla_view', $data);
    }


    public function adminItem($pItemCode)
    {
        $itemLastState = $this->Item_Model->getLastStateByItem($pItemCode);
        $itemState     = $this->Item_model->getAllItemState();



       if (!empty($itemLastState))
       {
           $data = array(
               'itemCode'  => $pItemCode,
               'itemStateDescription' => $itemLastState->description,
               'itemSteteCode' => $itemLastState->itemstate
           );
       }else{
           $data = array(
               'itemCode'  => $pItemCode,
               'itemStateDescription' => "Sin estado",
               'itemSteteCode' => null
           );
       }





        $this->base->loadView('item/admin_view', $data);
    }



    public function changeState($pItemCode = null)
    {
        if($pItemCode != null)
        {
            $this->Item_Model->chageState($pItemCode, $_POST['itemState']);

            //redirecciona a la vista de administracion.
            $this->adminItem($pItemCode);
        }

    }



}
