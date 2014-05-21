<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doc extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function check_reg()
	{
		$this->load->view('check_reg_view');
	}
	
	public function list_doc()
	{
		$this->load->view('list_doc_view');
	}
	
	public function valid_doc()
	{
		$data['posted'] = 0;
		if($_POST) {
			$options = array("location" => "http://localhost/thesis_present/uni_soap_server/soapserver.php", "uri" => "http://localhost");
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