# Table: 'rpg_users'
CREATE TABLE rpg_users (
  'user_id' mediumint(8) UNSIGNED NOT NULL auto_increment,
  `username` text NOT NULL,
  `user_password` varbinary(120) NOT NULL DEFAULT '',
  `user_email` text NOT NULL,
  `salt` text NOT NULL,
  PRIMARY KEY (`user_id`)
	);
	
CREATE TABLE rpg_characters(
	'character_id' mediumint(8) UNSIGNED NOT NULL auto_increment,
	'user_id' mediumint(8) UNSIGNED NOT NULL,
	'character_name' text NOT NULL,
	PRIMARY KEY('character_id')
	)