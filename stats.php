<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user->password))
{
	header('Location: index.php');
}

include('header.php');


	$name = $_REQUEST['name'];
	$gender = $_REQUEST['gender'];
	$location = $_REQUEST['location'];
	$birthday = array(
		'month' => $_REQUEST["birthday_month"],
		'day' => $_REQUEST["birthday_day"],
		'year' => $_REQUEST["birthday_year"]
		);

	if(isset($_POST['submit']))
	{
		$user->setStats($name, $gender, $birthday, $location);
	}


?>
		<? include('settings.php'); ?>
	
		<div id="right_content">
		<h2>Stats</h2>
		<p>
			What are your basic stats?
		</p>
		</div>
		<div id="left_content">

		<form action="stats.php" method="post">
		<p>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?=$user->name;?>"/ >
			<br />
			<span class="description">Enter your real name, so people you know can recognize you.</span>
		</p>
		<p>
			<label for="gender">Gender:</label>
			<select name="gender">
				<option value="Female" <?if($user->gender=="Female"){?>selected="selected"<?}?>)>Female</option>
				<option value="Male" <?if($user->gender=="Male"){?>selected="selected"<?}?>>Male</option>
			</select>
		</p>
		<p>
			<label for="location">Location</label>
			<input type="text" name="location" value="<?=$user->location;?>" / >
		</p>
		
		
		
		
		<p>
		<input type="submit" name="submit" value = "Save" > 
		</p>
		</form>
		</div>


<? include('footer.php'); ?>