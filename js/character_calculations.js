window.onload = setup;

var numericExpression = /^[0-9]+$/;
var formerRace = 'NO_RACE';

function setup(){
	
	document.getElementById('race').addEventListener("change", setRace, false);
	document.getElementById('STR').addEventListener("change", setRawSTR, false);
	document.getElementById('DEX').addEventListener("change", setRawDEX, false);
	document.getElementById('CON').addEventListener("change", setRawCON, false);
	document.getElementById('INT').addEventListener("change", setRawINT, false);
	document.getElementById('WIS').addEventListener("change", setRawWIS, false);
	document.getElementById('CHA').addEventListener("change", setRawCHA, false);
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
	document.getElementById("size").value = "MEDIUM";
}

function setSmall(){
	document.getElementById("size").value = "SMALL";
}

function setNoSize(){
	document.getElementById("size").value = "NO_SIZE";
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
	document.getElementById("GARL_GLITTERGOLD").disabled=true;
}
function setDwarf(){
	//+2 Constitution, -2 Charisma
	//speed = 20ft (this is for medium or heavy armor)
	document.getElementById("SPEED").value = 20;
	setMiscAbility("CON", 2);
	setMiscAbility("CHA", -2)
	setMedium();
}
function setElf(){
	//+2 Dexterity, -2 Constitution
	//speed = 30ft
	document.getElementById("SPEED").value = 30;
	setMiscAbility("DEX", 2);
	setMiscAbility("CON", -2);
	setMedium();
}
function setHalfElf(){
	//No ability adjustments
	//speed = 30ft
	document.getElementById("SPEED").value = 30;
	setMedium();
}
function setHalfOrc(){
	//+2 Strength, -2 Intelligence (INT score must be at least 3), -2 Charisma
	//speed = 30ft
	document.getElementById("SPEED").value = 30;
	setMiscAbility("STR", 2);
	setMiscAbility("INT", -2);
	setMedium();
}
function setGnome(){
	//+2 Constitution, -2 Strength
	//speed = 20ft
	document.getElementById("SPEED").value = 20;
	setMiscAbility("CON", 2);
	setMiscAbility("STR", -2);
	setSmall();
}
function setHalfling(){
	//+2 Dexterity, -2 Strength
	//speed = 20ft
	document.getElementById("SPEED").value = 20;
	setMiscAbility("DEX", 2);
	setMiscAbility("STR", -2);
	setSmall();
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