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

    public function getNowUserlogin()
    {

    }

    public function closeSession($pUserCode)
    {

    }



}