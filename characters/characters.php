<?php session_start();
// File: characters.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16
foreach(glob('../includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user->password))
{
	header('Location: ../index.php');
}

include('../header.php');

?>

<p id="characters"><img src="../images/characters.png" alt="Characters" /></p>

<p id="new"><a href="basic.php">Create a New Character</a></p>

<p>Below is a list of your current characters:</p>
<div id="characterblock">
	<!-- this is where the character table will go -->
</div>

<? include('../footer.php'); ?>