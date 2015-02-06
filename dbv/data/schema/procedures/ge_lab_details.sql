USE delimiter $$;
CREATE PROCEDURE  get_lab_details () 
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