<?php
class dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();

    $this->load->helper('url');
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $query = $this->db->get_where('tm_login', ['tm_login_username' => $this->session->userdata("username")])->row_array();
    $query_pegawai_id = $query['tm_pegawai_id'];
    $pegawai = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $query_pegawai_id])->row_array();
    $data['pegawai_nama'] = $pegawai['tm_pegawai_nama'];
    $this->load->view("Teknisi/dashboard", $data);
  }

}
