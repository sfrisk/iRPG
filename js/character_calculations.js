window.onload = setup;

var numericExpression = /^[0-9]+$/;
var formerRace = 'NO_RACE';
var formerClass = 'NO_CLASS';

function setup(){
	
	document.getElementById('race').addEventListener("change", setRace, false);
	document.getElementById('STR').addEventListener("change", setRawSTR, false);
	document.getElementById('DEX').addEventListener("change", setRawDEX, false);
	document.getElementById('CON').addEventListener("change", setRawCON, false);
	document.getElementById('INT').addEventListener("change", setRawINT, false);
	document.getElementById('WIS').addEventListener("change", setRawWIS, false);
	document.getElementById('CHA').addEventListener("change", setRawCHA, false);
	document.getElementById('class').addEventListener("change", setClass, false);
}

function Adjust(id, amount)
{
	document.getElementById(id).value = parseInt(document.getElementById(id).value) + amount;
}

//Class Stuff

function setClass(){
	var class = document.getElementById('class').value;
	unsetClass();
	if (class == "SORCERER")
		setSorcerer();
	if (class == "WIZARD")
		setWizard();
	if (class == "BARD")
		setBard();
	if (class == "ROGUE")
		setRogue();
	if (class == "CLERIC")
		setCleric();
	if (class == "DRUID")
		setDruid();
	if (class == "MONK")
		setMonk();
	if (class == "RANGER")
		setRanger();
	if (class == "FIGHTER")
		setFighter();
	if (class == "PALADIN")
		setPaladin();
	if (class == "BARBARIAN")
		setBarbarian();
	formerClass = class;
}
function setSorcerer(){
	setHitPoints(4);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 2);
}
function setWizard(){
	setHitPoints(4);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 2);
}
function setBard(){
	setHitPoints(6);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", 2);
	Adjust("WILL_BASE_SAVE", 2);

}
function setRogue(){
	setHitPoints(6);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", 2);
	Adjust("WILL_BASE_SAVE", 0);
}
function setCleric(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 2);

}
function setDruid(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 2);

}
function setMonk(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 2);
	Adjust("REFLEX_BASE_SAVE", 2);
	Adjust("WILL_BASE_SAVE", 2);
}
function setRanger(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", 1);
	Adjust("FORT_BASE_SAVE", 2);
	Adjust("REFLEX_BASE_SAVE", 2);
	Adjust("WILL_BASE_SAVE", 0);
}
function setFighter(){
	setHitPoints(10);
	Adjust("BASE_ATTACK_BONUS", 1);
	Adjust("FORT_BASE_SAVE", 2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 0);
}
function setPaladin(){
	setHitPoints(10);
	Adjust("BASE_ATTACK_BONUS", 1);
	Adjust("FORT_BASE_SAVE", 2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 0);
}
function setBarbarian()
{
	setHitPoints(12);
	Adjust("BASE_ATTACK_BONUS", 1);
	Adjust("FORT_BASE_SAVE", 2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 0);
}

function unsetClass(){
	if (formerClass == "SORCERER")
		unsetSorcerer();
	if (formerClass == "WIZARD")
		unsetWizard();
	if (formerClass == "BARD")
		unsetBard();
	if (formerClass == "ROGUE")
		unsetRogue();
	if (formerClass == "CLERIC")
		unsetCleric();
	if (formerClass == "DRUID")
		unsetDruid();
	if (formerClass == "MONK")
		unsetMonk();
	if (formerClass == "RANGER")
		unsetRanger();
	if (formerClass == "FIGHTER")
		unsetFighter();
	if (formerClass == "PALADIN")
		unsetPaladin();
	if (formerClass == "BARBARIAN")
		unsetBarbarian();
}


