<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class run_procedures extends MY_Controller {

	
	function __construct() {
		parent::__construct();
	}

	
	public function update_db_procedures(){
		// echo "works";
		// die;
    	$this->config->load('procedures');

		$procedures = $this->config->item("procedures");
		echo "<pre>";
		echo "Response: <br/>";
		print_r($procedures);
		echo "</pre>";
		die;
		
		foreach ($procedures as $key => $sql) {
			$this->db->query($sql);
			echo "Created procedure $key <br/>";
		}
		echo "<br/>ALL Procedures Updated";
     }
}

?>
