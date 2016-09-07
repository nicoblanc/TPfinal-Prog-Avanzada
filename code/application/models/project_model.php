<?php

/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 14/2/2016
 * Time: 8:54 PM
 */
class Project_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->load->Database();
    }

    private function insert($new_project)
    {
        $sql = "
        INSERT (name, description) VALUES($new_project->name, $new_project->description)
        ";

        $query = $this->db->query($sql);

    }
}