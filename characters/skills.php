<?php session_start();

// File: basic.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

foreach(glob('../includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user->password))
{
	header('Location: ../index.php');
}

include('../header.php');
include('character_navigation.php');
?>
	
		<div id="right_content">
		<h2>Skills</h2>
		<p>
			Without skills, your nothing but a bunch of ability rolls on a piece of paper.  Skills let you
			do stuff, even if it something as random as being a master kazoo player.
		</p>
		<p>
			We're not really sure what the use of being a master kazoo player is, but hey!  It's still a skill.
		</p>
		</div>
		<div id="left_content">
		
		We're sorry, but this part of the site is currently under construction.  Please come back later.

		</div>
		<p>&nbsp;</p>

<? include('../footer.php'); ?>