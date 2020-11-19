<?php
class m_pegawai extends CI_Model
{
	//cek user
	function auth_pegawai($username, $password)
	{
		$query = $this->db->query("SELECT tm_login_id, tm_login_username, tm_pegawai_nip, tm_login_password, tm_user_access_id, tm_staff_id FROM tm_login JOIN tm_pegawai USING(tm_pegawai_id) JOIN tm_staff USING(tm_staff_id) JOIN tm_user_access USING(tm_user_access_id) WHERE tm_pegawai_nip OR tm_login_username='$username' AND tm_login_password='$password'");
		return $query;
	}
}
