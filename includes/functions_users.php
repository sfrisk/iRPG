<?php
/**
* User Class
*/

require_once("functions_database.php");
$db = new database();



class user{
	var $username;
	var $password; //salted version
	var $email;
	var $user_id;
	
	var $salt; // salt
	var $name;
	var $gender; //MAKE A CONSTANT FOR THIS
	var $birthday; //string? 09-01-1987
	var $location; //string
	
	var $characters; // array of characters?
	
	function __construct($username)
	{
		global $db;
		$sql = "SELECT * from rpg_users where username = '" . $username . "'";
		$result = $db->query($sql);
		
		while($row = $db->fetch($results))
		{
			$this->user_id = $row["user_id"];
			$this->username = $row["username"];
			$this->password = $row["user_password"];
			$this->email = $row["user_email"];
			$this->salt = $row["salt"];
			$this->name = $row["user_name"];
			$this->gender = $row["user_gender"];
		}		
	}
	
	
	function add_User($username, $password, $email)
	{
		global $db;
		
		if(!empty($username) && !empty($password) && !empty($email)){ //checks to see if anything is empty
			if ($this->password == "") //sees if a user account with this username exists
			{
				//create user
				$user_email = strtolower($email);
				$password_salt = md5(uniqid(rand(), true)); //creates a salt for password
				$salted_password = md5($password . $password_salt . 'magicalworld'); //make sure if anyone gets the password, it makes no sense
				
				$sql = "INSERT INTO rpg_users (username, user_password, salt, user_email) values ('" . $username . "', '" . $salted_password . "', '" . $password_salt . "', '" . $user_email . "')";
				if($db->query($sql))
					return true;
				else
					return false;
			}
			else{
				echo "The username already exists";
				return false;
			}		
		}
		else{
			echo "You did not fill out all the forms";
			return false;
		}	
	}
	
	function setAccount($username, $email, $passwords)
	{

		if ($username != $this->username) //make it so that this will check while user is typing in name
		{
			if(!$this->setUsername($username))
				return false;
		}
		if ($email != $this->email)
		{
			if(!$this->setEmail($email))
				return false;
		}
		if(!empty($passwords['n_password']) && !empty($passwords['v_password']))
		{
			if($this->passwordMatch($passwords['c_password']) && $passwords['n_password'] == $passwords['v_password'])
			{
				$this->setPassword($passwords['n_password']);
			}
			
		}
		return true;
	}
	
	function setUsername($username)
	{
		global $db;
		$this->username = $username;
		$_SESSION['user'] = $this->username;
		return $db->update("rpg_users", "username", $username, $this->user_id);
	}
	
	function setEmail($email)
	{
		global $db;
		$this->email = $email;
		return $db->update("rpg_users", "user_email", $email, $this->user_id);
	}

	function setPassword($password)
	{
		global $db;
		$salted_password = md5($password . $this->salt . 'magicalworld');
		$this->password = $salted_password;
		
		return $db->update("rpg_users", "user_password", $this->password, $this->user_id);
	}
	
	function passwordMatch($password)
	{
		if(md5($password . $this->salt . 'magicalworld') == $this->password)
			return true;
		else
			return false;	
	}
	
	function setStats($name, $gender, $birthday, $location)
	{
		if(!empty($name))
		{
			$this->setName($name);
		}
		if(!empty($gender)) //might need to look at this
		{
			$this->setGender($gender);
		}
	//	if(!empty($birthday)) // look into this
	//	{
	//	
	//	}
	}
	
	function setName($name)
	{
		global $db;
		$this->name = $name;
		$db->update("rpg_users", "user_name", $this->name, $this->user_id);
	}
	
	function setGender($gender)
	{
		global $db;
		echo $gender;
		$this->gender = $gender;
		$db->update("rpg_users", "user_gender", $this->gender, $this->user_id);
	}
	
	function setBirthday($birthday) //birthday is array
	{
		global $db;
	}
	function setLocation($location)
	{
		global $db;
		$this->name = $name;
		$db->update("rpg_users", "user_name", $this->name, $this->user_id);
	}

}


?>