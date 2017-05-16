<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_detail_buku($id_buku)
	{
		return $this->db->where('id_buku',$id_buku)
						->get('buku')
						->row();
	}
	public function insert_pinjam($data)
	{
		
		$this->db->insert('transaksi', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	

	public function get_data_pinjam() {
		return $this->db->select('transaksi.id_transaksi,transaksi.tgl_peminjaman,transaksi.tgl_pengembalian,transaksi.jumlah_pinjam,transaksi.denda,transaksi.status,buku.id_buku,buku.judul,anggota.id_anggota,anggota.nama_anggota,anggota.no_hp,anggota.alamat')
						->join('buku','buku.id_buku = transaksi.id_buku')
						->join('anggota','anggota.id_anggota = transaksi.id_anggota')
						->order_by('id_transaksi','ASC')
						->get('transaksi')
						->result();
	}
	// public function denda(){
			
	// }
	public function get_detail_transaksi($id_transaksi){
		return $this->db->where('id_transaksi',$id_transaksi)
						->get('transaksi')
						->row();

	}
	public function total_records(){
		return $this->db->from('transaksi')
						->count_all_results();
	}

	public function hapus_peminjaman($id_transaksi){
		$this->db->where('id_transaksi',$id_transaksi)
				 ->delete('transaksi');

		if ($this->db->affected_rows() >0) {	
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	public function status($id_transaksi){
	$query =('update transaksi SET status ="Sudah Mengembalikan" where id_transaksi='.$id_transaksi);
	$this->db->query($query);

	// if ($this->db->affected_rows() >0) {	
	// 		return TRUE;
	// 	}
	// 	else {
	// 		return FALSE;
	// 	}
	}

	public function kurang_sisa($jumlah_pinjam,$id_buku_kurang){
		$query = 'update buku SET sisa_buku = sisa_buku - '.$jumlah_pinjam.' where id_buku='.$id_buku_kurang;
		$this->db->query($query);
		
		if ($this->db->affected_rows() >0) {	
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function get_detail_tambah(){
		
	}
	public function tambah_sisa($id_tambah, $jumlah_tambah){
		$query = ('update buku SET sisa_buku = sisa_buku + '.$jumlah_tambah.' where id_buku='.$id_tambah);
		$this->db->query($query);
		
		if ($this->db->affected_rows() >0) {	
			return TRUE;
		}
		else {
			return FALSE;
		}
	} 

	// public function denda($id_transaksi, $total_denda)
	// {
		

	// }
	public function deteksi_denda($id_transaksi, $tgl_peminjaman, $tgl_pengembalian, $total_denda){

		$total_denda = null;
		$hari = null;
		if ($tgl_pengembalian > $tgl_peminjaman ) {
			$hari = $tgl_pengembalian - $tgl_peminjaman;
			$total_denda = $hari * 2000;

			$query = ('update transaksi SET denda = denda + '.$total_denda.' where id_transaksi = '.$id_transaksi.'');
			$this->db->query($query);
		}
		else {
			$query = ('update transaksi SET denda = denda where id_transaksi = '.$id_transaksi.'');
			$this->db->query($query);

		}
		if (affected_rows()>0) {
			return TRUE;
		}
		else{
			return FALSE;
		}
	}


}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */