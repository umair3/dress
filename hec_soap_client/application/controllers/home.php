<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		echo 11; exit;
		$this->load->view('home_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */