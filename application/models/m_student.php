<?php
class m_student extends CI_Model{
	//cek user
	function auth_mahasiswa($username,$password){
		$query=$this->db->query("SELECT * from tm_login ts JOIN tm_mahasiswa tk ON ts.tm_mahasiswa_id=tk.tm_mahasiswa_id WHERE ts.tm_login_username='$username' AND tm_login_password='$password' ");
		return $query;
	}

}
