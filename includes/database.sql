# Table: 'rpg_users'
CREATE TABLE rpg_users (
	user_id mediumint(8) UNSIGNED NOT NULL auto_increment,
	username blob NOT NULL,
	user_password varbinary(120) NOT NULL,
	user_email blob NOT NULL,
	PRIMARY KEY (user_id),
	UNIQUE username_clean (username_clean(225))
	);