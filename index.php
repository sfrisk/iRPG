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

include('header.php');

?>

	<div class = "content">
	<div id="sign_in">
	<form id="login" action="index.php" method="post">
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
	</form>
	</div>
		<img src="images/login.png" alt="login group" \>
	</div>
<? include('footer.php'); ?>