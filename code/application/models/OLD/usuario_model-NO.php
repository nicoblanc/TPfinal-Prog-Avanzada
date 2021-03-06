
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
//require_once '/models/base_model.php'

class Usuario_Model extends Base_Model {

    private $tableDBName = 'user';
    private $tableViewHeaders = array('ID', 'Fecha de alta ', 'Usuario', 'md5 pass(quitar)', 'id Perfil(Usar tabla relacion)', 'Activo', 'Nombre ', 'Apellido', 'E-mail', 'telefono');

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
            'profile' => 1, //Administrador
            'status' => true//status
        );
        
        $this->db->insert($this->tableDBName, $data);
    }

    public function modificar($pUsuario)
    {
        $data = array(
            'username' => $pUsuario->usuario,
            'name' => $pUsuario->nombre,
            'surname' => $pUsuario->apellido,
            'email' => $pUsuario->email,
            'phone' => $pUsuario->telefono,
            'date' => date('Y-m-d'),
            'profile' => 1, //Administrador
            'status' => true//status
        );

        // Modificar password si esta checkeado, se actualiza el password.
        if (isset($pUsuario->change_password))
            $data['password'] = md5($pUsuario->password);

        $this->db->where('ID', $pUsuario->ID);
        $this->db->update($this->tableDBName, $data);
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

    public function get_by_id($id) {
        $query = $this->db->get_where($this->tableDBName, array('ID' => $id));
        return $query->row();
    }

}