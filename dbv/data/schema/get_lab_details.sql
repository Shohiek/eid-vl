CREATE DEFINER=`root`@`localhost` PROCEDURE `get_lab_details`()
BEGIN 
		SELECT 
			`lab`.`id`,
            `lab`.`name` AS `lab_name`,
            `lab`.`email` AS `lab_email`,
            `lab`.`phone_1` AS `lab_phone1`,
            `lab`.`phone_2` AS `lab_phone2`,
            `lab`.`cobas_count`,
            `lab`.`abbott_count`,
            `lab`.`district` AS `district_id`,
            `dist`.`name`,
            `dist`.`region_id`,
            `reg`.`name`
		FROM `lab` `lab`
        LEFT JOIN `district` `dist`
        ON `dist`.`id` = `lab`.`district`
        LEFT JOIN `region` `reg`
        ON `reg`.`id` = `dist`.`region_id`;     
	END