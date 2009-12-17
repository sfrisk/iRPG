<?php session_start();

foreach(glob('../includes/*.php') as $class_filename) {
     require_once($class_filename);
}
// File: test_login.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16
?>

<!--
#
#	Test for loging in users
#	Wednesday Nov 18, 2009
#	Sarah Frisk
#
-->

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Create User Test!</title>
	</head>
	<body>
	<h1>
		Login Test
	</h1>
<?

$username = $HTTP_POST_VARS['username'];
$password = $HTTP_POST_VARS['password'];
$user = get_user_from_name($username);


if(isset($_POST['submit']))
{
	if(check_user_error($username, $password, "empty", false))
	{
		$session_id = session_id();
		$_SESSION['user'] = $user;
	}
}

?>
<form action="test_login.php" method="post">
	<fieldset>
		<legend>Login</legend>
		<p>
			<label for="username">Username</label>
			<br / >
			<input type="text" name="username" / >
		</p>
		<p>
			<label for="password">Password</label>
			<br />
			<input type="password" name="password" />
		</p>
		<p>
			<input type="submit" name="submit" value = "Login" >
		</p>
	</fieldset>	
</form>
</body>
</html>