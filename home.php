<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user))
{
	header('Location: index.php');
}

include('header.php');

?>
		<div class="content">
		<h1>
			<img src ="<?= Gravatar::creat($user->email) ?>" />
			<?= $user->username ?>
		</h1>

		<p>	
			<? if(!empty($user->name)){?>
			<span class="bold">Name:</span> <?= $user->name ?>
			<br />
			<?} if(!empty($user->location)){?>
			<span class="bold">Location:</span> <?= $user->location;?>
			<br />
			<?} if(!empty($user->birthday)){?>
			<span class="bold">Birthday:</span> $user->birthday;?>
			<br />
			<?} if(!empty($user->gender)){?>
			<span class="bold">Gender:</span> <?=$user->gender;?>
			<br />
			<?}?>
			<span class="bold">E-mail:</span> <?=$user->email; ?>
			
		</p>
	

		</div>
<? include('footer.php'); ?>