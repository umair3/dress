<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wizard extends CI_Controller {

	public function db_creds()
	{
		$this->load->view('db_creds_view');
	}
	
	public function map()
	{
		$this->load->view('map_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */