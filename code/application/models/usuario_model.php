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

    public function __construc() {
        parent::__construct();

        $this->load->database();
    }

    public function guardar($pUsuario) {
        $data = array(
            'user' => $pUsuario->usuario,
            'password' => md5($pUsuario->password),
            'name' => $pUsuario->nombre,
            'surname' => $pUsuario->apellido,
            'email' => $pUsuario->email,
            'phone' => $pUsuario->telefono,
            'date' => date('Y-m-d')
        );

        echo $data;

        $this->db->insert('user', $data);
    }

}
