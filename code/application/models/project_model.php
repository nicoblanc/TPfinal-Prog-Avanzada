<?php


class Project_Model extends Base_Model
{
    private $tableViewHeaders = array('Código de Proyecto', 'ID Cliente', 'Proyecto');
    function __construct()
    {
        parent::__construct();
    }

    function listProjects(){
        try
        {
            $sql = "
                SELECT * FROM `project`;
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