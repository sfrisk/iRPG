<?php session_start();

// File: submit_character.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

foreach(glob('../includes/*.php') as $class_filename) 
     require_once($class_filename);


$user = new user($_SESSION['user']);
$char = new character();

	$character["user_id"] = $user->user_id;
	$character["name"] = $_REQUEST['name'];
	$character["level"] = 1;
	$character["class"] = $_REQUEST['class'];
	$character["race"] = $_REQUEST['race'];
	$character["alignment"] = $_REQUEST['alignment'];
	$character["diety"] = $_REQUEST['diety'];
	$character["age"] = $_REQUEST['age'];
	$character["gender"] = $_REQUEST['gender'];
	
	$char->add_Character($character);
	
	$_SESSION['char'] = $char->character_id;

?>
