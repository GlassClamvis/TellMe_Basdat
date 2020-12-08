<?php
class Student extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('form_validation', 'upload');
    $this->load->model('m_student');
    $this->load->helper('url', 'form');
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->template->student('v_student');
    $this->m_student->getAll();
  }

  public function edit(){
      $where = $this->session->userdata('id_mahasiswa');
      $data['mahasiswa'] = $this->m_student->view_profile($where, 'tm_mahasiswa')->result();
      $this->load->view('content/mahasiswa/v_update_mahasiswa',$data);
      //$where = $this->session->userdata('id_mahasiswa');
      //echo $where;
  }

  public function update(){
      $mahasiswa_id = $this->input->post('mahasiswa_id');
      $mahasiswa_nim = $this->input->post('mahasiswa_nim');
      $mahasiswa_nama = $this->input->post('mahasiswa_nama');
      $mahasiswa_jurusan = $this->input->post('mahasiswa_jurusan');
      $mahasiswa_prodi = $this->input->post('mahasiswa_prodi');
      $mahasiswa_semester = $this->input->post('mahasiswa_semester');
      $mahasiswa_email = $this->input->post('mahasiswa_email');
      $mahasiswa_point = $this->input->post('mahasiswa_point');
      $mahasiswa_lahir = $this->input->post('mahasiswa_lahir');

      $data = array(
          'tm_mahasiswa_nim' => $mahasiswa_nim,
          'tm_mahasiswa_nama' => $mahasiswa_nama,
          'tm_mahasiswa_jurusan' => $mahasiswa_jurusan,
          'tm_mahasiswa_prodi' => $mahasiswa_prodi,
          'tm_mahasiswa_semester' => $mahasiswa_semester,
          'tm_mahasiswa_email' => $mahasiswa_email,
          'tm_mahasiswa_point' => $mahasiswa_point,
          'tm_mahasiswa_tanggal_lahir' => $mahasiswa_lahir
      );
      $this->session->set_userdata('id',$mahasiswa_id);
      $this->session->set_userdata('nama_mahasiswa',$mahasiswa_nama);
      $this->session->set_userdata('jurusan_mahasiswa',$mahasiswa_jurusan);
      $this->session->set_userdata('prodi_mahasiswa',$mahasiswa_prodi);
      $this->session->set_userdata('semester_mahasiswa',$mahasiswa_semester);
      $this->session->set_userdata('tgl_mahasiswa',$mahasiswa_lahir);
      $this->session->set_userdata('email_mahasiswa',$mahasiswa_email);
      $where = array(
          'tm_mahasiswa_id' => $mahasiswa_id
      );

      $this->m_student->update_data_mahasiswa($where,$data,'tm_mahasiswa');
      redirect(base_url('student/edit'));
  }

  public function ubah_password(){
    $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
    $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[6]|matches[konfirmasi_password]');
    $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|trim|min_length[6]|matches[password_baru]');

    if($this->form_validation->run() == FALSE){
      $this->load->view('content/mahasiswa/v_ubah_password_mahasiswa');
    }else{
      $password_lama = $this->input->post('password_lama');
      $password_baru = $this->input->post('password_baru');
      $cek_pass = $this->m_student->auth_pass();
      if ($cek_pass == False){
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
        $this->load->view('content/mahasiswa/v_ubah_password_mahasiswa');
      }else{
        if ($password_lama == $password_baru) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama!</div>');
          $this->load->view('content/mahasiswa/v_ubah_password_mahasiswa');
        }else {
        $this->m_student->save_pass();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah</div>');
        $this->load->view('content/mahasiswa/v_ubah_password_mahasiswa');
        }//end if valid_user
      }
    }
  }

  public function upload_foto(){
    $where = $this->session->userdata('id_mahasiswa');
    $data['mahasiswa'] = $this->m_student->view_profile($where, 'tm_mahasiswa')->result();
    $this->load->view('content/mahasiswa/v_photo_mahasiswa',$data);

    $config['upload_path']          = './assets/tealdark/profil/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

    $this->upload->initialize($config);

    if(!empty($_FILES['berkas']['name'])){

      if ($this->upload->do_upload('berkas')){
        $gbr = $this->upload->data();
        //Compress Foto
        $config['image_library']='gd2';
        $config['source_image']='./assets/tealdark/profil/'.$gbr['file_name'];
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
        $config['quality']= '50%';
        $config['width']= 600;
        $config['height']= 600;
        $config['new_image']= './assets/tealdark/profil/'.$gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $gambar=$gbr['file_name'];

        $data = array(
          'tm_mahasiswa_foto' => $gambar
        );
        $this->session->set_userdata('id',$mahasiswa_id);
        $where = array(
            'tm_mahasiswa_id' => $mahasiswa_id
        );
			  $error = array('error' => $this->upload->display_errors());
			  $this->load->view('content/mahasiswa/v_photo_mahasiswa', $error);
        $this->m_student->updateProfil($data,$where);
      }else{
			  $data = array('upload_data' => $this->upload->data());
			  $this->load->view('content/mahasiswa/v_photo_mahasiswa', $data);
		  }
	   }
   }


}
