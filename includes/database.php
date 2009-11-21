<?php
/**
* Database class
*
*/

class database
{
	var $dbhost = 'Localhost';
	var $dbname = 'rpg';
	var $dbuser = 'root';
	var $dbpass = ''; 

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

	function fetch($result=""){
		if(empty($result))
		{
			$result = $this->result;
		}
		return mysql_fetch_array($result);
	}

	function __destruct()
	{
		mysql_close($this->link);
	}

}
?>