<?php
class m_pegawai extends CI_Model{
	//cek user
	function auth_pegawai($username,$password){
		$query=$this->db->query("SELECT * from tm_login ts JOIN tm_pegawai tk ON ts.tm_pegawai_id=tk.tm_pegawai_id WHERE ts.tm_login_username='$username' AND tm_login_password='$password' ");
		return $query;
	}

}
