DROP PROCEDURE IF EXISTS `get_region_details`;

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_region_details`()
BEGIN 
			SELECT
				`reg`.`id`,
			    `reg`.`name`,
				`reg`.`id` AS `region_id`,
			    `reg`.`name` AS `region_name`,
			    `reg`.`hc_key`,
--  delimiters for filters

    			'2' AS `filter_type`,
    			`reg`.`id`  AS `filter_id`

			FROM
				`region` `reg`;
		END