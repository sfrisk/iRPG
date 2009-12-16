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
	<?
		if (preg_match('/settings/', $_SERVER["REQUEST_URI"]))
		{
			?><link rel="stylesheet" type="text/css" href="../style/style.css" /><?
		}
		else
		{
			?><link rel="stylesheet" type="text/css" href="style/style.css" /><?
		}
	?>
	<link rel="stylesheet" type="text/css" href="style/character_sheet.css" />
	<script type="text/javascript" src="js/character_calculations.js"></script>
		<head>

			<title>rpgalot</title>
			<meta name="author" content="Sarah Frisk" />
		</head>
		<body>
		<div id="header">
		<?
		if (preg_match('/settings/', $_SERVER["REQUEST_URI"]))
		{
		?>
			<img id="header_image" src="../images/logo-text2.png" alt="rpgalot" \>
			<ul id="toplinks">
				<li><a href="../contact.php" class="<?= preg_match('/contact\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Contact</a></li>
				<li><a href="../about.php"   class="<?= preg_match('/about\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">About</a></li>
				<?php if(!empty($_SESSION['user'])){ ?>
					<li><a href="../home.php"       class="<?= preg_match('/home\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected" >Profile</a></li>
					<li><a href="../characters.php" class="<?= preg_match('/characters\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected" >Character</a></li>
					<li><a href="../settings/account.php"    class="<?= preg_match('/settings/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected" >Settings</a></li>
					<li><a href="../logout.php" class="notselected">Logout</a></li>
				<? } else{ ?>
					<li><a href="../index.php"  class="<?= preg_match('/index\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Login</a></li>
					<li><a href="../signup.php" class="<?= preg_match('/signup\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Signup</a></li>
				<?	}	?>
			</ul>			
		<?
		}
		
		if(!preg_match('/settings/', $_SERVER["REQUEST_URI"]))
		{?>
		<img src="images/logo-text2.png" alt="rpgalot" \>	
		<ul id="toplinks">
		<li><a href="contact.php" class="<?= preg_match('/contact\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Contact</a></li>
		<li><a href="about.php"   class="<?= preg_match('/about\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">About</a></li>
		<?php if(!empty($_SESSION['user'])){ ?>
			<li><a href="home.php"       class="<?= preg_match('/home\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected" >Profile</a></li>
			<li><a href="characters.php" class="<?= preg_match('/characters\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected" >Character</a></li>
			<li><a href="settings/account.php"    class="<?= preg_match('/settings/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected" >Settings</a></li>
			<li><a href="logout.php" class="notselected">Logout</a></li>
		<? } else{ ?>
		<li><a href="index.php"  class="<?= preg_match('/index\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Login</a></li>
		<li><a href="signup.php" class="<?= preg_match('/signup\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Signup</a></li>
		<?	}	?>
		</ul>
		
		<?}
		?>
		</div>
		</div>
		<div class="content">