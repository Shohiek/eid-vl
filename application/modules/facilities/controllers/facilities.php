<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class facilities extends MY_Controller {	

	function __construct() {

		parent::__construct();		
	}

	public function index() {
		
		$this->load->view('dashboard_template');
	}

	public function facilities_view(){
		$this->load->view("facilities_v");
	}
}
