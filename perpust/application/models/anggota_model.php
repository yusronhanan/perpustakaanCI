<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert_anggota()
	{
		$data = array(
			'id_anggota' => NULL,
			'nama_anggota' => $this->input->post('nama_anggota'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'status' => $this->input->post('status'),
			'tgl_bergabung' => $this->input->post('tgl_bergabung')
			);

		$this->db->insert('anggota', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	public function get_data_anggota()
	{
		return $this->db->order_by('id_anggota','ASC')
				 		->get('anggota')
				 		->result();
	}

	public function get_detail_anggota($id_anggota)
	{
		return $this->db->where('id_anggota', $id_anggota)
						->get('anggota')
						->row();
	}
	public function total_records()
	{
		return $this->db->from('anggota')
						->count_all_results();
	}

	public function update_anggota($id_anggota)
	{
		$data= array(
			'nama_anggota' => $this->input->post('nama_anggota'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'status' => $this->input->post('status'),
			'tgl_bergabung' => $this->input->post('tgl_bergabung')
			);

		$this->db->where('id_anggota', $id_anggota)
				 ->update('anggota', $data);

		if($this->db->affected_rows() >0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

}

/* End of file anggota_model.php */
/* Location: ./application/models/anggota_model.php */