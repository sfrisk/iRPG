<?php session_start();

$user = $_SESSION['user'];

if(empty($user))
{
	header('Location: index.php');
}

include('header.php');

?>
		<div class="content">
		<div id="right_content">
		<h2>Settings</h2>
		From here you can change your basic account info, as well as expand your profile.
		<p></p>
		<p>
		<img src ="<?= Gravatar::creat($user['email']) ?>" />
		<br /> Change your avatar at <a href="http://www.gravatar.com">gravatar.com</a>
		<br />
		We are using <span class="italic"><?=$user['email'];?></span>
		</p>
		</div>
		<div id="left_content">
		<h1><?= $user['username'] ?></h1>
		<form action="index.php" method="post">
		<p>
		<label for="username">Username</label>
			<input class="account" type="text" name="username" value="<?=$user['username'];?>"/ >
		</p>	
		<p>
		<label for="email">Email</label>
			<input class="account" type="text" name="email" value="<?=$user['email'];?>"/ >
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
		</div>


<? include('footer.php'); ?>