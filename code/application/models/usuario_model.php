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
            'usuario' => $pUsuario->usuario,
            'password' => md5($pUsuario->password),
            'apellido' => $pUsuario->apellido,
            'nombre' => $pUsuario->nombre,
            'email' => $pUsuario->email,
            'telefono' => $pUsuario->telefono,
            'fecha_alta' => date('Y-m-d')
        );
        $this->db->insert('usuario', $data);
    }

}
