<?php
class m_student extends CI_Model{
	//cek user
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

}
