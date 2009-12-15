<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(isset($_POST['submit']))
{
	$character["user_id"] = $user->user_id;
	$character["name"] = $_REQUEST['name'];
	$character["level"] = 1;
	$character["class"] = $_REQUEST['class'];
	$character["race"] = $_REQUEST['race'];
	$character["alignment"] = $_REQUEST['alignment'];
	$character["diety"] = $_REQUEST['diety'];
	$character["age"] = $_REQUEST['age'];
	$character["gender"] = $_REQUEST['gender'];
	
	if(!empty($name) && !empty($level) && !empty($class) && !empty($race) && !empty($alignment) && !empty($diety) && !empty($age) && !empty($gender))
	{
		add_Character($character);
	}
}
?>
