<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'controllers/base.php';

class Verificar extends CI_Controller { 	

    function __construct() 	{ 		
        parent::__construct(); 		
        $this->load->model('verificar_model');
        $this->load->helper('form');
	}

	function index()
	{
		//$data['title'] = 'Formulario de login';
		//$this->load->view('verificar_view', $data);

        $base = new Base();
        $base->loadView('verificar_view', null);
	}

	function nueva_sesion()
    {
        //var_dump('==============================NUEVA SESION==========================================');

        $this->form_validation->set_rules('nom', 'nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

        $this->form_validation->set_message('required', 'El %s es requerido');

        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
	       $nom = $this->input->post('nom');

	       $pass = $this->input->post('password');
    	   //comprobamos si existen en la base de datos enviando los datos al modelo
    	   $login = $this->verificar_model->verificar($nom, $pass);
            if ($login)
            {
                $usuario_data = array(
                    'usercode' => $nom,
                    'login' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                 redirect(base_url().'index.php/home/tabla');
            }else{
                $base = new Base();
                $data = array();
                $data['msj'] = "Usuario y/o contraseña incorrectos.";
                $base->loadView('verificar_view', $data);
            }
        }
    }

    function CloseSession()
    {
        $this->session->sess_destroy();
        $base = new Base();
        $base->loadView('verificar_view', $data = array());
    }
}