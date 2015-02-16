CREATE TABLE IF NOT EXISTS `lab` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`email` varchar(100) NOT NULL,
	`phone_1` varchar(50) NOT NULL,
	`phone_2` varchar(50) NOT NULL,
	`cobas_count` int(11) NOT NULL,
	`abbott_count` int(11) NOT NULL,
	`district` int(11) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;