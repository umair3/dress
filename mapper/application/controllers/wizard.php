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
				'database'	=>	$this->input->post('database'),
				'driver'	=>	$this->input->post('driver')
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
	
	private function _load_map ($map) {
		return json_decode(read_file('ws_properties/'.$map.'.properties'));
	}
	
	private function _check_map ($map) {
		if (file_exists('ws_properties/'.$map.'.properties')){
			return TRUE;
		} 
		return FALSE;
	}
	
	private function _read_map ($map) {
		return read_file('ws_properties/'.$map.'.properties');
	}
	
	private function _load_ws_database() {
		
		$db_creds = $this->_load_database_properties();
		
		//$dsn = 'dbdriver://username:password@hostname/database';
		$dsn = $db_creds->driver.'://'.$db_creds->user.':'.$db_creds->password.'@'.$db_creds->host.':'.$db_creds->port.'/'.$db_creds->database; //'mysql://root:@localhost/ferrari';
		$this->load->database($dsn);
		
		/*$this->load->database();
		$this->db->dbdriver = 'mysql'; 
		$this->db->hostname	= $db_creds->host.':'.$db_creds->port;
		$this->db->username = $db_creds->user;
		$this->db->password = $db_creds->password;
		$this->db->database = $db_creds->database;
		//$db_creds->driver;*/
	}
	
	public function map()
	{
		//$this->output->enable_profiler(TRUE);
		
		$this->_load_ws_database();
		
		$tables = $this->db->list_tables();
		
		$data['tables_select_options'] = '';
		
		$data['column_select_options'] = array(
		
		);
		
		$data['tables_array'] = array();
		
		foreach ($tables as $table) {
			
			$data['tables_select_options'].= '<option>'.$table.'</option>';
			$this->_load_ws_database();
			$fields = $this->db->list_fields($table);
			
			$data['column_select_options'][$table] = '';
			$data['tables_array'][$table] = array();
			
			foreach ($fields as $field) {
			   $data['column_select_options'][$table].= '<option>'.$field.'</option>';
			   $data['tables_array'][$table][] = $field;
			}
			
		}
		
		$data['degree_tags'] 		= array ('level','examSystem','title','serialNo','regNo','rollNo','date','firstName','lastName','institute');
		$data['registration_tags'] 	= array ('serialNo','regNo','date','firstName','lastName','institute');
		
		if (isset($_POST['degree'])) {
		
			$degree_map_tags = array (
				'docType'		=>	'DEGREE',
				'level'			=>	$this->input->post('degree_table_level').'.'.$this->input->post('degree_table_level_field'),
				'examSystem'	=>	$this->input->post('degree_table_examSystem').'.'.$this->input->post('degree_table_examSystem_field'),
				'title'			=>	$this->input->post('degree_table_title').'.'.$this->input->post('degree_table_title_field'), 
				'serialNo'		=>	$this->input->post('degree_table_serialNo').'.'.$this->input->post('degree_table_serialNo_field'),
				'regNo'			=>	$this->input->post('degree_table_regNo').'.'.$this->input->post('degree_table_regNo_field'),
				'rollNo'		=>	$this->input->post('degree_table_rollNo').'.'.$this->input->post('degree_table_rollNo_field'),
				'date'			=>	$this->input->post('degree_table_date').'.'.$this->input->post('degree_table_date_field'),
				'firstName'		=>	$this->input->post('degree_table_firstName').'.'.$this->input->post('degree_table_firstName_field'),
				'lastName'		=>	$this->input->post('degree_table_lastName').'.'.$this->input->post('degree_table_lastName_field'),
				'institute'		=>	$this->input->post('degree_table_institute').'.'.$this->input->post('degree_table_institute_field')
			);
			
			$degree_map['tags'] = $degree_map_tags;
			
			$degree_join_count = $this->input->post('degree_join_count');
			
			if ($degree_join_count >= 1) {
				
				$degree_map_joins = array();
				
				for($i=1;$i <= $degree_join_count;$i++) {
					
					$degree_map_joins[] = array (
						'column'	=>	$this->input->post('degree_join_table_'.$i).'.'.$this->input->post('degree_join_table_'.$i.'_field'),
						'joinType'	=>	$this->input->post('degree_join_type_'.$i),
						'joinOn'	=>	$this->input->post('degree_joinon_table_'.$i).'.'.$this->input->post('degree_joinon_table_'.$i.'_field')
					);	
						
				}
			
				$degree_map['joins'] = $degree_map_joins;
			
			}
			
			$degree_map_json = json_encode($degree_map);
			
			write_file('ws_properties/degree.properties', $degree_map_json);
			
			$data['message'] = 'DEGREE map saved successfully.';
		}
		
		if (isset($_POST['registration'])) {
		
			$registration_map_tags = array (
				'docType'		=>	'REGISTRATION', 
				'serialNo'		=>	$this->input->post('registration_table_serialNo').'.'.$this->input->post('registration_table_serialNo_field'),
				'regNo'			=>	$this->input->post('registration_table_regNo').'.'.$this->input->post('registration_table_regNo_field'),
				'date'			=>	$this->input->post('registration_table_date').'.'.$this->input->post('registration_table_date_field'),
				'firstName'		=>	$this->input->post('registration_table_firstName').'.'.$this->input->post('registration_table_firstName_field'),
				'lastName'		=>	$this->input->post('registration_table_lastName').'.'.$this->input->post('registration_table_lastName_field'),
				'institute'		=>	$this->input->post('registration_table_institute').'.'.$this->input->post('registration_table_institute_field')
			);
			
			$registration_map['tags'] = $registration_map_tags;
			
			$registration_join_count = $this->input->post('registration_join_count');
			
			if ($registration_join_count >= 1) {
				
				$registration_map_joins = array();
				
				for($i=1;$i <= $registration_join_count;$i++) {
					
					$registration_map_joins[] = array (
						'column'	=>	$this->input->post('registration_join_table_'.$i).'.'.$this->input->post('registration_join_table_'.$i.'_field'),
						'joinType'	=>	$this->input->post('registration_join_type_'.$i),
						'joinOn'	=>	$this->input->post('registration_joinon_table_'.$i).'.'.$this->input->post('registration_joinon_table_'.$i.'_field')
					);	
						
				}
			
				$registration_map['joins'] = $registration_map_joins;
			
			}
			
			$registration_map_json = json_encode($registration_map);
			
			write_file('ws_properties/registration.properties', $registration_map_json);
			
			$data['message'] = 'REGISTRATION map saved successfully.';
		}
		
		if ($this->_check_map('degree')) {
			$data['degree_map'] = $this->_read_map('degree');
		}
		
		if ($this->_check_map('registration')) {
			$data['registration_map'] = $this->_read_map('registration');
		}
		
		$this->load->view('map_view', $data);
	}
	
	public function review_maps()
	{
		//$this->output->enable_profiler(TRUE);
		
		$this->_load_ws_database();
		
		$tables = $this->db->list_tables();
		
		$data['tables_select_options'] = '';
		
		$data['column_select_options'] = array(
		
		);
		
		$data['tables_array'] = array();
		
		foreach ($tables as $table) {
			
			$data['tables_select_options'].= '<option>'.$table.'</option>';
			$this->_load_ws_database();
			$fields = $this->db->list_fields($table);
			
			$data['column_select_options'][$table] = '';
			$data['tables_array'][$table] = array();
			
			foreach ($fields as $field) {
			   $data['column_select_options'][$table].= '<option>'.$field.'</option>';
			   $data['tables_array'][$table][] = $field;
			}
			
		}
		
		$data['degree_tags'] = array ('level','examSystem','title','serialNo','regNo','rollNo','date','firstName','lastName','institute');
		
		if ($this->_check_map('degree')) {
			$data['degree_map'] = $this->_read_map('degree');
		}
		
		if ($this->_check_map('registration')) {
			$data['registration_map'] = $this->_read_map('registration');
		}
		
		$this->load->view('review_maps_view', $data);
	}
	
	
	public function finish()
	{
		//$this->output->enable_profiler(TRUE);
		
		$this->load->view('finish_view');
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */