<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('buku_model');
		$this->load->model('anggota_model');
		$this->load->model('transaksi_model');
		$this->load->model('admin_model');
	}
	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('admin/home');
		} else{
			redirect('login/masuk');
	}
		}

	public function masuk(){
		if ($this->session->userdata('logged_in')==TRUE) {
			redirect('admin');
		}
		else{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
					if($this->admin_model->cek_user() == TRUE){
						redirect('admin');
					} else {
						$data['notif'] ='Maaf, login gagal';
						$this->load->view('login_view', $data);	
					}
					
				} else {
					$data['notif'] ='Maaf, login gagal';
					$this->load->view('login_view', $data);			

				}
			} else{
				$data['notif']=validation_errors();
				$this->load->view('login_view', $data);
			}
		}
			
		}
	


	public function logout() {
		$data= array(
				'username' => '',
				'logged_in' => FALSE,
				'level'		=>''
			);
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */