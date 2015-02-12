USE delimiter $$;
CREATE PROCEDURE  get_consultant_details ($c_id) 
						BEGIN 
							SELECT 
								`con`.`id`,
                                `con`.`fname`,
                                `con`.`lname`,
                                `con`.`mobile_contact`,
                                `con`.`alternative_contact`,
                                `con`.`representative`,
                                `con`.`email`,
                                `con`.`website`,
                                `con`.`physical_address`,
                                `con`.`status`,
                                `con`.`regi_status`,
                                `con`.`bid_counter`,
                                `con`.`regi_date`,
                                `con`.`avatar`,
                                `qual`.`qualification`,
                                `qual`.`c_id`,
                                `wk_ref`.`work_references`
							LEFT JOIN 
								`qualifications` `qual`
							ON 
								`qual`.`c_id` = ".$c_id."
							LEFT JOIN 
								`work_references` `wk_ref`
							ON 
								`wk_ref`.`c_id` = ".$c_id."
                                
						END;