<?php session_start();

// File: basic.php
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

foreach(glob('../includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user->password))
{
	header('Location: ../index.php');
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
		<p>
			Feel free to roll your own ability scores, or use our dice to roll for you!
		</p>

		</div>
		<div id="left_content">
		
		<div id = "abilities">
			<form action="submit_character.php" method="post">
		<table cellspacing="1">
			<tr class = "character_label">
				<td></td>
				<td><strong>Ability <br />Raw Score</strong></td>
				<td></td>
				<td><strong>Misc <br /> Additions</strong></td>
				<td></td>
				<td><strong>Ability <br />Total Score</strong></td>
				<td><strong>Ability<br /><strong>Mod</td>
			</tr>
			<tr>
				<td>STR<br /><span class="label">Strength</span></td>
				<td><input type="text" id="STR" size="3" value="10" class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="STR_MISC" value="0" size="2" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="STR_TOTAL" value="10" size="2" /></td>
				<td><input disabled="disabled" type="text" id="STR_MOD" value="0" size="2" /></td>
			</tr>
			<tr>
				<td>DEX<br /><span class="label">Dexterity</span></td>
				<td><input type="text" id="DEX" size="3" value="10" class="user_input" /></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="DEX_MISC" value="0" size="2"  /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="DEX_TOTAL" value="10" size="2" /></td>
				<td><input disabled="disabled" type="text" id="DEX_MOD" value="0" size="2" /></td>
			</tr>
			<tr>
				<td>CON<br /><span class="label">Constitution</span></td>
				<td><input type="text" id="CON" size="3" value="10" class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="CON_MISC" value="0" size="2" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="CON_TOTAL" value="10" size="2" /></td>
				<td><input disabled="disabled" type="text" id="CON_MOD" value="0"  size="2" /></td>
			</tr>
			<tr>
				<td>INT<br /><span class="label">Intelligence</span></td>
				<td><input type="text" id="INT" size="3" value="10" value="0" class="user_input" /></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="INT_MISC" value="0" size="2" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="INT_TOTAL" value="10" size="2" /></td>
				<td><input disabled="disabled" type="text" id="INT_MOD" value="0" size="2" /></td>
			</tr>
			<tr>
				<td>WIS<br /><span class="label">Wisdom</span></td>
				<td><input type="text" id="WIS" size="3" value="10" class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="WIS_MISC" value="0" size="2" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="WIS_TOTAL" value="10" size="2" /></td>
				<td><input disabled="disabled" type="text" id="WIS_MOD" value="0" size="2" /></td>
			</tr>
			<tr>
				<td>CHA<br /><span class="label">Charisma</span></td>
				<td><input type="text" id="CHA" size="3" value="10"  class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="CHA_MISC" value="0" size="2"  /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="CHA_TOTAL" value="10" size="2" /></td
				<td><input disabled="disabled" type="text" id="CHA_MOD" value="0" size="2" /></td>
			</tr>
		</table>
		<p>
		<input type="button" id="roll_dice" value = "Roll Attributes">
		</p>
		</div>		
		
		
		
		<div id="stats">
		<p>
			<label for="name">Name</label>
			<input type="text" name="name" / >
		</p>
		<p>
			<label for="class">Class:</label>
			<select name="class" id="class">
				<option value="BARBARIAN" id="BARBARIAN" selected="selected">Barbarian</option>
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

			<label for="level">Lvl:</level>
			<select name="level">
				<option value="1" id="level_1">1</option>
			</select>
		</p>
		<p>
			<label for="race">Race:</label>
			<select name="race" id="race">
				<option value="HUMAN" id="HUMAN" selected="selected">Human</option>
				<option value="DWARF" id="DWARF">Dwarf</option>
				<option value="ELF" id="ELF">Elf</option>
				<option value="GNOME" id="GNOME">Gnome</option>
				<option value="HALF-ELF" id="HALF-ELF">Half-Elf</option>
				<option value="HALF-ORC" id="HALF-ORC">Half-Orc</option>
				<option value="HALFLING" id="HALFLING">Halfling</option>
			</select>

			<label for="age">Age:</label>
			<input type="text" name="age" id="age" value = "16" size="3"/ >
			
		</p>
		<p>
			<label for="gender">Gender:</label>
			<input type="radio" name="gender" value="MALE" checked="checked" /> Male
			<input type="radio" name="gender" value="FEMALE" /> Female
		</p>
		<p>
		<label for="alignment">Alignment:</label>
		<select name = "alignment" id="alignment">
			<option id="LAWFUL_GOOD" value="LAWFUL GOOD" disabled="disabled">Lawful Good</option>
			<option id="NEUTRAL_GOOD" value="NEUTRAL GOOD" selected="selected">Neutral Good</option>
			<option id="CHAOTIC_GOOD" value="CHAOTIC GOOD">Chaotic Good</option>
			<option id="LAWFUL_NEUTRAL" value="LAWFUL NEUTRAL" disabled="disabled">Lawful Neutral</option>
			<option id="NEUTRAL" value="NEUTRAL">Neutral</option>
			<option id="CHAOTIC_NEUTRAL" value="CHAOTIC NEUTRAL">Chaotic Neutral</option>
			<option id="LAWFUL_EVIL" value="LAWFUL EVIL" disabled="disabled">Lawful Evil</option>
			<option id="NEUTRAL_EVIL" value="NEUTRAL EVIL">Neutral Evil</option>
			<option id="CHAOTIC_EVIL" value="CHAOTIC EVIL">Chaotic Evil</option>
		</select>
		</p>
		<p>
		<label for="diety">Diety:</label>
		<select id="diety" name="diety">
			<option value="NO_DIETY" selected="selected">None</option>
			<option value="BOCCOB">Boccob</option>
			<option value="CORELLON_LARETHIAN">Corellon Larethian</option>
			<option value="EHLONNA">Ehlonna</option>
			<option value="ERYTHNUL">Erythnul</option>
			<option value="FHARLANGHN">Fharlanghn</option>
			<option value="GARL GLITTERGOLD" id ="GARL_GLITTERGOLD" >Garl Glittergold</option>
			<option value="GRUUMSH">Gruumsh</option>
			<option value="HEIRONEOUS">Heironeous</option>
			<option value="HEXTOR">Hextor</option>
			<option value="KORD">Kord</option>
			<option value="MORADIN">Moradin</option>
			<option value="NERULL">Nerull</option>
			<option value="OBAD-HAI">Obad-Hai</option>
			<option value="OLIDAMMARA">Olidammara</option>
			<option value="PELOR?">Pelor</option>
			<option value="ST_CUTHBERT">St. Cuthbert</option>
			<option value="VECNA">Vecna</option>
			<option value="WEE_JAS">Wee Jas</option>
			<option value="YONDALLA">Yondalla</option>
			<option value="OTHER">Other</option>
		</select>
		</p>
		</div>
		
		<p>
		<button id="next">
			<span>Save Character</span>
		</button> 
		</p>

		</form>

		</div>
		<p>&nbsp;</p>

<? include('../footer.php'); ?>