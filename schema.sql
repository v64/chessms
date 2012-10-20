# Dump of table games
# ------------------------------------------------------------

CREATE TABLE games (
  id SERIAL,
  player_1 integer NOT NULL,
  player_2 integer DEFAULT NULL,
  fen varchar(512) DEFAULT NULL,
  url varchar(5) DEFAULT NULL,
  result varchar(1) DEFAULT NULL,
  last_move_timestamp timestamp NOT NULL DEFAULT current_timestamp
);

# Dump of table users
# ------------------------------------------------------------

CREATE TABLE users (
  id SERIAL,
  phone_number varchar(32) NOT NULL DEFAULT '',
  playing integer NOT NULL DEFAULT '1'
);
