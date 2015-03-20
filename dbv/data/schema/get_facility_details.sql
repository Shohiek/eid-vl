DROP PROCEDURE IF EXISTS `get_facility_details`;

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_facility_details`()
BEGIN
		SELECT 
			`fac`.`id`,
            `fac`.`name`,
            
            `fac`.`name` AS `facility_name`,
            `fac`.`district_id`,
            `fac`.`partner_id`,
            `fac`.`email` AS `facility_email`,
            `fac`.`phone` AS `facility_phone`,
            `fac`.`rollout_status`,
            `fac`.`rollout_date`,
            `fac`.`google_maps`,
            `dis`.`name` AS `district_name`,
            `dis`.`region_id`,
            `par`.`name` AS `partner_name`,
            `reg`.`name` AS `region_name`,

            --  delimiters for filters

            '1' AS `filter_type`,
            `fac`.`id`  AS `filter_id`

		FROM `facility` `fac`
        LEFT JOIN `district` `dis`
        ON `dis`.`id` = `fac`.`district_id`
        LEFT JOIN `partner` `par`
        ON `par`.`id` = `fac`.`partner_id`
        LEFT JOIN `region` `reg`
        ON `reg`.`id` = `dis`.`region_id`;
    END;