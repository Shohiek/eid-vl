DROP PROCEDURE IF EXISTS `get_partner_details`;

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_partner_details`()
BEGIN 
			SELECT 
				`par`.`id`,
				`par`.`name`,
				`par`.`id`  AS `partner_id`,
				`par`.`name` AS `partner_name`,
				`par`.`email` AS `partner_email`,
				`par`.`phone` AS `partner_phone`,
				`par_reg`.`region_id`,
				`reg`.`name` AS `region_name`,

            --  delimiters for filters

	            '1' AS `filter_type`,
	            `par`.`id`  AS `filter_id`
			   
			FROM
				`partner` `par`
			LEFT JOIN 
				`partner_region` `par_reg`
			ON
				`par`.`id` = `par_reg`.`partner_id`
			LEFT JOIN
				`region` `reg`
			ON
				`reg`.`id` = `par_reg`.`region_id`; 
		END