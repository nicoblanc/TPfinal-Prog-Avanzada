<?php


class Project_Model extends Base_Model
{
    private $tableViewHeaders = array('Código', 'Proyecto');

    function __construct()
    {
        parent::__construct();
    }

    function listProjects(){
        try
        {
            $sql = "
                SELECT `projectcode`, `description` FROM `project`;
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
        catch (Exception $e)
        {
            return array();
        }
    }

    public function crud()
    {
        $this->grocery_crud->set_table($this->db_table_name);
        $this->grocery_crud->unset_columns($this->unset_columns_view);

        $this->grocery_crud->unset_export();
        $this->grocery_crud->unset_print();
        $this->grocery_crud->add_fields('description');

        //Renombre columnas
        foreach ($this->change_columns_name as $key => $val)
            {
                $this->grocery_crud->display_as($key, $val);
            }

        $output = $this->grocery_crud->render();
        return $output;
    }
}