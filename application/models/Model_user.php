<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		// function getAll(){
		// 	$this->db->select('*');
		// 	$this->db->from('tm_login');
		// 	$query = $this->db->get();
		// 	return $query;
		// }

		function __construct(){
			parent::__construct();
			// $this->load->database('tellme_basdat',true);
		}

		public function cek_user($tm_login_username) {
		$username = $tm_login_username['tm_login_username'];
		$password = $tm_login_username['tm_login_password'];
		return $this->db->get_where('tm_login', [
			'tm_login_username' => $username, 
			'tm_login_password' => $password
			])->row_array();
	}

		// public function get($tm_login_username){
		// 	$this->db->where('tm_login_username', $tm_login_username);
		// 	$result = $this->db->get('tm_login')->row();

		// 	return $result;
		// }

	}

?>