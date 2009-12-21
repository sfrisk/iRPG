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
		<h2>Inventory</h2>
		<p>
			Now weapons are all well and good, but every great adventures needs a little extra.  Like clothes.
			And food.  Maybe even a tent.  Or a torch - especially if you don't have a magic user on hand.  Here you'll
			be able to organize your inventory.
		</p>
		</div>
		<div id="left_content">
		
		We're sorry, but this part of the site is currently under construction.  Please come back later.

		</div>
		<p>&nbsp;</p>

<? include('../footer.php'); ?>