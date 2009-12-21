<?php session_start();
header("Content-type: text/xml"); 
// File: characters.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16


require_once('../includes/functions_users.php');

$user = new user($_SESSION['user']);


if(empty($user->password))
{
	header('Location: ../index.php');
}

global $db;
$sql = "SELECT * FROM rpg_characters WHERE user_id = '$user->user_id';";
$results = $db->query($sql);


?>
<characters>
<?
while($row = $db->fetch($results))
{
	?>
	<character>
		<name><?=$row[2] ?></name>
		<level><?=$row[3] ?></level>
		<class><?=$row[4] ?></class>
		<race><?=$row[5] ?></race>
		<alignment><?=$row[6] ?></alignment>
		<diety><?=$row[7] ?></diety>
		<age><?=$row[8] ?></age>
		<gender><?=$row[9] ?></gender>
	</character>
	
	<?
}
?>
</characters>
