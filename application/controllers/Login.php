<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->model('m_student');
	}

	public function index()
	{
		$this->template->login('v_login');
	}

	function auth()
	{
		$username = htmlspecialchars($this->input->post('tm_login_username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('tm_login_password', TRUE), ENT_QUOTES);

		$cek_pegawai = $this->m_pegawai->auth_pegawai($username, $password);
		$cek_mahasiswa = $this->m_student->auth_mahasiswa($username, $password);

		if ($cek_pegawai->num_rows() > 0) { //jika login sebagai mahasiswa
			$data = $cek_pegawai->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['tm_staff_id'] == '1') {
				$this->session->set_userdata('id', $data['tm_login_id']);
				$this->session->set_userdata('username', $data['tm_login_username']);
				$this->session->set_userdata('user_id', $data['tm_user_access_id']);
				redirect('Admin/dashboard');
			} elseif ($data['tm_staff_id'] == '2') {
				$this->session->set_userdata('id', $data['tm_login_id']);
				$this->session->set_userdata('username', $data['tm_login_username']);
				$this->session->set_userdata('user_id', $data['tm_user_access_id']);
				redirect('Teknisi/dashboard');
			} else {
				$this->session->set_userdata('id', $data['tm_login_id']);
				$this->session->set_userdata('username', $data['tm_login_username']);
				$this->session->set_userdata('user_id', $data['tm_user_access_id']);
				redirect('Dosen/dashboard');
			}
		} elseif ($cek_mahasiswa->num_rows() > 0) {
			$data = $cek_mahasiswa->row_array();
			$this->session->set_userdata('masuk', TRUE);
			$this->session->set_userdata('id', $data['tm_login_id']);
			$this->session->set_userdata('username', $data['tm_login_username']);
			$this->session->set_userdata('user_id', $data['tm_user_access_id']);
			$this->session->set_userdata('id_mahasiswa', $data['tm_mahasiswa_id']);
			$this->session->set_userdata('nim_mahasiswa', $data['tm_mahasiswa_nim']);
			$this->session->set_userdata('nama_mahasiswa', $data['tm_mahasiswa_nama']);
			$this->session->set_userdata('jurusan_mahasiswa', $data['tm_mahasiswa_jurusan']);
			$this->session->set_userdata('prodi_mahasiswa', $data['tm_mahasiswa_prodi']);
			$this->session->set_userdata('semester_mahasiswa', $data['tm_mahasiswa_semester']);
			$this->session->set_userdata('tgl_mahasiswa', $data['tm_mahasiswa_tanggal_lahir']);
			$this->session->set_userdata('email_mahasiswa', $data['tm_mahasiswa_email']);
			$this->session->set_userdata('point_mahasiswa', $data['tm_mahasiswa_point']);
			redirect('Mahasiswa/Student');
		} else {  // jika username dan password tidak ditemukan atau salah
			$url = base_url('login');
			echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
			redirect($url);
		}
	}

<<<<<<< Updated upstream
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('Login');
        redirect($url);
    }
=======
	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('');
		redirect($url);
	}
>>>>>>> Stashed changes
}


	// 		$data=$cek_login->row_array();
	// if($cek_login->num_rows() > 0){ //jika login sebagai mahasiswa
	//   	$this->session->set_userdata('masuk',TRUE);
	// 		if($data['tm_user_access_id']=='1'){
	//     	$this->session->set_userdata('id',$data['tm_login_id']);
	// 			$this->session->set_userdata('username',$data['tm_login_username']);
	// 			$this->session->set_userdata('user_id',$data['tm_user_access_id']);
	//     	redirect('teacher');
	//
	// 		}else{
	//     	$this->session->set_userdata('id',$data['tm_login_id']);
	// 			$this->session->set_userdata('username',$data['tm_login_username']);
	// 			$this->session->set_userdata('user_id',$data['tm_user_access_id']);
	//     	redirect('student');
	// 		}
	//
	// }else{  // jika username dan password tidak ditemukan atau salah
	// 		$url=base_url('login');
	// 	  echo $this->session->set_flashdata('msg','Username Atau Password Salah');
	// 		redirect($url);
	// }

// function auth(){
//   echo "CAPTAIN HERE";
//       $username=htmlspecialchars($this->input->post('tm_login_username',TRUE),ENT_QUOTES);
//       $password=htmlspecialchars($this->input->post('tm_login_password',TRUE),ENT_QUOTES);
//       echo $username."-".$password;
//       $cek_login=$this->m_login->auth_mahasiswa($username,$password);
//       ECHO COUNT($cek_login);
//       if(count($cek_login)){ //jika login sebagai mahasiswa
//         echo "data mahasiswa ditemukan";
//           $data=$cek_login->row_array();
//           $this->session->set_userdata('masuk',TRUE);
//           if($data['tm_user_access_id']=='2'){
//               $this->session->set_userdata('id',$data['tm_login_id']);
//               redirect('student');
//           }else{  // jika username dan password tidak ditemukan atau salah
//
//             $url=base_url();
//             echo $this->session->set_flashdata('msg','Username Atau Password Salah');
//             redirect($url);
//           }
//
//       }
//       echo "data tidak ditemukan atau bukan mahasiswa";
//   }
