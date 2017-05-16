<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super extends CI_Controller {

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
		$data['main_view'] = 'super_view';
		
		$data['detail'] = $this->admin_model->GetAllUser(array('level' => '1'));
		
		
		$this->load->view('template', $data);	
	}

	public function add_petugas(){
		$data['main_view']='add_user_view';
		$this->load->view('template', $data);
	}

	public function update_petugas(){
		$data['main_view']='update_petugas_view';
		$this->load->view('template', $data);
	}




}

/* End of file super.php */
/* Location: ./application/controllers/super.php */