<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 20/9/2016
 * Time: 9:09 PM
 */

class User_Model extends Base_Model
{
    /*private $db_table_name = 'user';
    private $db_primary_key = '';
    private $unset_columns_view = array('password');
    private $change_columns_name = [
        'date'=>'Fecha'
    ];
    */
    function __construct()
    {
        parent::__construct();

    }


    public function getUser($userCode,$password)
    {
        try
        {
            $sql = "
                SELECT * FROM `user`
                WHERE  `user`.usercode = '$userCode' AND `user`.password = '$password';
            ";
            $query = $this->db->query($sql);

            return $query->row();
        }
        catch (Exception $e)
        {
            return null;
        }

    }

    public function getAllUser()
    {
        $sql ="SELECT * FROM `user`";

        $query = $this->db->query($sql);

        return $query->result();
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

        $this->grocery_crud->change_field_type('password', 'password');

        $this->grocery_crud->field_type('profileid','dropdown', array('1' => 'Administrador'));
        $output = $this->grocery_crud->render();
        return $output;
    }

    public function getNowUserlogin()
    {

    }

    public function closeSession($pUserCode)
    {

    }



}