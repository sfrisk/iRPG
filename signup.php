<?php session_start();

// File: signup.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

if(!empty($_SESSION['user']))
{
	header('Location: home.php');
}

include('header.php');

	$username = $_REQUEST['username'];
	$password =$_REQUEST['password'];
	$email = $_REQUEST['email'];
	$user = new user($username);
	$error = NO_ERROR;

	if(isset($_POST['submit']))
	{
		$user->add_User($username, $password, $email);
	}



?>
		<div class="login">
		<div id="sign">
		<h1>Sign Up!</h1>
	<form action="signup.php" method="post">
			<p>
				<label for="username">Username</label>
				<br / >
				<input type="text" name="username" / >
			</p>
			<p>
				<label for="email">Email</label>
				<br / >
				<input type="text" name="email" / >
			</p>
			<p>
				<label for="password">Password</label>
				<br />
				<input type="password" name="password" />
			</p>
			<p>
				<input type="submit" name="submit" value = "Create User" > Already have an account? <a href="index.php">Login!</a>
			</p>
	</form>
	</div>
		<img src="images/login.png" alt="login group" \>
	</div>

<? include('footer.php'); ?>