<?php


class Item_Model extends Base_Model
{
    private $tableViewHeaders = array('Código de Item', 'Item', 'Proyecto');

    function __construct()
    {
        parent::__construct();
    }

    function listItems(){
        try
        {
            $sql = "
                SELECT * FROM `item`;
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
}
