<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class api extends MY_Controller {	

	function __construct() {

		parent::__construct();
		$this->load->model("api_m");	
	}

	public function index() {
		if($this->login_status){
				$this->load->view('dashboard_template');
		}
	}
	
	public function get_region_details(){
		$result = $this->api_m->get_region_details();
		print_r($result);
	}
	
	public function get_lab_details(){
		$result = $this->api_m->get_lab_details();
		print_r($result);
		
	}
	
	public function get_district_details(){
		$result = $this->api_m->get_district_details();
		print_r($result);
		
	}
	
	public function get_partner_details(){
		$result = $this->api_m->get_partner_details();
		print_r($result);

	}
}
