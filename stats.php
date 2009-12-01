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
		<div class="content">
		
		<? include('settings.php'); ?>
	
		<div id="right_content">
		<h2>Stats</h2>
		<p>
			What are your basic stats?
		</p>
		</div>
		<div id="left_content">
		<h1><?= $user->username ?></h1>
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
			<label for="birthday_month">Birthday:</label>
			<select name="birthday_month">
				<option value="january">January</option>
				<option value="february">February</option>
				<option value="march">March</option>
				<option value="april">April</option>
				<option value="may">May</option>
				<option value="june">June</option>
				<option value="july">July</option>
				<option value="august">August</option>
				<option value="september">September</option>
				<option value="october">October</option>
				<option value="november">November</option>
				<option value="december">December</option>
			</select>
			<select name="birthday_day">
			<?for ($i = 1; $i < 32; $i++){
				?><option value="<?=$i?>"><?=$i?></option>
			<?}?>
			</select>
			<select name="birthday_year">
			<?for ($i = 1900; $i <= date("Y"); $i++){
				?><option value="<?=$i?>"><?=$i?></option>
			<?}?>
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
		</div>


<? include('footer.php'); ?>