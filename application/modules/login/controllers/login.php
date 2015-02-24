<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class login extends MY_Controller {	

	function __construct() {
		parent::__construct();
		$this->load->library("Aauth");		
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
	
	public function authenticate(){
		$username = $_POST['username'];
		$password = $_POST['username'];
				
	 	if ($this->aauth->login($username, $password)){
            echo 'Logged in';
        }else{
            echo 'Invalid username password combination';
		}
	}
}
