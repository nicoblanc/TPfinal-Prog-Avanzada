<?php


class Item_Model extends Base_Model
{
    private $tableViewHeaders = array('Código de Item', 'Item', 'Proyecto');

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
            $sql = "
                SELECT * FROM `item` WHERE `projectcode`= ' ';
            ";
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
        $sql = "
                UPDATE `item` SET `projectcode`= '$pProjectCode' WHERE `itemcode` = '$pItemCode' 
               ";

        $query = $this->db->query($sql);

    }

    public function itemsByProject($pProjectCode){

        $sql = "
                SELECT * FROM `item` WHERE `projectcode`= '$pProjectCode';                      
            ";
        $query = $this->db->query($sql);
        $result = new stdClass();
        $result->header   =  $this->tableViewHeaders;//Array
        $result->body     =  array();

        foreach ($query->result() as $element) {
            $result->body[] = array_values((array) $element);
        }
        return $result;
    }


    public function crud(){
        //var_dump($this); die();

        $this->grocery_crud->set_table($this->db_table_name);
        $this->grocery_crud->unset_columns($this->unset_columns_view);


        //Renombre columnas
        foreach ($this->change_columns_name as $key => $val)
        {
            $this->grocery_crud->display_as($key, $val);
        }

        $this->grocery_crud->field_type('itemtype','dropdown',
            array('1' => 'Nuevo requeriminto', '2' => 'Bug','3' => 'Mejora'));

        $output = $this->grocery_crud->render();
        return $output;


    }

    public function getAllitemType()
    {
        $sql = "
                SELECT * FROM `itemtype`
               ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function chageState($itemCode, $itemState)
    {
        $description = 'prueba';
        $ReponsibleUserId = '1';

        $sql = "
               INSERT INTO `itemhistory`(`creationdate`, `itemcode`, `seqstate`, `itemstate`, `description`, `responsibleuser`) 
               VALUES (DATE('2017-05-02'),$itemCode,1,$itemState,' descripcion de prueba','1');
               ";
        $query = $this->db->query($sql);
        return $query;

    }

    public function getItemsByHistoryRange($dateFrom, $dateTo)
    {

    }



}
