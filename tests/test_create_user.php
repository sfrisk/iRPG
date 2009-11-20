<?php session_start();

foreach(glob('../includes/*.php') as $class_filename) {
     require_once($class_filename);
}
?>
<!--
#
#	Test for creating users
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
	New User Test
</h1>
<?php

$username = $HTTP_POST_VARS['username'];
$password = $HTTP_POST_VARS['password'];
$email = $HTTP_POST_VARS['email'];

if(isset($_POST['submit']))
{
	
	if(check_user_error($username, $password, $email, true))
		user_add($username, $password, $email);
	
}



?>
<form action="test_create_user.php" method="post">
	<fieldset>
		<legend>New User</legend>
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
			<input type="submit" name="submit" value = "Create User" >
		</p>
	</fieldset>	
</form>

</body>
</html>