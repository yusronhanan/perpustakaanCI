<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
public function cek_user(){
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	
	// $nama = $this->GetUser(['username'=>$username])->row('username');
//	$role_admin = $this->db->where('username', $username)->row()->role_admin;
	$query = $this->db->where('username', $username)->where('password', $password)->get('admin');
	if ($query->num_rows() > 0)	 {
		$data =
		array(
		'logged_name' => $username,
		'logged_in' => TRUE,
		'level' => $query->row()->level
		);
		$this->session->set_userdata( $data );
		return TRUE;
	}
	else{
		return FALSE;
	}
}

public function GetUser($where)
{
	return $this->db->where($where)
					->get('admin');
}
public function GetAllUser($where){
	return $this->db->where($where)->get('admin')->result();

}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */