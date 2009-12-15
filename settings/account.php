<?php session_start();

foreach(glob('../includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}


$user = new user($_SESSION['user']);

if(empty($user->password))
{
	header('Location: index.php');
}

	include('../header.php');

	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$passwords = array(
		'c_password' => $_REQUEST["c_password"],
		'n_password' => $_REQUEST["n_password"],
		'v_password' => $_REQUEST["v_password"]
		);
	if(isset($_POST['submit']))
	{
		$user->setAccount($username, $email, $passwords);
	}

?>
		
		<? include('settings.php'); 
		?>
		
		<div id="right_content">
		<h2>Account</h2>
		From here you can change your basic account info.
		<p></p>
		<p>
		<img src ="<?= Gravatar::creat($user->email) ?>" />
		<br /> Change your avatar at <a href="http://www.gravatar.com">gravatar.com</a>
		<br />
		We are using <em><?=$user->email;?></em>
		</p>
		</div>
		<div id="left_content">
	
		<form action="account.php" method="post">
		<p>
		<label for="username">Username</label>
			<input class="account" type="text" name="username" value="<?=$user->username;?>"/ >
		</p>	
		<p>
		<label for="email">Email</label>
			<input class="account" type="text" name="email" value="<?=$user->email;?>"/ >
		</p>
		<p>
			<label for="c_password">Current Password</label>
			<input class="account" type="password" name="c_password" />
		</p>
		<p>
			<label for="n_password">New Password</label>
			<input class="account" type="password" name="n_password" />
		</p>	
		<p>
			<label for="v_password">Verify Password</label>
			<input class="account" type="password" name="v_password" />
		</p>		
		
		<p>
		<input type="submit" name="submit" value = "Save" > 
		</p>
		</form>
		</div>


<? include('../footer.php'); ?>