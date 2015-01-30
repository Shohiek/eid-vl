<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */

class  MY_Controller  extends  MX_Controller {

	public $view_data;
	
	public $login_status = false;
	
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Africa/Nairobi');
	}

	public function head_template(){
		$this->load->view("tmpl_head_v");
	}

}


