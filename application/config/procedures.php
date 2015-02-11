<?php

/*
|--------------------------------------------------------------------------
| PRESET EID-vl SQL LIBRARY
|--------------------------------------------------------------------------
|
| Path to the script directory.  Relative to the CI front controller.
 * @package		sql
 * @author		Oscar Gichohi 
 * @email 		shohiek@gmail.com
 * @usage 		-load config ->item("preset_sql");
 *				-returns a predefines resultset
 */


$db_procedures["drop_get_region_details"]  	=	"DROP PROCEDURE IF EXISTS `get_region_details`; ";
$db_procedures["drop_get_partner_details"]  	=	"DROP PROCEDURE IF EXISTS `get_partner_details`; ";
$db_procedures["drop_get_district_details"]  	=	"DROP PROCEDURE IF EXISTS `get_district_details`; ";
$db_procedures["drop_get_lab_details"]  	=	"DROP PROCEDURE IF EXISTS `get_lab_details`; ";

$db_procedures["get_region_details"]  		=	
					"CREATE PROCEDURE  get_region_details () 
						BEGIN 
							SELECT
								`reg`.`id`,
							    `reg`.`name`,
							    `reg_u`.`user_id`,
							    `dist`.`status` AS `district_status`,
							    `dist`.`name` AS `district_name`,
							    `dist`.`id`,
							    `fac`.`name` AS `facility_name`,
							    `fac`.`mfl_code`,
							    `fac`.`site_prefix`,
							    `fac`.`level`,
							    `fac`.`central_site_id`,
							    `fac`.`email` AS `facility_email`,
							    `fac`.`phone` AS `facility_phone`,
							    `fac`.`rollout_status`,
							    `fac`.`rollout_date`,
							    `fac`.`google_maps`,
							    `fac`.`facility_type_id`,
							    `fac_t`.`initials`,
							    `fac_t`.`description`
	
							FROM
								`region` `reg`
							LEFT JOIN 
								`region_user` `reg_u`
							ON
								`reg_u`.`region_id` = `reg`.`id`
							LEFT JOIN 
								`district` `dist`
							ON
								`dist`.`region_id` = `reg`.`id`
							LEFT JOIN 
								`facility` `fac`
							ON 
								`fac`.`district_id` = `dist`.`id`
							LEFT JOIN
								`facility_type` `fac_t`
							ON
								`fac_t`.`id` = `fac`.`facility_type_id`;
						END;
					";

$db_procedures["get_partner_details"]  		=	
					"CREATE PROCEDURE  get_partner_details () 
						BEGIN 
							SELECT 
								`par`.`id`,
								`par`.`name` AS `partner_name`,
							    `par`.`email` AS `partner_email`,
							    `par`.`phone` AS `partner_phone`,
							   	`par_reg`.`region_id`,
							    `reg`.`name` AS `region_name`,
							    `dist`.`name` AS `district_name`,
							    `dist`.`status` AS `district_status`,
							    `dist_u`.`user_id`,
							    `a_u`.`email` AS `user_email`,
							    `a_u`.`name` AS `user_name`,
							    `fac`.`name` AS `facility_name`,
							    `fac`.`mfl_code`,
							    `fac`.`site_prefix`,
							    `fac`.`level`,
							    `fac`.`central_site_id`,
							    `fac`.`email` AS `facility_email`,
							    `fac`.`phone` AS `facility_phone`,
							    `fac`.`rollout_status`,
							    `fac`.`rollout_date`,
							    `fac`.`google_maps`,
							    `fac`.`facility_type_id`,
							    `fac_t`.`initials`,
							    `fac_t`.`description`
							   
							FROM
								`partner` `par`
							LEFT JOIN 
								`partner_region` `par_reg`
							ON
								`par`.`id` = `par_reg`.`partner_id`
							LEFT JOIN
								`region` `reg`
							ON
								`reg`.`id` = `par_reg`.`region_id`
							LEFT JOIN
								`district` `dist`
							ON 
								`dist`.`region_id` = `reg`.`id`
							LEFT JOIN 
								`district_user` `dist_u`
							ON 
								`dist_u`.`district_id` = `dist`.`id`
							LEFT JOIN
								`aauth_users` `a_u`
							ON 
								`dist_u`.`user_id` = `a_u`.`id`
							LEFT JOIN
								`facility` `fac`
							ON 
								`dist`.`id` = `fac`.`district_id`
							LEFT JOIN
								`facility_type` `fac_t`
							ON
								`fac_t`.`id` = `fac`.`facility_type_id`; 
						END;
					";
					
