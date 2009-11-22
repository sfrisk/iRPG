<!--
#
#	Character Creation Form
#	Wednesday Nov 20, 2009
#	Sarah Frisk
#
-->
	<?php session_start();

	foreach(glob('includes/*.php') as $class_filename) 
	{
	     require_once($class_filename);
	}

	if(!empty($_SESSION['user']))
	{
		header('Location: home.php');
	}

	include('header.php');
?>


<h1>
	New Character
</h1>

<form action="" method="post">
	<fieldset>
		<legend>Create Character</legend>
		<p>
			<label for="character">Character Name</label>
			<input type="text" name="character" / >
		</p>
		<p>
			<label for="level">Level:</label>
			<select name="level">
			<option value="1" selected="selected">1</option>
			<!-- Will put more options in at later date, for now only dealing with level 1 characters-->
			</select>
		</p>
		<p>
			<label for="class">Class:</label>
			<select name="class">
				<option value="barbarian" selected="selected">Barbarian</option>
				<option value="bard">Bard</option>
				<option value="cleric">Cleric</option>
				<option value="druid">Druid</option>
				<option value="fighter">Fighter</option>
				<option value="monk">Monk</option>
				<option value="paladin">Paladin</option>
				<option value="ranger">Ranger</option>
				<option value="rogue">Rogue</option>
				<option value="sorcerer">Sorcerer</option>
				<option value="wizard">Wizard</option>
			</select>
		</p>
		<p>
			<label for="race">Race:</label>
			<select name="race">
				<option value="human" selected="selected">Human</option>
				<option value="dwarf">Dwarf</option>
				<option value="elf">Elf</option>
				<option value="gnome">Gnome</option>
				<option value="half-elf">Half-Elf</option>
				<option value="half-orc">Half-Orc</option>
				<option value="halfling">Halfling</option>
			</select>
		</p>
		<p>
			<label for="age">Age:</label>
			<input type="text" name="age" / >
		</p>
		<p>
			<label for="gender">Gender:</label>
			<select name="gender">
				<option value="female" selected="selected">Female</option>
				<option value="male">Male</option>
			</select>
		</p>
		<p>
			<label for="alignment">Alignment:</label>
			<select name="alignment">
				<option value="lawful_good" selected="selected">Lawful Good</option>
				<option value="neutral_good">Neutral Good</option>
				<option value="chaotic_good">Chaotic Good</option>
				<option disabled="disabled" value="lawful_neutral">Lawful Neutral</option>
				<option value="neutral">Neutral</option>
				<option value="chaotic_neutral">Chaotic Neutral</option>
				<option value="lawful_evil">Lawful Evil</option>
				<option value="neutral_evil">Neutral Evil</option>
				<option value="chaotic_evil">Chaotic Evil</option>
			</select>
		</p>
		<p>
			<label for="diety">Diety:</label>
			<select name="diety">
				<option value="none" selected="selected">None</option>
				<option value="corellon_larethian">Corellon Larethian</option>
				<option value="ehlonna">Ehlonna</option>
				<option value="erythnul">Erythnul</option>
				<option value="fharlanghn">Fharlanghn</option>
				<option value="garl_glittergold">Garl Glittergold</option>
				<option value="gruumsh">Gruumsh</option>
				<option value="heironeous">Heironeous</option>
				<option value="hextor">Hextor</option>
				<option value="kord">Kord</option>
				<option value="moradin">Moradin</option>
				<option value="nerull">Nerull</option>
				<option value="obad-hai">Obad-Hai</option>
				<option value="olidammara">Olidammara</option>
				<option value="pelor">Pelor</option>
				<option value="st_cuthber">St. Cuthbert</option>
				<option value="vecna">Vecna</option>
				<option value="wee_jas">Wee Jas</option>
				<option value="yondalla">Yondalla</option>
				<option value="other">Other</option>
			</select>
		</p>
		<p>
			<input type="submit" name="submit" value = "Create Character">(currently does nothing)
		</p>
	</fieldset>	
</form>

<? include('footer.php'); ?>