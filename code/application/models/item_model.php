<?php


class Item_Model extends Base_Model
{
    private $tableViewHeaders = array('Código de Item', 'Item', 'Proyecto');

    function __construct()
    {
        parent::__construct();
    }

    function listItemsUnassigned(){
        try
        {
            //ver que opcion poner
            $sql = "
                SELECT * FROM `item` WHERE `projectcode`= ' ';
            ";
            $query = $this->db->query($sql);
            //return $query->result();

            /*foreach ($query->result() as $element) {
                $result->body[] = array_values((array) $element);
            }*/


            $result = new stdClass();
            $result->header   =  $this->tableViewHeaders;//Array
            $result->body     =  array();

            foreach ($query->result() as $element) {
                $result->body[] = array_values((array) $element);
            }

            return $result;

        }
        catch (Exception $e)
        {
            return array();
        }
    }

    function updateItem($pProjectCode, $pItemCode)
    {
        $sql = "
            UPDATE `item` SET `projectcode`= '$pProjectCode' WHERE `itemcode` = '$pItemCode'
            ";

        $query = $this->db->query($sql);

    }

    function itemsByProject($pProjectCode){

        $sql = "
                SELECT * FROM `item` WHERE `projectcode`= '$pProjectCode';                      
            ";

        $query = $this->db->query($sql);

        //var_dump($query);die();

        $result = new stdClass();
        $result->header   =  $this->tableViewHeaders;//Array
        $result->body     =  array();

        foreach ($query->result() as $element) {
            $result->body[] = array_values((array) $element);
        }

        return $result;

    }
}
