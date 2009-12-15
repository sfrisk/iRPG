<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

if(!empty($_SESSION[$user->password]))
{
	header('Location: home.php');
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$user = new user($username);

$output;

if(isset($_POST['submit']))
{

	//if(check_user_error($username, $password, "empty", false))
	if($user->passwordMatch($password))
	{
		$session_id = session_id();
		$_SESSION['user'] = $user->username;
		header('Location: home.php');
	}	
}

include('header.php');

?>

	<div class = "login">
	<div id="sign">
	<h1>Login</h1>
	<form action="index.php" method="post">
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