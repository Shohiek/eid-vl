<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class filters extends MY_Controller {	

	function __construct() {

		parent::__construct();

		
		header('Content-Type: application/json; charset=utf-8');
		$this->load->model('api/api_m');
	}

	public function index(){
		echo '
		{
			"entities" 	: 	';
			$this->entities(); echo ',
			"programs" 	: 	';
			$this->programs(); echo ',
			"dates" 	: 	';
			$this->dates(); echo '
		}
		';
	}

	public function entities(){
		$entity_values = [];
		$entities = $this->api_m->get_entities();

		// echo "<pre>";
		$i = 0;
		foreach ($entities as $key => $value) {
			if($value['grp_type'] == 'Regions'){
				$entity_values[$i]['name'] = $value['name'];
				$entity_values[$i]['email'] = null;
				$entity_values[$i]['phone'] = null;
				$entity_values[$i]['type'] = $value['grp_type']; 
				$entity_values[$i]['filter_type'] = $value['filter_type'];
				$entity_values[$i]['filter_id'] = $value['filter_id'];
			}else if($value['grp_type'] == 'Districts'){
				$entity_values[$i]['name'] = $value['dis_name'];
				$entity_values[$i]['email'] = null;
				$entity_values[$i]['phone'] = null;
				$entity_values[$i]['type'] = $value['grp_type'];	
				$entity_values[$i]['filter_type'] = $value['filter_type'];
				$entity_values[$i]['filter_id'] = $value['filter_id'];
			}else if($value['grp_type'] == 'Implementing Partners'){
				$entity_values[$i]['name'] = $value['partner_name'];
				$entity_values[$i]['email'] = null;
				$entity_values[$i]['phone'] = null;
				$entity_values[$i]['type'] = $value['grp_type'];
				$entity_values[$i]['filter_type'] = $value['filter_type'];
				$entity_values[$i]['filter_id'] = $value['filter_id'];
			}else if($value['grp_type'] == 'HPV Labs'){
				$entity_values[$i]['name'] = $value['lab_name'];
				$entity_values[$i]['email'] = $value['lab_email'];
				$entity_values[$i]['phone'] = null;
				$entity_values[$i]['type'] = $value['grp_type'];
				$entity_values[$i]['filter_type'] = $value['filter_type'];
				$entity_values[$i]['filter_id'] = $value['filter_id'];
			}else if($value['grp_type'] == 'Facilities'){
				$entity_values[$i]['name'] = $value['facility_name'];
				$entity_values[$i]['email'] = $value['facility_email'];
				$entity_values[$i]['phone'] = $value['facility_phone'];
				$entity_values[$i]['type'] = $value['grp_type'];
				$entity_values[$i]['filter_type'] = $value['filter_type'];
				$entity_values[$i]['filter_id'] = $value['filter_id'];
			}
			$i++;
		}
		echo json_encode($entity_values);
	
		return $entity_values;
	}	

	public function programs(){
		$programs = array(
			array('name'=>'Viral Load','initials'=>'VL'),
			array('name'=>'Early Infant Diagnosis','initials'=>'EID')
			);

		echo json_encode($programs,JSON_PRETTY_PRINT);

		return $programs;
	}

	public function dates(){
		$dates = array('start'=> date("Y-m-d", strtotime('first day of this year')),'end'=>date("Y-m-d"));

		echo json_encode($dates,JSON_PRETTY_PRINT);

		return $dates;
	}
}