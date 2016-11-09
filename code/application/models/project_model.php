<?php


class Project_Model extends Base_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function listProject(){
        try
        {
            $sql = "
                SELECT * FROM `project`;
            ";
            $query = $this->db->query($sql);
            return $query->result();
        }
        catch (Exception $e)
        {
            return array();
        }
    }
}