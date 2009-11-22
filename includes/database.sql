# Table: 'rpg_users'
CREATE TABLE rpg_users (
	user_id mediumint(8) UNSIGNED NOT NULL auto_increment,
  `username` blob NOT NULL,
  `user_password` varbinary(120) NOT NULL DEFAULT '',
  `user_email` blob NOT NULL,
  `salt` text NOT NULL,
  PRIMARY KEY (`user_id`)
	);