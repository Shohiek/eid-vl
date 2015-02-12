CREATE DEFINER=`root`@`localhost` PROCEDURE `get_region_details`()
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
						END