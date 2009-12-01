<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

if(empty($user))
{
	header('Location: index.php');
}

include('header.php');
?>

<div class="content">

<img id="avatar" src="images/avatars/generic.png" alt="generic" width="100px" />

<h1>
	New Character
</h1>

<form action="" method="post">
		<p>
			<label for="name">Name:</label>
			<input type="text" id="name" / >
			
			<label for="level">Level:</label>
			<select id="level">
			<option value="1" selected="selected">1</option>
			<!-- Will put more options in at later date, for now only dealing with level 1 characters-->
			</select>
			
			<label for="class">Class:</label>
			<select id="class">
				<option value="NO_CLASS" id="NO_CLASS"></option>
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

			<label for="alignment">Alignment:</label>
			<select id="alignment">
				<option value="NO_ALIGNMENT"> </option>
				<option value="LAWFUL GOOD">Lawful Good</option>
				<option value="NEUTRAL GOOD">Neutral Good</option>
				<option value="CHAOTIC GOOD">Chaotic Good</option>
				<option value="LAWFUL NEUTRAL">Lawful Neutral</option>
				<option value="NEUTRAL">Neutral</option>
				<option value="CHAOTIC NEUTRAL">Chaotic Neutral</option>
				<option value="LAWFUL EVIL">Lawful Evil</option>
				<option value="NEUTRAL EVIL">Neutral Evil</option>
				<option value="CHAOTIC EVIL">Chaotic Evil</option>
			</select>

			<label for="diety">Diety:</label>
			<select id="diety">
				<option value="NO_DIETY">None</option>
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

			<label for"size">Size</label>
			<select id="size">
				<option value="NO_SIZE"></option>
				<option value="SMALL">Small</option>
				<option value="MEDIUM">Medium</option>
			</select>

			<label for="age">Age:</label>
			<input type="text" id="age" size="3" / >

			<label for="gender">Gender:</label>
			<select id="gender">
				<option value="NO_GENDER"></option>
				<option value="FEMALE">Female</option>
				<option value="MALE">Male</option>
			</select>
			
		</p>
		
		<div class = "right">
		<!--This will be all calculated --!>
		<table cellspacing="0" class="character_table">
		<tr class = "character_label">
			<td></td>
			<td>Total</td>
			<td></td>
			<td>Armor<br />Bonus</td>
			<td></td>
			<td>Shield<br />Bonus</td>
			<td></td>
			<td>Dex<br />Mod</td>
			<td></td>
			<td>Size<br />Mod</td>
			<td></td>
			<td>Natural<br />Armor</td>
			<td></td>
			<td>Deflect.<br />Mod</td>
			<td></td>
			<td>Misc<br />Mod</td>
		</tr>
			<tr>
				<td>AC <br /><span class="label">Armor Class</span></td>
				<td><input type="text" id="total" size="3" / ></td>
				<td>&nbsp;= 10 +</td>
				<td><input disabled="disabled" type="text" id="ARMOR_BONUS" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="SHIELD_BONUS" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="DEX_MOD1" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="SIZE_MOD0" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="NATURAL_ARMOR" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="DEFLECTION_MOD" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="MISC_MOD_ARMOR_CLASS" size="3" / ></td>
			</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Touch<br /><span class="label">Armor Class</span></td>
			<td><input disabled="disabled" type="text" id="TOUCH" size="3" / ></td>
		</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Flat-Footed<br /><span class="label">Armor Class</span></td>
			<td><input disabled="disabled" type="text" id="FLAT_FOOTED" size="3" / ></td>
		</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>HP<br /><span class="label">Hit Points</span></td>
			<td><input disabled="disabled" type="text" id="HIT_POINTS" size="3" / ></td>
		</tr>
		</table>	
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Speed</td>
			<td><input disabled="disabled" type="text" id="SPEED" size="3" / ></td>
		</tr>
		</table>

		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Base Attack Bonus</td>
			<td><input disabled="disabled" type="text" id="BASE_ATTACK_BONUS" size="3" / ></td>
		</tr>
		</table>
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Spell Resistance</td>
			<td><input disabled="disabled" type="text" id="SPELL_RESISTANCE" size="3" / ></td>
		</tr>
		</table>
		

		<table cellspacing="0" class="character_table3">
		<tr class = "character_label">
			<td></td>
			<td>Total</td>
			<td></td>
			<td>Base Attack<br />Bonus</td>
			<td></td>
			<td>Str. Mod</td>
			<td></td>
			<td>Size Mod</td>
			<td></td>
			<td>Misc<br />Mod</td>
		</tr>
			<tr>
				<td>Grapple<br /><span class="label">Modifier</span></td>
				<td><input disabled="disabled" type="text" id="TOTAL_GRAPPLE" size="3" / ></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="BASE_ATTACK_BONUS" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="STR_MOD1" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="SIZE_MOD1" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="MISC_MOD_GRAPPLE" size="3" / ></td>
			</tr>
		</table>

		<table cellspacing="0" class="character_table3">
			<tr class = "character_label">
				<td></td>
				<td>Total</td>
				<td></td>
				<td>Dex. Mod</td>
				<td></td>
				<td>Misc. Mod</td>
			<tr>
			<tr>
				<td><br />Initiative<br /><span class="label">Modifier</span></td>
				<td><input disabled="disabled" type="text" id="TOTAL_INITIATIVE" size="3" / ></td>
				<td>&nbsp;=&nbsp;</td>
				<td><input disabled="disabled" type="text" id="DEX_MOD2" size="3" / ></td>
				<td>&nbsp;+&nbsp;</td>
				<td><input disabled="disabled" type="text" id="MISC_MOD" size="3" / ></td>
			</tr>
			</table>
		
		
		
		</div>
		
		<table cellspacing="2" class="character_table">
			<tr class = "character_label">
				<td>Ability <br />Name</td>
				<td>Ability <br />Raw Score</td>
				<td></td>
				<td>Misc <br /> Additions</td>
				<td></td>
				<td>Ability <br />Total Score</td>
				<td>Ability<br />Mod</td>
			</tr>
			<tr>
				<td>STR<br /><span class="label">Strength</span></td>
				<td><input type="text" id="STR" size="4" value="0" class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="STR_MISC" value="0" size="3" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="STR_TOTAL" value="0" size="3" /></td>
				<td><input disabled="disabled" type="text" id="STR_MOD0" value="0" size="3" /></td>
			</tr>
			<tr>
				<td>DEX<br /><span class="label">Dexterity</span></td>
				<td><input type="text" id="DEX" size="4" value="0" class="user_input" /></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="DEX_MISC" value="0" size="3"  /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="DEX_TOTAL" value="0" size="3" /></td>
				<td><input disabled="disabled" type="text" id="DEX_MOD0" value="0" size="3" /></td>
			</tr>
			<tr>
				<td>CON<br /><span class="label">Constitution</span></td>
				<td><input type="text" id="CON" size="4" value="0" class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="CON_MISC" value="0" size="3" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="CON_TOTAL" value="0" size="3" /></td>
				<td><input disabled="disabled" type="text" id="CON_MOD0"value="0"  size="3" /></td>
			</tr>
			<tr>
				<td>INT<br /><span class="label">Intelligence</span></td>
				<td><input type="text" id="INT" size="4" value="0" value="0" class="user_input" /></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="INT_MISC" value="0" size="3" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="INT_TOTAL" value="0" size="3" /></td>
				<td><input disabled="disabled" type="text" id="INT_MOD0" value="0" size="3" /></td>
			</tr>
			<tr>
				<td>WIS<br /><span class="label">Wisdom</span></td>
				<td><input type="text" id="WIS" size="4" value="0" class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="WIS_MISC" value="0" size="3" /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="WIS_TOTAL" value="0" size="3" /></td>
				<td><input disabled="disabled" type="text" id="WIS_MOD0" value="0" size="3" /></td>
			</tr>
			<tr>
				<td>CHA<br /><span class="label">Charisma</span></td>
				<td><input type="text" id="CHA" size="4" value="0"  class="user_input"/></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" id="CHA_MISC" value="0" size="3"  /></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" id="CHA_TOTAL" value="0" size="3" /></td
				<td><input disabled="disabled" type="text" id="CHA_MOD0" value="0" size="3" /></td>
			</tr>
		</table>
		<p>
			<input type="submit" id="submit" value = "Create Character">(currently does nothing)
		</p>

		
	
</form>
</div>

<? include('footer.php'); ?>