<?php
class m_student extends CI_Model{
	//cek user
	function getAll(){
    $this->db->select('*');
    $this->db->from('tm_mahasiswa');
    $query = $this->db->get();
    return $query;
  }

	function auth_mahasiswa($username,$password){
		$query=$this->db->query("SELECT * from tm_login ts JOIN tm_mahasiswa tk ON ts.tm_mahasiswa_id=tk.tm_mahasiswa_id WHERE ts.tm_login_username='$username' AND tm_login_password='$password' ");
		return $query;
	}

	function edit_data_mahasiswa($where,$table){
		return $this->db->get_where($table,$where);
	}

	function view_profile($id){
			$query=$this->db->query("SELECT * from tm_mahasiswa WHERE tm_mahasiswa_id='$id' ");
			return $query;
	}

	function update_data_mahasiswa($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function save_pass(){
  	$password_baru = $this->input->post('password_baru');
		$password_update = $password_baru;
  	$data = array (
   	'tm_login_password' => $password_baru
   	);
		$this->db->set('tm_login_password', $password_update);
  	$this->db->where('tm_mahasiswa_id', $this->session->userdata('id_mahasiswa'));
  	$this->db->update('tm_login', $data);
 	}

  function auth_pass(){
  	$password_lama = $this->input->post('password_lama');
		$this->db->where('tm_login_password',$password_lama);
   	$query = $this->db->get('tm_login');
    return $query->result();
  }

	function updateProfil($data,$where){
		$this->db->where($where);
    $this->db->update('tm_mahasiswa',$data);
  }
}
