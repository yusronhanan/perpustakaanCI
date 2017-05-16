<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

public function __construct()
{
	parent::__construct();
	
}

	public function insert_buku($sampul)
	{
		$data = array(
		'id_buku' => NULL,
		'judul' => $this->input->post('judul'),
		'penulis' => $this->input->post('penulis'),
		'tgl_terbit' => $this->input->post('tgl_terbit'),
		'penerbit' => $this->input->post('penerbit'),
		'sisa_buku' => $this->input->post('sisa_buku'),
		'sampul' => $sampul['file_name']
			);

		$this->db->insert('buku', $data);

		if ($this->db->affected_rows() > 0) {
			 return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function get_data_buku()
	{
		return $this->db->order_by('id_buku','ASC')
						->get('buku')
						->result();
	}

	public function get_detail_buku($id_buku)
	{
		return $this->db->where('id_buku',$id_buku)
						->get('buku')
						->row();
	}
	public function get_jumlah_pinjam($jml_pinjam)
	{
		return $this->db->where('id_buku',$id_buku)
						->get('buku')
						->row();
	}
	

	

	public function total_records()
			{
				return $this->db->from('buku')
								->count_all_results();
			}

	public function update_buku($id_buku)
	{
		$data=array(
			
			'judul' => $this->input->post('judul'),
			'penulis' => $this->input->post('penulis'),
			'tgl_terbit' => $this->input->post('tgl_terbit'),
			'penerbit' => $this->input->post('penerbit'),
			'sisa_buku' => $this->input->post('sisa_buku')
			);

		$this->db->where('id_buku',$id_buku)
				 ->update('buku', $data);

		if ($this->db->affected_rows()>0) {	
			return TRUE;
		}
		else {
			return FALSE;
		}

	}

	public function delete_buku($id_buku)
	{
		$this->db->where('id_buku',$id_buku)
				->delete('buku');

			//cek apakah berhasil
				if ($this->db->affected_rows() >0) {
					return TRUE;
				}
				else{
					return FALSE;
				}

	}

	

}


/* End of file buku_model.php */
/* Location: ./application/models/buku_model.php */

?>