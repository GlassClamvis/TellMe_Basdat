<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Data_admin extends CI_Controller{

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('tm_login_username')=="") {
			redirect('auth');
        }
        $this->load->helper('text');
	}
	public function index() {
		$data['tm_login_username'] = $this->session->userdata('tm_login_username');
		$this->load->views('Admin/dashboard', $data);
	}


	public function logout() {
		$this->session->unset_userdata('tm_login_username');
		$this->session->unset_userdata('tm_user_access_id');
		session_destroy();
		redirect('auth');
	}
}
?>