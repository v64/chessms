# Dump of table games
# ------------------------------------------------------------

CREATE TABLE `games` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `player_1` int(11) NOT NULL,
  `player_2` int(11) DEFAULT NULL,
  `fen` varchar(512) DEFAULT NULL,
  `url` varchar(5) DEFAULT NULL,
  `result` varchar(1) DEFAULT NULL,
  `last_move_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dump of table moves
# ------------------------------------------------------------

CREATE TABLE `moves` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `move_num` int(11) NOT NULL,
  `white_move` varchar(10) NOT NULL DEFAULT '',
  `black_move` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(32) NOT NULL DEFAULT '',
  `playing` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
