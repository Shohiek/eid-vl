<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class login extends MY_Controller {	

	function __construct() {
		parent::__construct();		
	}

	public function index() {
		$this->load->view('login_v');
	}
}
