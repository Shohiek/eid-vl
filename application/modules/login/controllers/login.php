<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class login extends MY_Controller {	

	function __construct() {
		parent::__construct();		
	}

	public function index() {
		$this->load->view('dashboard_template');
	}
	
	public function dashboard_view(){
		$this->load->view("dashboard_v");
	}
	
	public function nav_bar(){
		$this->load->view("empty_navbar");
	}
	
	public function login_v(){
		$this->load->view('login_v');
	}
}
