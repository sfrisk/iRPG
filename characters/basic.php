<?php session_start();

foreach(glob('../includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user->password))
{
	header('Location: index.php');
}

include('../header.php');
include('character_navigation.php');
?>
	
		<div id="right_content">
		<h2>Basic Stats & Abilities</h2>
		<p>
			The first step to creating any D&D character for the first time is to know who your character
			is and what their abilities are.
		</p>
		</div>
		<div id="left_content">

		<form action="stats.php" method="post">
		<p>
			<label for="name">Name</label>
			<input type="text" name="name" / >
		</p>
		<p>
			<label for="race">Class:</label>
			<select name="class">
				<option value="BARBARIAN" id="BARBARIAN">Barbarian</option>
				<option value="BARD" id="BARD">Bard</option>
				<option value="CLERIC" id="CLERIC">Cleric</option>
				<option value="DRUID" id="DRUID">Druid</option>
				<option value="FIGHTER" id="FIGHTER">Fighter</option>
				<option value="MONK" id="MONK">Monk</option>
				<option value="PALADIN" id="PALADIN">Paladin</option>
				<option value="RANGER" id="RANGER">Ranger</option>
				<option value="ROGUE" id="ROGUE">Rogue</option>
				<option value="SORCERER" id="SORCERER">Sorcerer</option>
				<option value="WIZARD" id=WIZARD>Wizard</option>
			</select>
		</p>
		<p>
			<label for="race">Race:</label>
			<select id="race">
				<option value="NO_RACE"></option>
				<option value="HUMAN">Human</option>
				<option value="DWARF">Dwarf</option>
				<option value="ELF">Elf</option>
				<option value="GNOME">Gnome</option>
				<option value="HALF-ELF">Half-Elf</option>
				<option value="HALF-ORC">Half-Orc</option>
				<option value="HALFLING">Halfling</option>
			</select>
		</p>
		
		
		<p>
		<input type="submit" name="submit" value = "Save" > 
		
		</p>
		</form>
		
				<p><a href="skills.php" id="next">Next</a></p>
		</div>


<? include('../footer.php'); ?>