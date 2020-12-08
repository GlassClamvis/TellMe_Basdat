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
    $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
    $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
    $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();

    $this->template->viewskutek("templateadm/dosenlte/d_dosen_teknisi.php",$data);
  }
}
