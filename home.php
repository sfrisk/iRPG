<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user->password))
{
	header('Location: index.php');
}

include('header.php');

?>
		<h1>
			<img src ="<?= Gravatar::creat($user->email) ?>" />
			<?= $user->username ?>
		</h1>

		<p>	
			<? if(!empty($user->name)){?>
			<strong>Name:</strong> <?= $user->name ?>
			<br />
			<?} if(!empty($user->location)){?>
			<strong>Location:</strong> <?= $user->location;?>
			<br />
			<?} if(!empty($user->gender)){?>
			<strong>Gender:</strong> <?=$user->gender;?>
			<br />
			<?}?>
			<strong>E-mail:</strong> <?=$user->email; ?>
			
		</p>
	
<? include('footer.php'); ?>