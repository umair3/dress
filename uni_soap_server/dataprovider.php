<?php

// fetches data from university database and provide to soap server

class DataProvider
{
	
	
	private function _read_map ($map) {
		return read_file('../hec_soap_client/ws_properties/'.$map.'.properties');
	}
	
	private function _load_ws_database() {
		
		$db_creds = $this->_load_database_properties();
		
		$this->load->database();
		$this->db->hostname	= $db_creds->host.':'.$db_creds->port;
		$this->db->username = $db_creds->user;
		$this->db->password = $db_creds->password;
		$this->db->database = $db_creds->database;
	}
	
	private function _load_database_properties () {
		return json_decode(read_file('../hec_soap_client/ws_properties/database.properties'));
	}
	
	public function validateDegree($doc_type) {
		
		//$this->_read_map('degree');
			
		// Get Degree Map array
		/*$map = $this->mapper_model->getMap('DEGREE');
		
		$map['documentType'];
		
		// Tags linked to same table should be in one query.
		foreach ($map as $tag) {
			//get table name
			
		}*/
		
		/*
		[
		table: t1,
		column: c1
		]
		*/
		
		$doc.= '<xml>';
		$doc.= '<documentType>DEGREE</documentType>';
		$doc.= '<level>16-YEARS</level>';
		$doc.= '<examSystem>SEMESTER</examSystem>';
		$doc.= '<title>Master of Science in Information Technology</title>';
		$doc.= '<serialNo>012466</serialNo>';
		$doc.= '<registrationNo>0810256230</registrationNo>';
		$doc.= '<rollNo>0810256230</rollNo>';
		$doc.= '<date>2004-12-12</date>';
		$doc.= '<firstName>Umair</firstName>';
		$doc.= '<lastName>Anwar</lastName>';
		$doc.= '<institute>UOG</institute>';
		$doc.= '<image>https://drive.google.com/file/d/0BxY0BVINEp7NMDVlOGVjY2ItODJjNi00ZGE5LTlmOTQtNTc5OGU5MDkyM2Uz/edit?usp=sharing</image>';
		$doc.= '</xml>';
		
		return $doc;
	}
	
	public function checkRegistration($search_string, $search_criteria, $institute){
		
		//$this->_read_map('degree');
		
		//$registration_card_details_array = array();
		$doc.= '<xml>';
		$doc.= '<documentType>REG</documentType>';
		$doc.= '<serialNo>17654</serialNo>';
		$doc.= '<registrationNo>2011-NUST-MS PhD-IT-049</registrationNo>';
		$doc.= '<date>2004-12-12</date>';
		$doc.= '<firstName>Umair</firstName>';
		$doc.= '<lastName>Anwar</lastName>';
		$doc.= '<institute>NUST</institute>';
		$doc.= '<image></image>';
		$doc.= '</xml>';
		//return array ("test1","test2");
		
		return $doc;
	}

}

?>
