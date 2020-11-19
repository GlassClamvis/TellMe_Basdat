<?php
class profil extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('m_data_admin');
    //validasi jika user belum login
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url();
      redirect($url);
    }
  }

  function index()
  {
    $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
    $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
    $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
    //////////////////////////////////////////////
    $data['profilku'] = $this->m_data_admin->getAll()->row_array();
    $data['staffku'] = $this->db->get('tm_staff')->result_array();
    $this->template->views("content/pegawai/Admin/profil", $data);
  }

  public function changePP()
  {

    $path = './upload/';

    $nama_file = "file_" . time(); //nama file + fungsi time
    $config['upload_path'] = './upload/'; //Folder untuk menyimpan hasil upload
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '3072'; //maksimum besar file 3M
    $config['max_width']  = '5000'; //lebar maksimum 5000 px
    $config['max_height']  = '5000'; //tinggi maksimu 5000 px
    $config['file_name'] = $nama_file; //nama yang terupload nantinya

    $this->upload->initialize($config);

    if (!empty($_FILES['foto']['name'])) {
      if ($this->upload->do_upload('foto')) {
        $tm_pegawai_id = $this->input->post('tm_pegawai_id');
        $tm_login_id = $this->input->post('tm_login_id');
        $tm_pegawai_foto = $this->upload->data("file_name");

        $data = array(
          'tm_pegawai_foto' => $tm_pegawai_foto,
          'tm_pegawai_id' => $tm_pegawai_id
        );

        $data1 = array(
          'tm_login_id' => $tm_login_id
        );
        // var_dump($data); die;

        $where = array(
          'tm_pegawai_id' => $tm_pegawai_id
        );
        $where1 = array(
          'tm_login_id' => $tm_login_id
        );

        $this->m_data_admin->update_data($where, $data, 'tm_pegawai');
        $this->m_data_admin->update_data($where1, $data1, 'tm_login');

        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));

        redirect('Admin/profil');
      } else {
        die("gagal update");
      }
    } else {
      echo "tidak masuk";
      redirect('Admin/profil');
    }
  }

  public function editprofil()
  {
    $tm_pegawai_id = $this->input->post('tm_pegawai_id');
    $tm_login_id = $this->input->post('tm_login_id');
    $tm_login_username = $this->input->post('tm_login_username');

    $data = array(
      'tm_pegawai_id' => $tm_pegawai_id,
      'tm_pegawai_nip' => $this->input->post('tm_pegawai_nip'),
      'tm_pegawai_nama' => $this->input->post('tm_pegawai_nama'),
      'tm_pegawai_email' => $this->input->post('tm_pegawai_email'),
      'tm_pegawai_no_telp' => $this->input->post('tm_pegawai_no_telp'),
      'tm_pegawai_alamat' => $this->input->post('tm_pegawai_alamat'),
      'tm_staff_id' => $this->input->post('tm_staff_id')
    );
    $data1 = array(
      'tm_login_id' => $tm_login_id,
      'tm_login_username' => $tm_login_username
    );
    // var_dump($data); die;

    $where = array(
      'tm_pegawai_id' => $tm_pegawai_id
    );
    $where1 = array(
      'tm_login_id' => $tm_login_id
    );

    $this->m_data_admin->update_data($where, $data, 'tm_pegawai');
    $this->m_data_admin->update_data($where1, $data1, 'tm_login');
    redirect('Admin/profil');
  }
}