function unsetSorcerer(){
	setHitPoints(4);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", -2);
}
function unsetWizard(){
	setHitPoints(4);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", -2);
}
function unsetBard(){
	setHitPoints(6);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", -2);
	Adjust("WILL_BASE_SAVE", -2);

}
function unsetRogue(){
	setHitPoints(6);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", 0);
	Adjust("REFLEX_BASE_SAVE", -2);
	Adjust("WILL_BASE_SAVE", 0);
}
function unsetCleric(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", -2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", -2);

}
function unsetDruid(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", -2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", -2);

}
function unsetMonk(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", 0);
	Adjust("FORT_BASE_SAVE", -2);
	Adjust("REFLEX_BASE_SAVE", -2);
	Adjust("WILL_BASE_SAVE", -2);
}
function unsetRanger(){
	setHitPoints(8);
	Adjust("BASE_ATTACK_BONUS", -1);
	Adjust("FORT_BASE_SAVE", -2);
	Adjust("REFLEX_BASE_SAVE", -2);
	Adjust("WILL_BASE_SAVE", 0);
}
function unsetFighter(){
	setHitPoints(10);
	Adjust("BASE_ATTACK_BONUS", -1);
	Adjust("FORT_BASE_SAVE", -2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 0);
}
function unsetPaladin(){
	setHitPoints(10);
	Adjust("BASE_ATTACK_BONUS", -1);
	Adjust("FORT_BASE_SAVE", -2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 0);
}
function unsetBarbarian()
{
	setHitPoints(12);
	Adjust("BASE_ATTACK_BONUS", -1);
	Adjust("FORT_BASE_SAVE", -2);
	Adjust("REFLEX_BASE_SAVE", 0);
	Adjust("WILL_BASE_SAVE", 0);
}


function setHitPoints(dice){
	document.getElementById("HIT_POINTS").value = dice + parseInt(document.getElementById("CON_MOD0").value);
}

//Modifiers

function setRawSTR(){
	setRawAbility('STR');
}

function setRawDEX(){
	setRawAbility('DEX');
}
function setRawCON(){
	setRawAbility('CON');
}
function setRawINT(){
	setRawAbility('INT');
}
function setRawWIS(){
	setRawAbility('WIS');
}
function setRawCHA(){
	setRawAbility('CHA');
}

function setRawAbility(element){
	
	var ability = document.getElementById(element).value;
	
	if(!ability.match(numericExpression))
	{
		alert("Need a numeric input");
		document.getElementById(element).value = 0;
		return false;
	}
	
	else if(ability > 18)
	{
		alert("Your input is too high for your character level");
		document.getElementById(element).value = 0;
		return false;
	}
	else if(ability < 3)
	{
		alert("Your input is too low for your character level");
		document.getElementById(element).value = 0;
		return false;
	}		
	else
	{
		setMod(element);
	}
}

function setMiscAbility(id, value)
{
	var misc = parseInt(document.getElementById(id+"_MISC").value) + value;
	document.getElementById(id+"_MISC").value = misc;
	setMod(id);
}

function setMod(id)
{
	var total = parseInt(document.getElementById(id).value) + parseInt(document.getElementById(id+"_MISC").value);
	document.getElementById(id+"_TOTAL").value = total;
	var mod = Math.floor(total / 2) - 5;
	var i = 0;
	while(document.getElementById(id+"_MOD"+i) != null)
	{
		document.getElementById(id+"_MOD"+i).value = mod;
		i++;
	}
	
	if (id == "CON")
		setClass();
	
}

function setRace(){
	
	var race = document.getElementById('race').value;
	//races are: HUMAN, DWARF, ELF, HALF-ELF, HALF-ORC, GNOME, HALFLING
	unsetRace();
	if (race == "NO_RACE"){
		setNoRace();
	}

	else if (race == "HUMAN"){
		setHuman();
	}
	else if (race == "DWARF"){
		setDwarf();
	}
	else if (race == "ELF"){
		setElf();
	}
	else if (race =="HALF-ELF"){
		setHalfElf();
	}
	else if (race =="HALF-ORC"){
		setHalfOrc();
	}
	else if (race == "GNOME"){
		setGnome();
	}
	else if (race == "HALFLING"){
		setHalfling();
	}
	formerRace = race;
}

function unsetRace(){
	if (formerRace == "NO_RACE"){
		unsetNoRace();
	}
	else if(formerRace == "HUMAN"){
		unsetHuman();
	}
	else if (formerRace == "DWARF"){
		unsetDwarf();
	}
	else if(formerRace == "ELF"){
		unsetElf();
	}
	else if(formerRace =="HALF-ELF"){
		unsetHalfElf();
	}
	else if(formerRace =="HALF-ORC"){
		unsetHalfOrc();
	}
	else if(formerRace == "GNOME"){
		unsetGnome();
	}
	else if(formerRace == "HALFLING"){
		unsetHalfling();
	}
}

function setMedium(){
	//no size mod
	document.getElementById("size").value = "MEDIUM";
	document.getElementById("SMALL").disabled=true;
	document.getElementById("NO_SIZE").disabled=true;
	document.getElementById("MEDIUM").disabled=false;
	var i = 0;
	while(document.getElementById("SIZE_MOD"+i) != null)
	{
		document.getElementById("SIZE_MOD"+i).value = 0;
		i++;
	}
	
}

