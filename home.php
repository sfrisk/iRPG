<?php session_start();

foreach(glob('includes/*.php') as $class_filename) {
     require_once($class_filename);
}

$user = $_SESSION['user'];

if(empty($user))
{
	header('Location: index.php');
}

include('header.php');

?>
		<div class="content">
		<h1>
			<img src ="<?= Gravatar::creat($user['email']) ?>" />
			<?= $user['username'] ?>
		</h1>

		<p>	
			<span class="bold">Name:</span> REAL NAME
			<br />
			<span class="bold">Location:</span> A LOCATION
			<br />
			<span class="bold">Age:</span> AN AGE
			<br />
			<span class="bold">Gender</span> GENDER
			<br />
			<span class="bold">E-mail:</span> <?=$user['email']; ?>
			<br />
			<span class="bold">Website:</span> WEBSITE
			<br />
			<span class="bold">AIM:</span> A USER NAME
			
		</p>
	

		</div>
<? include('footer.php'); ?>