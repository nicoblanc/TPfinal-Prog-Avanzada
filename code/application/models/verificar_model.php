<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Verificar_model extends CI_Model { 	
	public function construct(){ 		
		parent::__construct();         
		$this->load->database();//con esto hacemos que pueda cargar nuestra base de datos con el modelo
	}

	function verificar($nom,$pass){

       $query = $this->db->get_where('user', array('usercode' => $nom, 'password'=> $pass));

		if ($query->num_rows()==1)
		{
			var_dump($query->result());
		    return $query->result();

		}
		else
		{
			redirect(base_url().'index.php/verificar');
		}
	}
}