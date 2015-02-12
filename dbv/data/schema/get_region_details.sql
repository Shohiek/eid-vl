CREATE DEFINER=`root`@`localhost` PROCEDURE `get_region_details`()
BEGIN 
							SELECT
								`reg`.`id`,
							    `reg`.`name`
	
							FROM
								`region` `reg`;
						END