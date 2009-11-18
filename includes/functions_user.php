<?php
/**
* Sarah Frisk
* mRPG
*
*/

/**
*Add a user
*@param array containing following keys : username, user_email
*
**/
include("config.php");

function user_add($username, $password, $email)
{	
	$dbhost = 'Localhost';
	$dbname = 'rpg';
	$dbuser = 'root';
	$dbpassword = '';
	
		@mysql_connect($dbhost, $dbuser, $dbpassword)
			or die("Incorrect username/password combination." . mysql_error());
		@mysql_select_db($dbname)
			or die("Incorrect database name." . mysql_error());
			
		if(!unique_username($username))
		{
			echo "Username already in use";
			return;
		}
			
		$user_email = strtolower($email);
		$sql = "INSERT INTO rpg_users (username, user_password, user_email) values ('" . $username . "', '" . $password . "', '" . $user_email . "')";
		if(mysql_query($sql))
		{
			echo "Database Updated!!";
		}
		
}
/**
* Get user_id 
*
**/
function get_id($username)
{
	$dbhost = 'Localhost';
	$dbname = 'rpg';
	$dbuser = 'root';
	$dbpassword = '';	
	@mysql_connect($dbhost, $dbuser, $dbpassword)
		or die("Incorrect username/password combination." . mysql_error());
	@mysql_select_db($dbname)
		or die("Incorrect database name." . mysql_error());
	
		
	$sql = "SELECT user_id from rpg_users where username = '" . $username . "'";
	$results = mysql_query($sql);
	$user_id = "";
	while($row = mysql_fetch_array($results)){
		$user_id = $row["user_id"];
	}
	
	return $user_id;
	
}

/**
* Checks that username is unique
*/
function unique_username($username)
{
	$result = get_id($username);
	if($result == "")
		return true;
	else
		return false;
}


?>