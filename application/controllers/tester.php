<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tester extends CI_Controller {
   
	public function __construct(){
		parent::__construct();

    }
    
    public function index() {
        //   $this->load->view('index/v_header_index');
        $this->load->view('Admin/dashboard');
            // $this->load->view('index/v_footer_index');
        }
}
?>