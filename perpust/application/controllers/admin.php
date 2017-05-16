<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//load model buat ambil data
	$this->load->model('buku_model');
	$this->load->model('anggota_model');
	$this->load->model('transaksi_model');
	$this->load->model('admin_model');

}
	public function index()
	{
		
			$data['main_view']='home';
			
		$this->load->view('template', $data);


			
		}
		
				
		// public function login()
	// {
	// 	// $data['main_view']='login_view';
	// 	// $this->load->view('template', $data);
	// 	$this->load->view('login_view');
	// }

	public function catalog(){
		//load pagination
		$data['logged_type']=$this->session->userdata('logged_type');
			$data['logged_name']=$this->session->userdata('logged_name');
		$data['main_view']='catalog_view';
		$data['list_buku'] = $this->buku_model->get_data_buku();
		$this->load->view('template', $data);
//jgn lupa if else nya
	}

	public function detail_buku(){
		$data['detail'] = $this->buku_model->get_detail_buku($this->uri->segment(3));
		$data['main_view']='detail_buku_view';
		$this->load->view('template', $data);
		//jgn lupa if else nya
	}

	public function update_buku(){
		$data['detail'] = $this->buku_model->get_detail_buku($this->uri->segment(3));
		$data['main_view']='update_view';
		$this->load->view('template', $data);
	}


	public function pinjam_buku()
	{
		$data['detail'] = $this->buku_model->get_detail_buku($this->uri->segment(3));
		$data['main_view']='pinjam_view';
		$this->load->view('template', $data);
	}

	public function hapus_peminjaman()
	{
		if ($this->transaksi_model->hapus_peminjaman($this->uri->segment(3))== TRUE){
			$data['notif_sukses']='Menghapus data berhasil!';
			$data['main_view']='history_view';
			$data['list_pinjam']= $this->transaksi_model->get_data_pinjam();
			$this->load->view('template', $data);	
		} 
		else {
			$data['notif_gagal']='Menghapus data gagal!';
			$data['main_view']='history_view';
			$data['list_pinjam']=$this->transaksi_model->get_data_pinjam();
			$this->load->view('template', $data);	
		}

	}

	public function pengembalian()
	{
		$id_transaksi = $this->uri->segment(3);
		$jumlah_pinjam_tambah = $this->uri->segment(4);
		$id_buku = $this->uri->segment(5);
		if ($this->transaksi_model->tambah_sisa($id_buku,$jumlah_pinjam_tambah)
			== TRUE){
			// $getidbuku = $this->transaksi_model->get_detail_buku($this->uri->segment(3));
			// $jumlah_pinjam_tambah = $data->jumlah_pinjam;
			// $id_buku_tambah = $data->id_buku_tambah;
			// $jumlah_pinjam_tambah = $this->input->post('jumlah_pinjam2');
			// $id_buku_tambah = $this->input->post('id_buku2');
			$this->transaksi_model->status($id_transaksi);
			$data['notif_sukses']='Pengembalian buku berhasil!';
			$data['main_view']='history_view';
			$data['list_pinjam']=$this->transaksi_model->get_data_pinjam();
			
			$this->load->view('template', $data);	
		} 
		else {
			$data['notif_gagal']='Pengembalian buku gagal!';
			$data['main_view']='history_view';
			$data['list_pinjam']=$this->transaksi_model->get_data_pinjam();
			$this->load->view('template', $data);	
		}
	}


	// public function cek_denda(){
	// 	if ($this->transaksi_model->deteksi_denda()== TRUE){
	// 		$data = array(
	// 			'tgl_peminjaman' == $tgl_peminjaman,
	// 			'tgl_pengembalian' == $tgl_peminjaman
	// 			);
	// 		$data['notif_sukses']='Cek denda berhasil!';
	// 		$data['main_view']='history_view';
	// 		$data['list_pinjam']=$this->transaksi_model->get_data_pinjam($tgl_peminjaman,$tgl_pengembalian);
	// 		$this->load->view('template', $data);	
	// // 	} 
	// 	else {
	// 		$data['notif_gagal']='Cek denda gagal!';
	// 		$data['main_view']='history_view';
	// 		$data['list_pinjam']=$this->transaksi_model->get_data_pinjam();
	// 		$this->load->view('template', $data);	
	// 	}
	// }

	public function history_buku(){
		$data['main_view']='history_view';
		$data['list_pinjam']=$this->transaksi_model->get_data_pinjam();
		// $data['list_pinjam']=$this->transaksi_model->deteksi_denda();
		
		// $tgl_pengembalian= strtotime($data->tgl_pengembalian);
		// $tgl_sekarang = strtotime(date('Y-m-d'));
		// $telat = $tgl_pengembalian - $tgl_sekarang;
		// $telat = floor($telat /(60 *60 * 24));
		// $telat = $telat > 0 ? $telat :0;
		// $denda = $telat * 2000;
		// $data['denda']=$denda;

		// $list 
		$this->load->view('template', $data);
	} 
	public function data_anggota()
	{
		$data['list_anggota']=$this->anggota_model->get_data_anggota();
		$data['main_view']='data_anggota_view';
		$this->load->view('template', $data);
	}
	public function detail_anggota()
	{
		$data['detail']=$this->anggota_model->get_detail_anggota($this->uri->segment(3));
		$data['main_view']='detail_anggota_view';
		$this->load->view('template', $data);
	}
	// public function data_perpust()
	// {
	// 	$data['main_view']='data_perpust_view';
	// 	$this->load->view('template', $data);

	// }

	public function add_buku()
	{
		$data['main_view']='add_buku_view';
		$this->load->view('template', $data);

	}

	public function add_anggota()
	{
		$data['main_view']='add_anggota_view';
		$this->load->view('template', $data);

	}



	//mulai proses dg model

	public function simpan_buku(){

		if ($this->input->post('submit')) {

	$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
	$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
	$this->form_validation->set_rules('tgl_terbit', 'Tanggal Terbit', 'trim|required');
	$this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
	$this->form_validation->set_rules('sisa_buku', 'Sisa Buku', 'trim|numeric');

			if ($this->form_validation->run() == TRUE) {
				
			 	$config['upload_path'] = './sampul/';
			 	$config['allowed_types'] = 'gif|jpg|png';
			 	$config['max_size']  = '2000';
			 	
			 	$this->load->library('upload', $config);
			 	$this->upload->initialize($config);
			 	if ($this->upload->do_upload('sampul')){
			 		if ($this->buku_model->insert_buku($this->upload->data())==TRUE) 
			 		{
			 		$data['notif_sukses']='Tambah buku sukses!';
			 		$data['main_view']='add_buku_view';
			 		$this->load->view('template', $data);

			 	}
			 	
			 	else{
			 		$data['notif_gagal']='Maaf, Tambah buku gagal!';
			 		$data['main_view']='add_buku_view';
			 		$this->load->view('template', $data);
			 	}
			 } else {
			 	$data['notif']=$this->upload->display_errors();
			 	$data['main_view']='add_buku_view';
			 	$this->load->view('template', $data);
			 } 
		}
		else{
			$data['notif']= validation_errors();
			$data['main_view']='add_buku_view';
			$this->load->view('template', $data);
		}
		}
	}


	public function edit_buku()
	{
		if ($this->input->post('submit')) {

	$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
	$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
	$this->form_validation->set_rules('tgl_terbit', 'Tanggal Terbit', 'trim|required');
	$this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
	$this->form_validation->set_rules('sisa_buku', 'Sisa Buku', 'trim|numeric');

			if ($this->form_validation->run() == TRUE) {
				
			 	// $config['upload_path'] = './sampul/';
			 	// $config['allowed_types'] = 'gif|jpg|png';
			 	// $config['max_size']  = '2000';
			 	
			 	// $this->load->library('upload', $config);
			 	// $this->upload->initialize($config);
			 	// if ($this->upload->do_upload('sampul')){
			 		if ($this->buku_model->update_buku($this->uri->segment(3)) ==TRUE) 
			 		{
			 		$data['notif_sukses']='Sukses! Update data buku berhasil!';
			 		$data['detail'] = $this->buku_model->get_detail_buku($this->uri->segment(3));
			 		$data['main_view']='update_view';
			 		$this->load->view('template', $data);
			 	}
			 	
			 	else{
			 		$data['notif_gagal']='Maaf, Edit data buku gagal!';
			 		$data['detail'] = $this->buku_model->get_detail_buku($this->uri->segment(3));
			 		$data['main_view']='update_view';
			 		$this->load->view('template', $data);
			 	}
			 }

			  else {
			 	$data['notif']= $this->upload->display_errors();
			 	$data['detail']=$this->buku_model->get_detail_buku($this->uri->segment(3));
				$data['main_view']='update_view';
			 	$this->load->view('template', $data);
			} 
		}
		else{
			$data['notif']= validation_errors();
			$data['detail'] = $this->buku_model->get_detail_buku($this->uri->segment(3));
			$data['main_view']='update_view';
			$this->load->view('template', $data);
			 	}
		}

		public function simpan_anggota() {

			if ($this->input->post('submit')) {

	$this->form_validation->set_rules('nama_anggota', 'Nama Anggota', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'No. HP', 'trim|numeric');
	$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
	$this->form_validation->set_rules('status', 'Status', 'trim|required');
	$this->form_validation->set_rules('tgl_bergabung', 'Tanggal Bergabung', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				
			 	// $config['upload_path'] = './sampul/';
			 	// $config['allowed_types'] = 'gif|jpg|png';
			 	// $config['max_size']  = '2000';
			 	
			 	// $this->load->library('upload', $config);
			 	// $this->upload->initialize($config);
			 	// if ($this->upload->do_upload('sampul')){
			 		if ($this->anggota_model->insert_anggota()==TRUE) 
			 		{
			 		$data['notif_sukses']='Tambah anggota sukses!';
			 		$data['main_view']='add_anggota_view';
			 		$this->load->view('template', $data);

			 	}
			 	
			 	else{
			 		$data['notif_gagal']='Maaf, Tambah buku gagal!';
			 		$data['main_view']='add_anggota_view';
			 		$this->load->view('template', $data);
			 	}
			 } else {
			  	$data['notif']=validation_errors();
			  	$data['main_view']='add_anggota_view';
			  	$this->load->view('template', $data);
			  } 
		}
		else{
			$data['main_view']='add_anggota_view';
			$this->load->view('template', $data);
		}
		}
			

		public function edit_anggota()
		{
			if ($this->input->post('submit')) {

	$this->form_validation->set_rules('nama_anggota', 'Nama Anggota', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'No. HP', 'trim|numeric');
	$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
	$this->form_validation->set_rules('status', 'Status', 'trim|required');
	$this->form_validation->set_rules('tgl_bergabung', 'Tanggal Bergabung', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				
			 	// $config['upload_path'] = './sampul/';
			 	// $config['allowed_types'] = 'gif|jpg|png';
			 	// $config['max_size']  = '2000';
			 	
			 	// $this->load->library('upload', $config);
			 	// $this->upload->initialize($config);
			 	// if ($this->upload->do_upload('sampul')){
			 		if ($this->anggota_model->update_anggota($this->uri->segment(3))==TRUE) 
			 		{
			 		$data['notif_sukses']='Update data anggota sukses!';
			 		$data['detail']=$this->anggota_model->get_detail_anggota($this->uri->segment(3));
					$data['main_view']='detail_anggota_view';
			 		$this->load->view('template', $data);
			 	}
			 	
			 	else{
			 		$data['notif_gagal']='Maaf, Update anggota gagal!';
			 		$data['detail']=$this->anggota_model->get_detail_anggota($this->uri->segment(3));
					$data['main_view']='detail_anggota_view';
			 		$this->load->view('template', $data);
			 	}
			 }

			  else {
			 	$data['notif']= validation_errors();
			 	$data['detail']=$this->anggota_model->get_detail_anggota($this->uri->segment(3));
				$data['main_view']='detail_anggota_view';
			 	$this->load->view('template', $data);
		} 
		
		}
		else{
			$data['detail']=$this->anggota_model->get_detail_anggota($this->uri->segment(3));
			$data['main_view']='detail_anggota_view';
			$this->load->view('template', $data);
		}

}


		public function simpan_pinjam($jumlah_pinjam,$id_buku_kurang)
		{
			if ($this->input->post('submit')) {
			$this->form_validation->set_rules('id_anggota', 'ID Anggota', 'trim|required');
			$this->form_validation->set_rules('id_buku', 'ID Buku', 'trim|required');
			$this->form_validation->set_rules('tgl_peminjaman', 'Tanggal Peminjaman', 'trim|required');
			$this->form_validation->set_rules('tgl_pengembalian', 'Tanggal Pengembalian', 'trim|required');
			$this->form_validation->set_rules('jumlah_pinjam', 'Jumlah Pinjam', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
			$jumlah_pinjam = $this->input->post('jumlah_pinjam');
			$id_buku_kurang =$this->input->post('id_buku');
			$data= array(

			'id_transaksi' => NULL,
			'id_anggota' => $this->input->post('id_anggota'),
			'id_buku' => $id_buku_kurang,
			'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
			'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
			'denda' => 0,
			'status'=> "Belum Mengembalikan",
			'jumlah_pinjam' => $jumlah_pinjam
			);

					
					if ($this->transaksi_model->insert_pinjam($data))
					{	
						$this->transaksi_model->kurang_sisa($jumlah_pinjam, $id_buku_kurang);
					// $query='update buku SET sisa_buku = sisa_buku-'.$jumlah_pinjam.' where id_buku='.$id_buku;
					// $this->db->query($query);
		

						//$data['notif_sukses']='Proses peminjaman berhasil!';
						redirect(base_url('index.php/admin/history_buku'));
					}
				 else {
						$data['notif_gagal']='Proses peminjaman gagal!';
						$data['detail']=$this->buku_model->get_detail_buku($this->uri->segment(3));
						$data['main_view']='pinjam_view';
						$this->load->view('template', $data);
						//redirect(base_url('index.php/admin/history_buku'));
						
				}
			
			 }

			  else {
			  	$data['notif']=validation_errors();
			  	$data['detail']=$this->buku_model->get_detail_buku($this->uri->segment(3));
			 	$data['main_view']='pinjam_view';
			 	$this->load->view('template', $data);
			} 
		}
		else{
			$data['detail'] = $this->buku_model->get_detail_buku($this->uri->segment(3));
			$data['detail']=$this->buku_model->get_detail_buku($this->uri->segment(3));
			$data['main_view']='pinjam_view';
			$this->load->view('template', $data);
			 	}
	}


}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */