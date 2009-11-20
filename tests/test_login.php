<?php session_start();

foreach(glob('../includes/*.php') as $class_filename) {
     require_once($class_filename);
}
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
	$errors = array();

	//form has been submitted
	if(empty($username)){
		$errors[] = "Need username";
	}
	if(empty($password)){
		$errors[] = "Need password";
	}
		
	if(empty($user['id']))
	{
		$errors[] = "User Does Not Exist";
	}
	
	if($password != $user['password'])
	{
		$errors[] = "Wrong user/password combination";
	}

	if(count($errors) > 0) 
	{
			echo '<ul id="error">';
			foreach($errors as $e) 
			{
				echo "<li>$e</li>";
			}
			echo "</ul>";
			
	}
	else{
		echo "login correct \n";
		echo "session start \n";
		$session_id = session_id();
		echo "Session ID" . $session_id;
		$_SESSION['user'] = $user;
		$fp = fopen("session_test.txt",  "w+");  
		$data = session_encode();
		fwrite($fp, $data);
		fclose($fp);
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