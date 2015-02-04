<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class lab extends MY_Controller {	

	function __construct() {

		parent::__construct();		
	}

	public function index() {
		
		$this->load->view('dashboard_template');
	}

	public function lab_view(){
		$this->load->view("lab_v");
	}
}
