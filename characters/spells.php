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
		<h2>Spells</h2>
		<p>
			Every wizard, sorcerer, bard, and other miscellaneous magic user needs some spells.  After all, you need something
			to make up for the fact that you die if someone merely brushes you with a pointy stick!
		</p>
		</div>
		<div id="left_content">
		
		We're sorry, but this part of the site is currently under construction.  Please come back later.

		</div>
		<p>&nbsp;</p>

<? include('../footer.php'); ?>