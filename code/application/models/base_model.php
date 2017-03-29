<?php 
/**
  *  Base_model: Modelo base para la creacion de los demas modelos.      
  */ 

/**
 * 
 *
 * @author Mauricio
 */

class Base_Model extends CI_Model 
{
	private $db_table_name = '';
	private $db_primary_key = '';
    private $unset_columns_view = array();
    private $change_columns_name = array(); //array de clave => valor

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

	// Getter y Setter
	public function set_db_table_name($pTableName = '')
	{
		$this->db_table_name = $pTableName;
	} 

	public function get_db_table_name()
	{
		return $this->db_table_name;
	}

	public function set_db_primary_key($pPk = 'id')
	{
		$this->db_primary_key = $pPk;
    }

	public function get_db_primary_key()
	{
		return $this->db_primary_key;
	}

	public function set_unset_columns_view($pColumnsName = array())
    {
       $this->unset_columns_view = $pColumnsName;
    }

    public function get_unset_columns_view()
    {
        return $this->unset_columns_view;
    }

    public function set_change_columns_name($pChangeColumnName = array())
    {
        $this->change_columns_name =$pChangeColumnName;
    }

    public function get_change_columns_name()
    {
        return $this->change_columns_name;
    }

	//Metodos
	public function get_by_id($pId)
	{
		$query = $this->db->get_where($this->db_table_name, array('ID' => $pId));
        return $query->row();
	}

    public function crud()
    {
        $this->grocery_crud->set_table($this->db_table_name);
        $this->grocery_crud->unset_columns($this->unset_columns_view);
        $this->grocery_crud->display_as($this->change_columns_name);
        $this->grocery_crud->set_theme('datatables');

        $output = $this->grocery_crud->render();

       return $output;
    }
		
} 