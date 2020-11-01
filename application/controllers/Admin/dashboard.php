<?php
class dashboard extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    //validasi jika user belum login
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url();
      redirect($url);
    }
  }

  function index()
  {
    // $query = $this->db->get_where('tm_login', ['tm_login_username' => $this->session->userdata("username")])->row_array();
    // $query_pegawai_id = $query['tm_pegawai_id'];
    // $pegawai = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $this->session->userdata("username")])->row_array();
    // $data['pegawai_nama'] = $pegawai['tm_pegawai_nama'];

    $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
    $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
    $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
    // $this->load->view("Admin/dashboard", $data);
    // var_dump($this->session->userdata("username"));
    // var_dump($data['pegawai']);
    // die;

    $this->load->view('adminlte/h_admin.php', $data);
    $this->load->view("adminlte/d_admin.php");
    $this->load->view("adminlte/s_admin.php");
    $this->load->view("adminlte/f_admin.php");
  }
}
