<?php
// File: functions_database.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

class database
{
	var $dbhost = 'Localhost';//'mysql.jamesdaniels.net';	//'Localhost';
	var $dbname = 'rpg';//'rpgalot';	//'rpg';
	var $dbuser = 'root';//'sarah';	//'root';
	var $dbpass =  ''; //'ELRpXfYQ';	//''; 

	private $link;
	private $result;
	public $sql;
	
	function __construct($database="")
	{
		if (!empty($database))
		{
			 $this->database = $database; 
		}
	
		$this->link	= @mysql_connect($this->dbhost, $this->dbuser, $this->dbpass)
				or die("The site database is down" . mysql_error());
		mysql_select_db($this->dbname)
			or die("The site database is unavailable" . mysql_error());
		return $this->link;
	}

	function query($sql)
	{
		if(!empty($sql)){
			$this->sql = $sql;
			$this->result = mysql_query($this->sql, $this->link);
			return $this->result;
		}
		else
			return false;
	}


	function update($table, $field, $value, $user_id)
	{	
		if($this->query("UPDATE $table SET $field = '$value' WHERE user_id  = '$user_id'"))
			return true;
		else 
			return false;
	}


	function fetch($result=""){
		if(empty($result))
		{
			$result = $this->result;
		}
		return mysql_fetch_array($result);
	}

	function getLastId($link="")
	{
		if(empty($link))
		{
			$link = $this->link;
		}
		return mysql_insert_id($link);		
	}

	function __destruct()
	{
		@mysql_close($this->link);
	}

}
?>