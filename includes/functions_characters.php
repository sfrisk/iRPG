<?php
/**
* User Class
*/

require_once("functions_database.php");
/*$db = new database();*/



class character{
	var $character_id;
	var $user_id;
	var $name;
	var $level;
	var $class;
	var $race;
	var $alignment;
	var $diety;
	var $age;
	var $gender;
	
	function add_Character($character)
	{
		/*global $db;*/
		$this->user_id = $character["user_id"];
		$this->name = $character["name"];
		$this->level = $character["level"];
		$this->class = $character["class"];
		$this->race = $character["race"];
		$this->alignment = $character["alignment"];
		$this->diety = $character["diety"];
		$this->age = $character["age"];
		$this->gender = $character["gender"];
		
	/*	$sql = "INSERT INTO rpg_characters (user_id, character_name, character_level, character_class, character_race, character_alignment, character_diety, character_age, character_gender) values '$this->user_id', '$this->name', '$this->level', '$this->class', '$this->race', '$this->alignment', '$this->diety', '$this->age', '$this->gender';";
		if($db->query($sql))
			return true;
		else
			return false;
			*/
	}
	
}

?>