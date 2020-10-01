<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
   
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_user');
	}

	public function index() {
    //   $this->load->view('index/v_header_index');
	    $this->load->view('index/v_login');
	    // $this->load->view('index/v_footer_index');
	}

	public function cek_login() {
		$data = array('tm_login_username' => $this->input->post('tm_login_username', TRUE),
						'tm_login_password' => $this->input->post('tm_login_password', TRUE)
			);
		
		$hasil = $this->Model_user->cek_user($data);
		if ($hasil != null) {
			if($this->input->post('tm_login_password', TRUE) == $hasil['tm_login_password']) {
			$data = [
				'logged_in'      => 'Sudah Loggin',
				'tm_login_id'   => $hasil['tm_login_id'],
				'tm_login_username' => $hasil['tm_login_username'],
				'tm_user_access_id' => $hasil['tm_user_access_id']
			  ];
				$this->session->set_userdata($data);
			if ($hasil['tm_user_access_id'] == 1) {
				redirect('pegawai/c_pegawai');
			}
			elseif ($hasil['tm_user_access_id'] == 2) {
				redirect('mahasiswa/c_mahasiswa');
			}		
		}
	}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>