$db_procedures["get_district_details"]  		=	
					"CREATE PROCEDURE  get_district_details () 
						BEGIN 
							SELECT 
							     `dist`.`name` AS `dis_name`,
							     `dist`.`region_id`,
							     `dist`.`status` AS `dis_status`,
							     `dist`.`id` `dis_id`,
							     `dist_u`.`user_id`,
							     `a_u`.`email` AS `user_name`,
							     `a_u`.`name` AS `user_name`,     
							     `reg`.`name` AS `region_name`,
							     `par_reg`.partner_id,
							     `par`.`phone` AS `partner_phone`,
							     `par`.`name` AS `partner_name`,
							     `par`.`email` AS `partner_email`,
                                 `fac`.`name` AS `facility_name`,
							    `fac`.`mfl_code`,
							    `fac`.`site_prefix`,
							    `fac`.`level`,
							    `fac`.`central_site_id`,
							    `fac`.`email` AS `facility_email`,
							    `fac`.`phone` AS `facility_phone`,
							    `fac`.`rollout_status`,
							    `fac`.`rollout_date`,
							    `fac`.`google_maps`,
							    `fac`.`facility_type_id`,
							    `fac_t`.`initials`,
							    `fac_t`.`description`
							
							FROM 
							     `district` `dist`
							LEFT JOIN
								 `district_user` `dist_u`
							ON
								 `dist_u`.`district_id` = `dist`.`id`
							LEFT JOIN
								 `aauth_users` `a_u`
							ON 
								 `dist_u`.`user_id` = `a_u`.`id`
							LEFT JOIN
								 `region` `reg`
							ON
								 `dist`.`region_id` = `reg`.`id`
							LEFT JOIN
								 `partner_region` `par_reg`
							ON
								 `par_reg`.`region_id` = `dist`.`region_id`
							LEFT JOIN
								 `partner` `par`
							ON 
								 `par`.`id` = `par_reg`.partner_id
                            LEFT JOIN 
                            	 `facility` `fac`
                            ON
                            	 `dist`.`id` = `fac`.`district_id`
                            LEFT JOIN 
                            	 `facility_type` `fac_t`
                            ON
                            	`fac_t`.`id` = `fac`.`facility_type_id`; 
                            
						END;
					";	
					
$db_procedures["get_lab_details"]  		=	
					"CREATE PROCEDURE  get_lab_details () 
						BEGIN 
							SELECT 
								`lab`.`id`,
							    `lab`.`name`,
							    `lab`.`email`,
							    `lab`.`phone_1`,
							    `lab`.`phone_2`,
							    `lab`.`abbott_count`,
							    `lab`.`cobas_count`,
							    `lab`.`district`,
							    `dist`.`name`,
							    `dist`.`region_id`,
							    `dist`.`status`,
							    `reg`.`name`,
							    `reg`.`id`,
							    `par_reg`.`region_id`,
							    `par`.`name`,
							    `par`.`phone`,
							    `par`.`email`,
                                `fac`.`name` AS `facility_name`,
							    `fac`.`mfl_code`,
							    `fac`.`site_prefix`,
							    `fac`.`level`,
							    `fac`.`central_site_id`,
							    `fac`.`email` AS `facility_email`,
							    `fac`.`phone` AS `facility_phone`,
							    `fac`.`rollout_status`,
							    `fac`.`rollout_date`,
							    `fac`.`google_maps`,
							    `fac`.`facility_type_id`,
							    `fac_t`.`initials`,
							    `fac_t`.`description`
							    
							FROM
								`lab` `lab`
							LEFT JOIN
								`district`  `dist`
							ON
								`dist`.`id` = `lab`.`district`
							LEFT JOIN
								`region` `reg`
							ON 
								`reg`.`id` = `dist`.`region_id`
							LEFT JOIN 
								`partner_region` `par_reg`
							ON
								`par_reg`.`region_id` = `reg`.`id`
							LEFT JOIN 
								`partner` `par`
							ON
								`par_reg`.`region_id` = `par`.`id`
                            LEFT JOIN
                            	`facility` `fac`
                            ON
                            	`fac`.`district_id` = `dist`.`id`
                            LEFT JOIN
                            	`facility_type` `fac_t`
                            ON
                            	`fac_t`.`id` = `fac`.`facility_type_id`; 
						END;
					";		

$config["procedures_sql"] = $db_procedures;
?>