<?php
/**
* Sarah Frisk
* iRPG
*
*/

$dbhost = 'Localhost';
$dbname = 'rpg';
$dbuser = 'root';
$dbpass = '';

/**
*Add a user
*@param array containing following keys : username, user_email
*
**/

function user_add($username, $password, $email)
{	
		global $dbhost, $dbuser, $dbpass, $dbname;
	
 		@mysql_connect($dbhost, $dbuser, $dbpassword)
			or die("The site database is down" . mysql_error());
		@mysql_select_db($dbname)
			or die("The site database is unavailable" . mysql_error());

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
	global $dbhost, $dbuser, $dbpass, $dbname;
	
	@mysql_connect($dbhost, $dbuser, $dbpassword)
		or die("The site database is down" . mysql_error());
	@mysql_select_db($dbname)
		or die("The site database is unavailable" . mysql_error());
		
	$sql = "SELECT user_id from rpg_users where username = '" . $username . "'";
	$results = mysql_query($sql);
	$user_id = "";
	while($row = mysql_fetch_array($results)){
		$user_id = $row["user_id"];
	}
	
	return $user_id;
	
}

function get_username($user_id)
{
	global $dbhost, $dbuser, $dbpass, $dbname;
	
	@mysql_connect($dbhost, $dbuser, $dbpassword)
		or die("The site database is down" . mysql_error());
	@mysql_select_db($dbname)
		or die("The site database is unavailable" . mysql_error());
		
	$sql = "SELECT username from rpg_users where user_id = '" . $user_id . "'";
	$results = mysql_query($sql);
	$username = "";
	while($row = mysql_fetch_array($results)){
		$username = $row["username"];
	}
	
	return $username;
}

/*
/Returns an array of the information about user
*/

function get_user_from_id($user_id)
{
	global $dbhost, $dbuser, $dbpass, $dbname;
	
	@mysql_connect($dbhost, $dbuser, $dbpassword)
		or die("The site database is down" . mysql_error());
	@mysql_select_db($dbname)
		or die("The site database is unavailable" . mysql_error());
	$profile;
	$sql = "SELECT * from rpg_users where user_id = '" . $user_id . "'";
	$results = mysql_query($sql);
	while($row = mysql_fetch_array($results)){
		$profile = array(
			'username' 	=> $row["username"],
			'password'	=> $row["user_password"],
			'email'		=> $row["user_email"],
			'id'		=> $row["user_id"]
			);
	}
	return $profile;
}

function get_user_from_name($username)
{
	global $dbhost, $dbuser, $dbpass, $dbname;
	
	@mysql_connect($dbhost, $dbuser, $dbpassword)
		or die("The site database is down" . mysql_error());
	@mysql_select_db($dbname)
		or die("The site database is unavailable" . mysql_error());
	$profile;
	$sql = "SELECT * from rpg_users where username = '" . $username . "'";
	$results = mysql_query($sql);
	while($row = mysql_fetch_array($results)){
		$profile = array(
			'username' 	=> $row["username"],
			'password'	=> $row["user_password"],
			'email'		=> $row["user_email"],
			'id'		=> $row["user_id"]
			);
	}
	return $profile;
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

/**
* Error checking
* Makes sure all values or listed
*/
function check_error($username, $password, $email, $new_character)
{
	$errors = array();
	$user = get_user_from_name($username);
	
	//form has been submitted
	if(empty($username)){
		$errors[] = "Need username";
	}
	if(empty($password)){
		$errors[] = "Need password";
	}
	if(empty($email)){
		$errors[] = "Need email";
	}
	
	if($new_character == false){
		if(empty($user['id']))
		{
			$errors[] = "User Does Not Exist";
		}

		if($password != $user['password'])
		{
			$errors[] = "Wrong user/password combination";
		}	
	}
	
	if(count($errors) > 0) 
	{
			echo '<ul id="error">';
			foreach($errors as $e) 
			{
				echo "<li>$e</li>";
			}
			echo "</ul>";
			return false;
	}
	else
		return true;
}


?>