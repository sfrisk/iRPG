<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

if(!empty($_SESSION['user']))
{
	header('Location: home.php');
}

$username = $HTTP_POST_VARS['username'];
$password = $HTTP_POST_VARS['password'];
$user = get_user_from_name($username);

$output;

if(isset($_POST['submit']))
{

	if(check_user_error($username, $password, "empty", false))
	{
		$session_id = session_id();
		$_SESSION['user'] = $user;
		header('Location: home.php');
	}	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>RPGalot</title>
	</head>
	<body>
		<h1>
			Welcome
		</h1>	
	
	<form action="index.php" method="post">
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
				<input type="submit" name="submit" value = "Login" > New User? <a href = "signup.php">Sign up!</a>
			</p>
		</fieldset>	
	</form>
	</body>
	</html>