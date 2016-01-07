
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario_model
 *
 * @author Mauricio
 */
class Usuario_Model extends CI_Model {

    private $tableDBName = 'user';
    private $tableViewHeaders = array('ID', 'Usuario', 'Tipo', '', '', '', '', '', '');

    public function __construc() {
        parent::__construct();

        $this->load->database();
    }

    function get_TableDBName() {
        return $this->tableDBName;
    }

    function get_TableViewHead() {
        return $this->tableViewHead;
    }

    function set_TableDBName($tableDBName) {
        $this->tableDBName = $tableDBName;
    }

    function set_TableViewHead($tableViewHeaders) {
        $this->tableViewHead = $tableViewHeaders;
    }

    public function guardar($pUsuario) {
        $data = array(
            'username' => $pUsuario->usuario,
            'password' => md5($pUsuario->password),
            'name' => $pUsuario->nombre,
            'surname' => $pUsuario->apellido,
            'email' => $pUsuario->email,
            'phone' => $pUsuario->telefono,
            'date' => date('Y-m-d'),
            'profile' => 1//Administrador
        );
        
        $this->db->insert($this->tableDBName, $data);
    }

    public function listar() {
        //Estructura de retorno para la tablas de la vista. 
        $result = new stdClass();
        $result->header   =  $this->tableViewHeaders;//Array
        $result->body     =  array();
        
       $query = $this->db->get($this->tableDBName);

     
        foreach ($query->result() as $element) {            
            $result->body[] = array_values((array) $element);            
        }
       
       return $result;
    }

}
