<?php session_start();
// File: avatar.php
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
	 include('settings.php'); 
	
	
	
?>

	<div id="right_content">
		<h2>Avatar</h2>
		<p>Without a photo you're nothing but another name on a piece of paper.</p>
		<p>Nudity or obscene images are not allowed.  People with these type of pictures will be flogged</p>
	</div>
	<div id="left_content">
		<form enctype="multipart/form-data" action="../images/uploader.php" method="POST">
		<p>
		<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
		<strong>Choose a file to upload:</strong> <input name="uploadedfile" type="file" />
		<br />
		<em>Maximum size of 250k, must be a PNG, GIF, or JPEG</em>
		</p>
		<p>
		<input type="submit" value="Upload File" />
		</form>
		</p>
	</div>


	<? include('../footer.php'); ?>	