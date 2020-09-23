<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_password extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('index/v_header_index');
		$this->load->view('index/v_lupa_password');
		$this->load->view('index/v_footer_index');
	}

}