function setSmall(){
	
	//size mod = +1
	document.getElementById("size").value = "SMALL";
	document.getElementById("SMALL").disabled=false;
	document.getElementById("NO_SIZE").disabled=true;
	document.getElementById("MEDIUM").disabled=true;
	var i = 0;
	while(document.getElementById("SIZE_MOD"+i) != null)
	{
		document.getElementById("SIZE_MOD"+i).value = 1;
		i++;
	}
}

function setNoSize(){
	
	//no size mod
	document.getElementById("size").value = "NO_SIZE";
	document.getElementById("SMALL").disabled=true;
	document.getElementById("NO_SIZE").disabled=false;
	document.getElementById("MEDIUM").disabled=true;
	var i = 0;
	while(document.getElementById("SIZE_MOD"+i) != null)
	{
		document.getElementById("SIZE_MOD"+i).value = 0;
		i++;
	}
}

function setNoRace(){
	//do nothing
}
function setHuman()
{
	//no ability adjustments
	//speed = 30ft
	setMedium();
	document.getElementById("SPEED").value = 30;
	document.getElementById("RACIAL_TRAITS").value = "HUMAN";
}
function setDwarf(){
	//+2 Constitution, -2 Charisma
	//speed = 20ft (this is for medium or heavy armor)
	document.getElementById("SPEED").value = 20;
	setMiscAbility("CON", 2);
	setMiscAbility("CHA", -2)
	setMedium();
	document.getElementById("RACIAL_TRAITS").value = "Darkvision, Stonecunning, Stability";
}
function setElf(){
	//+2 Dexterity, -2 Constitution
	//speed = 30ft
	document.getElementById("SPEED").value = 30;
	setMiscAbility("DEX", 2);
	setMiscAbility("CON", -2);
	setMedium();
	document.getElementById("RACIAL_TRAITS").value = "Low-light Vision";
}
function setHalfElf(){
	//No ability adjustments
	//speed = 30ft
	document.getElementById("SPEED").value = 30;
	setMedium();
	document.getElementById("RACIAL_TRAITS").value = "Immunity to sleep spells, Low-light Vision, Elven Blood";
}
function setHalfOrc(){
	//+2 Strength, -2 Intelligence (INT score must be at least 3), -2 Charisma
	//speed = 30ft
	document.getElementById("SPEED").value = 30;
	setMiscAbility("STR", 2);
	setMiscAbility("INT", -2);
	setMedium();
	document.getElementById("RACIAL_TRAITS").value = "Darkvision, Orc Blood";
}
function setGnome(){
	//+2 Constitution, -2 Strength
	//speed = 20ft
	document.getElementById("SPEED").value = 20;
	setMiscAbility("CON", 2);
	setMiscAbility("STR", -2);
	setSmall();
	document.getElementById("RACIAL_TRAITS").value = "Low-Light Vision, +1 bonus on attack rolls against kobolds and goblinoids";
}
function setHalfling(){
	//+2 Dexterity, -2 Strength
	//speed = 20ft
	document.getElementById("SPEED").value = 20;
	setMiscAbility("DEX", 2);
	setMiscAbility("STR", -2);
	document.getElementById("FORT_MISC_MOD").value = parseInt(document.getElementById("FORT_MISC_MOD").value) + 1;
	document.getElementById("REFLEX_MISC_MOD").value = parseInt(document.getElementById("REFLEX_MISC_MOD").value) + 1;
	document.getElementById("WILL_MISC_MOD").value = parseInt(document.getElementById("WILL_MISC_MOD").value) + 1;	
	setSmall();
	document.getElementById("RACIAL_TRAITS").value = "HALFLING";
}

function unsetNoRace(){
	//do nothing
}
function unsetHuman(){
	setNoSize();
}
function unsetDwarf(){
	setNoSize();
	setMiscAbility("CON", -2);
	setMiscAbility("CHA", 2)
}
function unsetElf(){
	setMiscAbility("DEX", -2);
	setMiscAbility("CON", 2);
	setNoSize();	
}
function unsetHalfElf(){
	setNoSize();	
}
function unsetHalfOrc(){
	setMiscAbility("STR", -2);
	setMiscAbility("INT", 2);
	setNoSize();	
}
function unsetGnome(){
	setMiscAbility("CON", -2);
	setMiscAbility("STR", 2);
	setNoSize();	
}
function unsetHalfling(){
	setNoSize();	
	setMiscAbility("DEX", -2);
	setMiscAbility("STR", 2);
}