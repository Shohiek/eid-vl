DROP PROCEDURE IF EXISTS `get_district_details`;

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_district_details`()
BEGIN 
				SELECT 
					`dist`.`id`,
				    `dist`.`name`,

				    `dist`.`id` AS `dis_id`,
				    `dist`.`name` AS `dis_name`,
				    `dist`.`region_id`,
				    `reg`.`name`,
				    `dist`.`status` AS `dis_status`,
				    `dist`.`id` `dis_id`,
				    `par_reg`.`partner_id`,
				    `par`.`phone` AS `partner_phone`,
				    `par`.`name` AS `partner_name`,
				    `par`.`email` AS `partner_email`,

--  delimiters for filters

		            '2' AS `filter_type`,
		            `dist`.`id`  AS `filter_id`
                     
				
				FROM 
				     `district` `dist`
				LEFT JOIN
					 `district_user` `dist_u`
				ON
					 `dist_u`.`district_id` = `dist`.`id`
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
					 `par`.`id` = `par_reg`.`partner_id`; 
                
			END