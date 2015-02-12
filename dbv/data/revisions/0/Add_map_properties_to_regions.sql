ALTER TABLE  `region` ADD  `fusion_id` VARCHAR( 11 ) NOT NULL COMMENT  'Fusion maps ',
ADD  `hc_key` VARCHAR( 11 ) NOT NULL COMMENT  'Highcharts',
ADD  `status` INT NOT NULL DEFAULT  '1';