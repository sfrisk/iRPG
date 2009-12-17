<?php session_start();
// File: contact.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16
foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

include('header.php');
?>

<div class="login">
<div id="sign">
<h1>Contact us</h1>
<?
if(isset($_POST['submit']))
{
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];
	$subject = $_REQUEST['subject'];
	
	if(!empty($name) && !empty($email) && !empty($message) && !empty($subject))
	{
		$header = "RPGalot Comment from: $name <$email>";	
		$to = "sarah@sarahfrisk.com";	
		$send_mail=mail($to,$subject,$message,$header);
	
		if($send_mail)
			echo "Comment sent successfully!";
		else
			echo "We're sorry, but a critical fumble has been rolled.  Please try again later.";
	}
}
?>
<form action="" method="post">
		<p>
			<label for="name">Name</label>
			<br />
			<input type="text" name="name" />
		</p>
		<p>
			<label for="email">Email</label>
			<br / >
			<input type="text" name="email" / >
		</p>
		<p>
			<label for="subject">Subject</label>
			<br / >
			<input type="text" name="subject" / >
		</p>		
		<p>
			<label for="message">Message</label>
			<br />
			<textarea name="message" rows="10" cols="35"></textarea>
		</p>

		<p>
			<input type="submit" name="submit" value = "Submit" >
		</p>
</form>
</div>
	<img src="images/login.png" alt="login group" \>
</div>

<? include('footer.php'); ?>