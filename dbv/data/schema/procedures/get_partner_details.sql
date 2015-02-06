USE delimiter $$;
CREATE PROCEDURE  get_partner_details () 
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