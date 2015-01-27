<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class api extends MY_Controller {	

	function __construct() {

		parent::__construct();		
	}

	public function index() {
		if($login_status){
				echo "r";
		}
	}
}
