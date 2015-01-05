<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doc extends CI_Controller {

	public function check_reg()
	{
		$data['posted'] = 0;
		if($_POST) {
		
			// GET Uni
			//$this->getURLFromWSDL();
			$options = array("location" => "http://localhost/projects/thesis/uni_soap_server/soapserver.php", "uri" => "http://localhost");
			try {
				$client = new SoapClient(null, $options);
				
					$xml = $client->checkRegistration(1);
					
					$xml_obj = simplexml_load_string($xml) or die("Error: Can not create object. Cannot connect to uni soap server data API. Please check your internet.");

					$xml_arr = json_decode(json_encode((array)$xml_obj),1);
					
					$data =  $xml_arr;					
					$data['posted'] = 1;
				
			} catch (SoapFault $e) {
				
				var_dump($e);
			}
		}
		
		$data['institute_options'] = $this->_get_institues_select_options();
		
		$this->load->view('check_reg_view', $data);
	}
	
	private function _get_institues_select_options() {
		 
		$address_list = $this->db->get('address_list');
		$institutes = $address_list->result();
		
		$options = '';
		
		foreach ($institutes as $institute) {
			$options.= '<option value="'.$institute->id.'">'.$institute->uni_name.'</option>';
		}
		
		return $options;
		
	}
	
	public function list_doc()
	{
		$data['institute_options'] = $this->_get_institues_select_options();
		$this->load->view('list_doc_view', $data);
	}
	
	public function valid_doc()
	{
		$data['institute_options'] = $this->_get_institues_select_options();
		
		$data['posted'] = 0;
		if($_POST) {
			$options = array("location" => "http://localhost/projects/thesis/uni_soap_server/soapserver.php", "uri" => "http://localhost");
			try {
				$client = new SoapClient(null, $options);
				
					$xml = $client->validateDegree(1);
					//header("Content-type: text/xml");
					//echo $student;	exit();	
					
					$xml_obj = simplexml_load_string($xml) or die("Error: Can not create object. Cannot connect to uni soap server data API. Please check your internet.");

					$xml_arr = json_decode(json_encode((array)$xml_obj),1);
					
					$data = $xml_arr;					
					$data['posted'] = 1;
				
			} catch (SoapFault $e) {
				
				var_dump($e);
			}
		}		
		
		$this->load->view('valid_doc_view',$data);
	}
	
	public function find_doc()
	{
		$this->load->view('find_doc_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */