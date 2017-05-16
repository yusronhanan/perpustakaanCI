<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['main_view']= 'home';

		$this->load->view('template', $data);
		}
	}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */