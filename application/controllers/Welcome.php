<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index/v_header_index');
		$this->load->view('index/v_index');
		$this->load->view('index/v_footer_index');
	}

	public function login()
	{
		$this->load->view('index/v_login');
	}

}
