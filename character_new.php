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
			<input type="text" name="name" / >
			
			<label for="level">Level:</label>
			<select name="level">
			<option value="1" selected="selected">1</option>
			<!-- Will put more options in at later date, for now only dealing with level 1 characters-->
			</select>
			
			<label for="class">Class:</label>
			<select name="class">
				<option value="NO_CLASS"></option>
				<option value="BARBARIAN">Barbarian</option>
				<option value="<?=BARD?>">Bard</option>
				<option value="<?=CLERIC?>">Cleric</option>
				<option value="<?=DRUID?>">Druid</option>
				<option value="<?=FIGHTER?>">Fighter</option>
				<option value="<?=MONK?>">Monk</option>
				<option value="<?=PALADIN?>">Paladin</option>
				<option value="<?=RANGER?>">Ranger</option>
				<option value="<?=ROGUE?>">Rogue</option>
				<option value="<?=SORCERER?>">Sorcerer</option>
				<option value="<?=WIZARD?>">Wizard</option>
			</select>

			<label for="race">Race:</label>
			<select name="race">
				<option value="<?=NO_RACE?>"></option>
				<option value="<?=HUMAN?>">Human</option>
				<option value="<?=DWARF?>">Dwarf</option>
				<option value="<?=ELF?>">Elf</option>
				<option value="<?=GNOME?>">Gnome</option>
				<option value="<?=HALF-ELF?>">Half-Elf</option>
				<option value="<?=HALF-ORC?>">Half-Orc</option>
				<option value="<?=HALFLING?>">Halfling</option>
			</select>
			
		</p>
		<p>

			<label for="alignment">Alignment:</label>
			<select name="alignment">
				<option value="<?=NO_ALIGNMENT?>"> </option>
				<option value="<?=LAWFUL_GOOD?>">Lawful Good</option>
				<option value="<?=NEUTRAL_GOOD?>">Neutral Good</option>
				<option value="<?=CHAOTIC_GOOD?>">Chaotic Good</option>
				<option value="<?=LAWFUL_NEUTRAL?>">Lawful Neutral</option>
				<option value="<?=NEUTRAL?>">Neutral</option>
				<option value="<?=CHAOTIC_NEUTRAL?>">Chaotic Neutral</option>
				<option value="<?=LAWFUL_EVIL?>">Lawful Evil</option>
				<option value="<?=NEUTRAL_EVIL?>">Neutral Evil</option>
				<option value="<?=CHAOTIC_EVIL?>">Chaotic Evil</option>
			</select>

			<label for="diety">Diety:</label>
			<select name="diety">
				<option value="<?=NO_DIETY?>">None</option>
				<option value="<?=BOCCOB?>">Boccob</option>
				<option value="<?=CORELLON_LARETHIAN?>">Corellon Larethian</option>
				<option value="<?=EHLONNA?>">Ehlonna</option>
				<option value="<?=ERYTHNUL?>">Erythnul</option>
				<option value="<?=FHARLANGHN?>">Fharlanghn</option>
				<option value="<?=GARL_GLITTERGOLD?>">Garl Glittergold</option>
				<option value="<?=GRUUMSH?>">Gruumsh</option>
				<option value="<?=HEIRONEOUS?>">Heironeous</option>
				<option value="<?=HEXTOR?>">Hextor</option>
				<option value="<?=KORD?>">Kord</option>
				<option value="<?=MORADIN?>">Moradin</option>
				<option value="<?=NERULL?>">Nerull</option>
				<option value="<?=OBAD-HAI?>">Obad-Hai</option>
				<option value="<?=OLIDAMMARA?>">Olidammara</option>
				<option value="<?=PELOR?>">Pelor</option>
				<option value="<?=ST_CUTHBERT?>">St. Cuthbert</option>
				<option value="<?=VECNA?>">Vecna</option>
				<option value="<?=WEE_JAS?>">Wee Jas</option>
				<option value="<?=YONDALLA?>">Yondalla</option>
				<option value="<?=OTHER?>">Other</option>
			</select>

			<label for"size">Size</label>
			<select name="size">
				<option value="<?=NO_SIZE?>"></option>
				<option value="<?=SMALL?>">Small</option>
				<option value="<?=MEDIUM?>">Medium</option>
			</select>

			<label for="age">Age:</label>
			<input type="text" name="age" size="3" / >

			<label for="gender">Gender:</label>
			<select name="gender">
				<option value="<?=NO_GENDER?>"></option>
				<option value="<?=FEMALE?>">Female</option>
				<option value="<?=MALE?>">Male</option>
			</select>
			
		</p>
		
		<div class = "right">
		<!--This will be all calculated --!>
		<table cellspacing="2" class="character_table">
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
			<td>Deflection<br />Mod</td>
			<td></td>
			<td>Misc<br />Mod</td>
		</tr>
			<tr>
				<td>AC <br /><span class="label">Armor Class</span></td>
				<td><input type="text" name="total" size="3" / ></td>
				<td>= 10 +</td>
				<td><input disabled="disabled" type="text" name="armor_bonus" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="shield_bonus" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="DEX_MOD" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="size_mod" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="natural_armor" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="deflection_mod" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="misc_mod" size="3" / ></td>
			</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Touch<br /><span class="label">Armor Class</span></td>
			<td><input disabled="disabled" type="text" name="touch" size="3" / ></td>
		</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Flat-Footed<br /><span class="label">Armor Class</span></td>
			<td><input disabled="disabled" type="text" name="touch" size="3" / ></td>
		</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>HP<br /><span class="label">Hit Points</span></td>
			<td><input disabled="disabled" type="text" name="hp" size="3" / ></td>
		</tr>
		</table>
		
		<table cellspacing="0" class="character_table">
		<tr class = "character_label">
			<td></td>
			<td>Total</td>
			<td></td>
			<td>Dex<br />Mod</td>
			<td></td>
			<td>Misc<br />Mod</td>
		<tr>
		<tr>
			<td><br />Initiative<br /><span class="label">Modifier</span></td>
			<td><input disabled="disabled" type="text" name="total" size="3" / ></td>
			<td> = </td>
			<td><input disabled="disabled" type="text" name="DEX_MOD" size="3" / ></td>
			<td> + </td>
			<td><input disabled="disabled" type="text" name="MISC_MOD" size="3" / ></td>
		</tr>
		</table>
				
		
		</div>
		
		<table cellspacing="2">
			<tr class = "character_label">
				<td><span class="bold">Ability <br />Name</span></td>
				<td><span class="bold">Ability <br />Score</span></td>
				<td><span class="bold">Ability <br />Modifier</span></td>
				</tr>
		</table>
		<table cellspacing="2" class="character_table">
			<tr>
				<td><label for="STR">STR<br /><span class="label">Strength</span></td>
				<td><input type="text" name="STR" size="3" / ></td>
				<td><input disabled="disabled" type="text" name="STR_MOD" size="3" /></td
			</tr>
			<tr>
				<td><label for="DEX">DEX<br /><span class="label">Dexterity</span></td>
				<td><input type="text" name="DEX" size="3" / ></td>
				<td><input disabled="disabled" type="text" name="DEX_MOD" size="3" /></td
			</tr>
			<tr>
				<td><label for="CON">CON<br /><span class="label">Constitution</span></td>
				<td><input type="text" name="CON" size="3" / ></td>
				<td><input disabled="disabled" type="text" name="CON_MOD" size="3" /></td
			</tr>
			<tr>
				<td><label for="INT">INT<br /><span class="label">Intelligence</span></td>
				<td><input type="text" name="INT" size="3" / ></td>
				<td><input disabled="disabled" type="text" name="INT_MOD" size="3" /></td
			</tr>
			<tr>
				<td><label for="WIS">WIS<br /><span class="label">Wisdom</span></td>
				<td><input type="text" name="WIS" size="3" / ></td>
				<td><input disabled="disabled" type="text" name="WIS_MOD" size="3" /></td
			</tr>
			<tr>
				<td><label for="CHA">CHA<br /><span class="label">Charisma</span></td>
				<td><input type="text" name="CHA" size="3" / ></td>
				<td><input disabled="disabled" type="text" name="CHA_MOD" size="3" /></td
			</tr>
		</table>
		<p>
			<input type="submit" name="submit" value = "Create Character">(currently does nothing)
		</p>

		
	
</form>
</div>

<? include('footer.php'); ?>