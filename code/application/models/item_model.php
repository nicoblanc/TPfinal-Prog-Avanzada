<?php


class Item_Model extends Base_Model
{
    private $tableViewHeaders = array('Código de Item', 'Item', 'Proyecto','Prioridad');

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

    public function listItemsUnassigned(){
        try
        {
            //ver que opcion poner
            $sql = "SELECT * FROM `item` WHERE `projectcode`= '0';";
            $query = $this->db->query($sql);

            $result = new stdClass();
            $result->header   =  $this->tableViewHeaders;//Array
            $result->body     =  array();

            foreach ($query->result() as $element)
            {
                $result->body[] = array_values((array) $element);
            }
            return $result;
        }
        catch (Exception $e)
        {
            return array();
        }
    }


    public function updateItem($pProjectCode, $pItemCode)
    {
        $sql = "UPDATE `item` SET `projectcode`= '$pProjectCode' WHERE `itemcode` = '$pItemCode' ";
        $query = $this->db->query($sql);
    }


    //Todos los items de un proyecto.
    public function itemsByProject($pProjectCode)
    {

        $sql = "
                SELECT 
                    `item`.`itemcode`,
                    `item`.`description` as 'itemDescription',
                    `itemstate`.`description` 
                    
               FROM `item` 
                
               LEFT JOIN `itemhistory`ON `itemhistory`.`itemcode` = `item`.`itemcode`
                
               LEFT JOIN `itemstate`ON `itemstate`.`itemstatecode` = `itemhistory`.`itemstate`
                
              WHERE `item`.`projectcode`= '$pProjectCode' AND `itemhistory`.`isLastState` = 1";



        $query            =  $this->db->query($sql);

        $result           =  new stdClass();
        $result->header   =  $this->tableViewHeaders;//Array
        $result->body     =  array();

        foreach ($query->result() as $element)
            {
                $result->body[] = array_values((array) $element);
            }

        return $result;
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

        $this->grocery_crud->field_type('itemtype','dropdown', array(
            '1' => 'Nuevo requeriminto',
            '2' => 'Bug',
            '3' => 'Mejora'
        ));

        $this->grocery_crud->field_type('projectcode','dropdown', array('0' => 'Sin Asignar'));

        $this->grocery_crud->field_type('priority','dropdown', array(
            '0' => 'Sin Asignar',
            '1' => 'Baja',
            '2' => 'Media',
            '3' => 'Alta'
        ));


        //Callback
        $this->grocery_crud->callback_insert(array($this,'addItemTypeInHistorical'));

        $output = $this->grocery_crud->render();

        return $output;
    }


    public function  addItemTypeInHistorical($item)
    {
        $sql = "SELECT COUNT(*) AS 'code' FROM `item` ";
        $query = $this->db->query($sql);
        $itemCode = $query->row();
        $newCode = $itemCode->code + 1;

        $this->chageState($newCode, 0);

        return $this->db->insert('item',$item); //Realiza el insert posterior al callback
    }


    public function getAllitemType()
    {
        $sql = "SELECT * FROM `itemtype`";
        $query = $this->db->query($sql);
        return $query;
    }


    public function changeOldState($pItemCode)
    {
        $sql = "
               UPDATE `itemhistory` 
               SET `isLastState`= FALSE 
               WHERE `itemcode`= $pItemCode;                
               ";
        $query = $this->db->query($sql);
    }


    public function chageState($itemCode, $itemState)
    {
        $this->changeOldState($itemCode);

        $sql = "                       
               INSERT INTO `itemhistory`(`creationdate`, `itemcode`, `seqstate`, `itemstate`, `description`, `responsibleuser`,`isLastState`) 
               VALUES (NOW(),$itemCode,1,$itemState, '' ,'1',1);               
               ";
        $query = $this->db->query($sql);
    }


    public function getLastStateByItem($itemCode = '')
    {
        //Consultar en la tabla historica para devolver el ultimo estado del item.
        $sql = "
        SELECT `itemhistory`.`itemstate`, `itemstate`.`description`  FROM `itemhistory`

        JOIN `itemstate` ON  `itemhistory`.`itemstate` = `itemstate`.`itemstatecode`

        WHERE   `itemcode` = $itemCode AND `isLastState` = 1; ";

        $query = $this->db->query($sql);

        return $query->row();
    }

    public function getHistoryStateByItem($itemCode = '')
    {
        //Historial de estado de item.
        $sql = "SELECT * FROM `itemhistory`
                WHERE `itemcode` = $itemCode";

        $query = $this->db->query($sql);

        return $query->result();
    }


    public function getAllItemState()
    {
        $sql ="SELECT * FROM `itemstate`";

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function getItemsByHistoryRange($dateFrom, $dateTo)
    {

    }


}
