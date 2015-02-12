CREATE TABLE  IF NOT EXISTS `region` (
  	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`name` varchar(50) NOT NULL,
  	`hc_key` VARCHAR( 11 ) NOT NULL COMMENT  'Highcharts',
	`status` INT NOT NULL DEFAULT  '1'
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Regions'