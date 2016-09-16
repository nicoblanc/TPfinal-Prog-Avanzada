<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Verificar extends CI_Controller { 	

    function __construct() 	{ 		
        parent::__construct(); 		
        $this->load->model('verificar_model');
        $this->load->helper('form');
	}

	function index()
	{
		$data['title'] = 'Formulario de login';
		$this->load->view('verificar_view', $data);
	}

	function nueva_sesion()
    {    
        $this->form_validation->set_rules('nom', 'nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pass', 'password', 'trim|required|xss_clean');

       $this->form_validation->set_message('required', 'El %s es requerido');

        if ($this->form_validation->run() == FALSE)
        {
        $this->index();
        }
        else
        {
	       $nom = $this->input->post('nom');
	       $pass = $this->input->post('pass');
    	   //comprobamos si existen en la base de datos enviando los datos al modelo
    	   $login = $this->verificar_model->verificar($nom, $pass);
            if ($login)
            {
                 redirect(base_url().'index.php/logueado');
            }
        }
    }
}