<?php

$dbhost = 'Localhost';
$dbname = 'rpg';
$dbuser = 'root';
$dbpass = '';

function dbConnect()
{
	global $dbhost, $dbuser, $dbpass, $dbname;
	
	$db = @mysql_connect($dbhost, $dbuser, $dbpassword)
		or die("The site database is down" . mysql_error());
	@mysql_select_db($dbname)
		or die("The site database is unavailable" . mysql_error());
		
	return $db;
}


?>