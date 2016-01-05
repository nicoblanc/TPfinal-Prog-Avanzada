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
    private $tableViewHead = array('ID', 'Usuario', 'Tipo');

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

    function set_TableViewHead($tableViewHead) {
        $this->tableViewHead = $tableViewHead;
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
       $query = $this->db->get($this->tableDBName);
        var_dump($query->result());
    }

}
