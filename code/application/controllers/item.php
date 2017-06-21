<?php

require_once APPPATH . 'controllers/base.php';


class Item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->base = new Base();
        $this->load->model('item_model', 'Item_Model');

        $this->load->model('user_model', 'User_Model');
    }

    public function render_view($pOutput = null)
    {
        $this->load->view('item/item_crud_view.php',$pOutput);
    }

    public function show_crud_view()
    {
        $this->Item_Model->set_db_table_name('item');

            $this->Item_Model->set_change_columns_name(array(
                'itemcode'=>'Código',
                'itemtype'=>'Tipo',
                'description'=>'Descripción',
                'projectcode'=>'Código de Proyecto',
                'prioriry'=>'Prioridad'
            ));

        $output = $this->Item_Model->crud(); 

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
        //Dropdown Item
        $itemLastState = $this->Item_Model->getLastStateByItem($pItemCode);
        $stateList = $this->Item_Model->getAllItemState();

        //Dropdown Usuario
        $userList = $this->User_Model->getAllUser();

       if (!empty($itemLastState))
       {
           $data = array(
               'itemCode'  => $pItemCode,
               'itemStateDescription' => $itemLastState->description,
               'itemSteteCode' => $itemLastState->itemstate,
               'stateList' => $stateList,
               'userList' => $userList
           );
       }else{
           $data = array(
               'itemCode'  => $pItemCode,
               'itemStateDescription' => "Sin estado",
               'itemSteteCode' => null,
               'userList' => $userList
           );
       }

        $this->base->loadView('item/admin_view', $data);
    }


    public function historyItem($pItemCode)
    {

        $data = array();


        //Dropdown Item
        /*$itemLastState = $this->Item_Model->getLastStateByItem($pItemCode);
        $stateList = $this->Item_Model->getAllItemState();

        //Dropdown Usuario
        $userList = $this->User_Model->getAllUser();

        if (!empty($itemLastState))
        {
            $data = array(
                'itemCode'  => $pItemCode,
                'itemStateDescription' => $itemLastState->description,
                'itemSteteCode' => $itemLastState->itemstate,
                'stateList' => $stateList,
                'userList' => $userList
            );
        }else{
            $data = array(
                'itemCode'  => $pItemCode,
                'itemStateDescription' => "Sin estado",
                'itemSteteCode' => null,
                'userList' => $userList
            );
        }*/

        $this->base->loadView('item/item_history_view', $data);
    }


    public function historyStateItem($pItemCode)
    {
        $historyState = $this->Item_Model->getHistoryStateByItem($pItemCode);

        $data = array(
            'idHistory' => $historyState->historyid,
            'itemCode' => $pItemCode,
            'itemState' => $historyState->itemstate,
            'creationDate' =>$historyState->creationdate
        );

        $this->base->loadview();
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
