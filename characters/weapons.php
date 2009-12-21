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
		<h2>Weapons</h2>
		<p>
			At the heart of every adventure, there is always a sharp pointy stick.  Normally this stick is made out of metal
			and very useful in dispatching the marauding goblin.  But what weapon is best for your character? (For that matter
			what weapons can your character even use?)  Manage your weapons shopping here.
		</p>
		</div>
		<div id="left_content">
		
		We're sorry, but this part of the site is currently under construction.  Please come back later.

		</div>
		<p>&nbsp;</p>

<? include('../footer.php'); ?>