<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agreement extends CI_Controller {

	public function make()
	{
		if ($_POST) {
			$options = array("location" => "http://localhost/projects/thesis/hec_soap_client/soapserver.php", "uri" => "http://localhost");
			try {
				$client = new SoapClient(null, $options);
				$student = $client->findStudent(1);
				var_dump($student);
			} catch (SoapFault $e) {
				//echo 1;exit();
				var_dump($e);
			}	
		}
		
		$this->load->view('make_agreement_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */