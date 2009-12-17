<?php
// File: functions_characters.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

require_once("functions_database.php");

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
	function __construct()
	{
		global $db;
		//$sql = "SELECT * from rpg_characters where character_id = $id";
		//$result = $db->query($sql);
		$this->user_id = NULL;
		$this->name = NULL;
		$this->level = NULL;
		$this->class = NULL;
		$this->race = NULL;
		$this->alignment = NULL;
		$this->diety = NULL;
		$this->age = NULL;
		$this->gender = NULL;
	
	}	
	function add_Character($character)
	{
		global $db;
		$this->user_id = $character["user_id"];
		$this->name = $character["name"];
		$this->level = $character["level"];
		$this->class = $character["class"];
		$this->race = $character["race"];
		$this->alignment = $character["alignment"];
		$this->diety = $character["diety"];
		$this->age = $character["age"];
		$this->gender = $character["gender"];
		
		$sql = "INSERT INTO rpg_characters (user_id, character_name, character_level, 
			character_class, character_race, character_alignment, character_diety, 
			character_age, character_gender) VALUES ($this->user_id, '$this->name', 
			'$this->level', '$this->class', '$this->race', '$this->alignment', 
			'$this->diety', $this->age, '$this->gender');";
		if($db->query($sql))
			echo "worked";
		else
			echo "fail";
		$sql = "SELECT character_id WHERE character_name = '$this->name' WHERE user_id = $this->user_id";
		$results = $db->query($sql);
		echo $results;
	}
	
}

?>