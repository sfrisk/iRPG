<?php
	// © 2009 rpgalot
	// Programed by Sarah, who is totally awesome

	foreach(glob('includes/*.php') as $class_filename) 
	{
	     require_once($class_filename);
	}

?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<link rel="stylesheet" type="text/css" href="style/style.css" />	
	<link rel="stylesheet" type="text/css" href="style/character_sheet.css" />
	<script type="text/javascript" src="js/character_calculations.js"></script>
		<head>

			<title>rpgalot</title>
			<meta name="author" content="Sarah Frisk" />
		</head>
		<body>
		<div id="header">
		
		<img src="images/logo.png" alt="rpgalot" \>
		
		<ul id="toplinks">
		<li>Blog</li>
		<li>Features</li>
		<li>About</li>
		<?php if(!empty($_SESSION['user'])){ ?>
			<li><a href="home.php">Profile</a></li>
			<li>Character</li>
			<li><a href="account.php">Settings</li>
			<li><a href="logout.php">Logout<a></li>
		<? } else{ ?>
		<li><a href="index.php">Login</a></li>
		<li><a href="signup.php">Signup</a></li>
		<?	}	?>
		</ul>
		</div>
		</div>