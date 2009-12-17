<?php session_start();
// File: uploader.php
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
		header('Location: index.php');
	}

	$user = new user($_SESSION['user']);

	$file_upload="true";
	$file_up_size=$_FILES['uploadedfile'][size];
	if ($_FILES['uploadedfile'][size] > 250000)
	{
		$file_upload="false";
	}
	if(!($_FILES['uploadedfile'][type] =="image/jpeg" OR $_FILES['uploadedfile'][type] =="image/gif" OR $_FILES['uploadedfile'][type] == "image/png"))
	{
		$file_uploat="false";
	}

	if($_FILES['uploadedfile'][type] =="image/jpeg")
		$type = ".jpg";
	if($_FILES['uploadedfile'][type] =="image/gif")
		$type = ".gif";
	if($_FILES['uploadedfile'][type] =="image/png")
		$type = ".png";

	$add = "../images/avatars/$user->user_id$type";

	if($file_upload == "true")
	{
		if(move_uploaded_file ($_FILES['uploadedfile'][tmp_name],$add))
		{
			$user->set_Avatar("images/$add");
		}
	}

	header('Location: ../settings/avatar.php');

?>