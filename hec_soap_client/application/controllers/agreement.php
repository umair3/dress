<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agreement extends CI_Controller {

	public function make()
	{
		if ($_POST) {
		
			$data = array (
				'uni_webservice_url'	=>	$this->input->post('uni_webservice_url'),
				'uni_name'				=>	$this->input->post('uni_name'),
				'uni_description'		=>	$this->input->post('uni_description'),
				'uni_api_access_key'	=>	$this->input->post('uni_api_access_key')
			);
			
			$this->db->insert('address_list', $data);
			
		}
		
		$this->load->view('make_agreement_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */