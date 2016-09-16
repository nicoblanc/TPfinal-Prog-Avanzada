<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Verificar_model extends CI_Model { 	
	public function construct(){ 		
		parent::__construct();         
		$this->load->database();//con esto hacemos que pueda cargar nuestra base de datos con el modelo
	}

	function verificar($nom,$pass){
		
		var_dump( md5($pass));
		/*
		$this->db->where('username', $nom);
		$this->db->where('password', md5($pass));
		$query = $this->db->get('user');
		*/

       $query = $this->db->get_where('user', array('username' => $nom, 'password'=> md5($pass)));


		var_dump($query);die();

		if ($query->num_rows()==1)
		{
			echo "entro";die();
			return $query->result();

		}
		else
		{
			redirect(base_url().'index.php/verificar');
		}
	}
}