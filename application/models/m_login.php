<?php
class m_login extends CI_Model{
	//cek user
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM tm_login WHERE tm_login_username='$username' AND tm_login_password='$password' ");
		return $query;
	}

}
