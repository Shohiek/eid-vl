CREATE TABLE  IF NOT EXISTS  `aauth_perms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `definition` text,
  PRIMARY KEY (`id`),
  KEY `id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8