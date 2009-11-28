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
				<option value="<?=NO_CLASS?>"></option>
				<option value="<?=BARBARIAN?>">Barbarian</option>
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
				<td><input type="text" name="total" size="3" / ></td>
				<td>= 10 +</td>
				<td><input disabled="disabled" type="text" name="ARMOR_BONUS" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="SHIELD_BONUS" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="DEX_MOD" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="SIZE_MOD" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="NATURAL_ARMOR" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="DEFLECTION_MOD" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="MISC_MOD_ARMOR_CLASS" size="3" / ></td>
			</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Touch<br /><span class="label">Armor Class</span></td>
			<td><input disabled="disabled" type="text" name="TOUCH" size="3" / ></td>
		</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Flat-Footed<br /><span class="label">Armor Class</span></td>
			<td><input disabled="disabled" type="text" name="FLAT_FOOTED" size="3" / ></td>
		</tr>
		</table>
		
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>HP<br /><span class="label">Hit Points</span></td>
			<td><input disabled="disabled" type="text" name="HIT_POINTS" size="3" / ></td>
		</tr>
		</table>	
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Speed</td>
			<td><input disabled="disabled" type="text" name="SPEED" size="3" / ></td>
		</tr>
		</table>

		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Base Attack Bonus</td>
			<td><input disabled="disabled" type="text" name="BASE_ATTACK_BONUS" size="3" / ></td>
		</tr>
		</table>
		<table cellspacing="0" class="character_table2">
		<tr>
			<td>Spell Resistance</td>
			<td><input disabled="disabled" type="text" name="SPELL_RESISTANCE" size="3" / ></td>
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
				<td><input disabled="disabled" type="text" name="TOTA_GRAPPLE" size="3" / ></td>
				<td> = </td>
				<td><input disabled="disabled" type="text" name="BASE_ATTACK_BONUS" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="STR_MOD" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="SIZE_MOD" size="3" / ></td>
				<td> + </td>
				<td><input disabled="disabled" type="text" name="MISC_MOD_GRAPPLE" size="3" / ></td>
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
				<td><input disabled="disabled" type="text" name="TOTAL_INITIATIVE" size="3" / ></td>
				<td>&nbsp;=&nbsp;</td>
				<td><input disabled="disabled" type="text" name="DEX_MOD" size="3" / ></td>
				<td>&nbsp;+&nbsp;</td>
				<td><input disabled="disabled" type="text" name="MISC_MOD" size="3" / ></td>
			</tr>
			</table>
		
		
		
		</div>
		
		<table cellspacing="2" class="character_table">
			<tr class = "character_label">
				<td>Ability <br />Name</td>
				<td>Ability <br />Score</td>
				<td>Ability <br />Mod</td>
				<td>Temp<br />Score</td>
				<td>Temp<br />Mod</td>
			</tr>
			<tr>
				<td>STR<br /><span class="label">Strength</span></td>
				<td><input type="text" id="STR" size="3" value="0" onChange="setMod(this.value, this.id);" /></td>
				<td><input disabled="disabled" type="text" id="STR_MOD" size="3" /></td
				<td><input disabled="disabled" type="text" id="STR_SCORE_TEMP" size="3" /></td
				<td><input disabled="disabled" type="text" id="STR_MOD_TEMP" size="3" /></td
			</tr>
			<tr>
				<td>DEX<br /><span class="label">Dexterity</span></td>
				<td><input type="text" id="DEX" size="3" value="0" onChange="setMod(this.value, this.id);" /></td>
				<td><input disabled="disabled" type="text" id="DEX_MOD" size="3"  /></td>
				<td><input disabled="disabled" type="text" id="DEX_SCORE_TEMP" size="3" /></td
				<td><input disabled="disabled" type="text" id="DEX_MOD_TEMP" size="3" /></td
			</tr>
			<tr>
				<td>CON<br /><span class="label">Constitution</span></td>
				<td><input type="text" id="CON" size="3" value="0" onChange="setMod(this.value, this.id);" /></td>
				<td><input disabled="disabled" type="text" id="CON_MOD" size="3" /></td>
				<td><input disabled="disabled" type="text" id="CON_SCORE_TEMP" size="3" /></td
				<td><input disabled="disabled" type="text" id="CON_MOD_TEMP" size="3" /></td
			</tr>
			<tr>
				<td>INT<br /><span class="label">Intelligence</span></td>
				<td><input type="text" id="INT" size="3" value="0" onChange="setMod(this.value, this.id);" /></td>
				<td><input disabled="disabled" type="text" id="INT_MOD" size="3" /></td>
				<td><input disabled="disabled" type="text" id="INT_SCORE_TEMP" size="3" /></td
				<td><input disabled="disabled" type="text" id="INT_MOD_TEMP" size="3" /></td
			</tr>
			<tr>
				<td>WIS<br /><span class="label">Wisdom</span></td>
				<td><input type="text" id="WIS" size="3" value="0" onChange="setMod(this.value, this.id);" /></td>
				<td><input disabled="disabled" type="text" id="WIS_MOD" size="3" /></td>
				<td><input disabled="disabled" type="text" id="WIS_SCORE_TEMP" size="3" /></td
				<td><input disabled="disabled" type="text" id="WIS_MOD_TEMP" size="3" /></td
			</tr>
			<tr>
				<td>CHA<br /><span class="label">Charisma</span></td>
				<td><input type="text" id="CHA" size="3" onChange="setMod(this.value, this.id);" /></td>
				<td><input disabled="disabled" type="text" id="CHA_MOD" size="3"  /></td>
				<td><input disabled="disabled" type="text" id="CHA_SCORE_TEMP" size="3" /></td
				<td><input disabled="disabled" type="text" id="CHA_MOD_TEMP" size="3" /></td
			</tr>
		</table>
		<p>
			<input type="submit" name="submit" value = "Create Character">(currently does nothing)
		</p>

		
	
</form>
</div>

<? include('footer.php'); ?>