<?php
class Teacher extends CI_Controller{
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
    $this->load->view('content/v_teacher');
  }

}
