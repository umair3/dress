<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wizard extends CI_Controller {

	public function db_creds()
	{
		$data = array();
		
		$this->load->helper('file');
		
		if ($_POST) {
			
			$db_creds = array (
				'host'		=>	$this->input->post('host'),
				'port'		=>	$this->input->post('port'),
				'user'		=>	$this->input->post('user'),
				'password'	=>	$this->input->post('password'), // to be encrypted in future for security
				'database'	=>	$this->input->post('database')
			);
			
			$db_creds_json = json_encode($db_creds);
			
			write_file('ws_properties/database.properties', $db_creds_json);
			
			$data['message'] = 'Database credentials saved successfully.';
		}
		
		$data['db_creds'] = $this->_load_database_properties();
		
		$this->load->view('db_creds_view', $data);
	}
	
	private function _load_database_properties () {
		return json_decode(read_file('ws_properties/database.properties'));
	}
	
	private function _load_ws_database() {
		
		$db_creds = $this->_load_database_properties();
		
		/*$dsn = 'dbdriver://username:password@hostname/database';
		$this->load->database($dsn);*/
		
		$this->load->database();
		$this->db->hostname	= $db_creds->host.':'.$db_creds->port;
		$this->db->username = $db_creds->user;
		$this->db->password = $db_creds->password;
		$this->db->database = $db_creds->database;
	}
	
	public function map()
	{
		$this->output->enable_profiler(TRUE);
		
		$this->_load_ws_database();
		
		$tables = $this->db->list_tables();
		
		$data['tables_select_options'] = '';
		
		$data['column_select_options'] = array(
		
		);
		
		foreach ($tables as $table) {
			
			$data['tables_select_options'].= '<option>'.$table.'</option>';
			$this->_load_ws_database();
			$fields = $this->db->list_fields($table);
			
			$data['column_select_options'][$table] = '';
			
			foreach ($fields as $field) {
			   $data['column_select_options'][$table].= '<option>'.$field.'</option>';
			} 
		   
		}
		
		
		
		$this->load->view('map_view', $data);
	}
	
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */