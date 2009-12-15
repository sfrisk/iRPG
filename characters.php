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

<p id="characters"><img src="images/characters.png" alt="Characters" /></p>

<p><a href="character_new.php">Create a New Character</a></p>

<? include('footer.php'); ?>