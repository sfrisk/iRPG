<?php
/**
* Sarah Frisk
* iRPG
*
*/
require_once("database.php");
$db = new database();

/**
*Add a user
*@param array containing following keys : username, user_email
*
**/

function user_add($username, $password, $email)
{	
		global $db;

		if(!unique_username($username))
		{
			echo "Username already in use";
			return;
		}
			
		$user_email = strtolower($email);
		$password_salt = md5(uniqid(rand(), true));
		$salted_password = md5($password . $password_salt . 'magicalworld');
		
		$sql = "INSERT INTO rpg_users (username, user_password, salt, user_email) values ('" . $username . "', '" . $salted_password . "', '" . $password_salt . "', '" . $user_email . "')";
		if($db->query($sql))
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
	global $db;
		
	$sql = "SELECT user_id from rpg_users where username = '" . $username . "'";
	$results = $db->query($sql);
	$user_id = "";
	while($row = $db->fetch($results)){
		$user_id = $row["user_id"];
	}
	
	return $user_id;
	
}

function get_username($user_id)
{

	global $db;
		
	$sql = "SELECT username from rpg_users where user_id = '" . $user_id . "'";
	$results = $db->query($sql);
	$username = "";
	while($row = $db->fetch($results)){
		$username = $row["username"];
	}
	
	return $username;

}

/*
/Returns an array of the information about user
*/

function get_user_from_id($user_id)
{
	global $db;
	
	$profile;
	$sql = "SELECT * from rpg_users where user_id = '" . $user_id . "'";
	$results = $db->query($sql);
	while($row = $db->fetch($results)){
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
	global $db;
	
	$profile;
	$sql = "SELECT * from rpg_users where username = '" . $username . "'";
	$results = $db->query($sql);
	while($row = $db->fetch($results)){
		$profile = array(
			'username' 	=> $row["username"],
			'password'	=> $row["user_password"],
			'email'		=> $row["user_email"],
			'salt'		=> $row["salt"],
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
* 
*/
function check_user_error($username, $password, $email, $new_character)
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
	
	else if($new_character == false && !empty($password) && !empty($username)){
//		if(empty($user['id']))
//		{
//			$errors[] = "User Does Not Exist";
//		}

		if(md5($password . $user['salt'] . 'magicalworld') != $user['password'])
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