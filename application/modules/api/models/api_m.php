<?php

class api_m extends MY_Model{
	
	public function get_region_details(){
		 $sql 	=	"CALL get_region_details()";
		 $result = R::getAll($sql);
		 $result = json_encode($result);
		 return $result;
	}
	
	public function get_district_details(){
		$sql 	=	"CALL get_district_details()";
		$result = R::getAll($sql);
		$result = json_encode($result);
		return $result;
	}
	
	public function get_lab_details(){
		$sql = "CALL get_lab_details()";
		$result = R::getAll($sql);
		$result = json_encode($result);
		return $result;		
	}
	
	public function get_partner_details(){
		$sql = "CALL get_partner_details()";
		$result = R::getAll($sql);
		$result = json_encode($result);
		return $result;		
	}
}
/* End of file api_m.php */
/* Location: ./application/modules/api/models/api_m.php */