<?php session_start();

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


	if(isset($_POST['submit']))
	{

		if(check_user_error($username, $password, $email, true))
			user_add($username, $password, $email);

	}



?>
		<div class="login">
		<div id="sign">
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