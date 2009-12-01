window.onload = setup;

var numericExpression = /^[0-9]+$/;
var formerRace = 'NO_RACE';

function setup(){
	
	document.getElementById('race').addEventListener("change", setRace, false);
	document.getElementById('STR').addEventListener("change", setSTRMod, false);
	document.getElementById('DEX').addEventListener("change", setDEXMod, false);
	document.getElementById('CON').addEventListener("change", setCONMod, false);
	document.getElementById('INT').addEventListener("change", setINTMod, false);
	document.getElementById('WIS').addEventListener("change", setWISMod, false);
	document.getElementById('CHA').addEventListener("change", setCHAMod, false);
}



//Modifiers

function setSTRMod(){
	setMod('STR');
}

function setDEXMod(){
	setMod('DEX');
}
function setCONMod(){
	setMod('CON');
}
function setINTMod(){
	setMod('INT');
}
function setWISMod(){
	setMod('WIS');
}
function setCHAMod(){
	setMod('CHA');
}

function setMod(element){
	
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
		var total = parseInt(ability) + parseInt(document.getElementById(element+"_MISC").value);
		document.getElementById(element+"_TOTAL").value = total;
		var mod = Math.floor(total / 2) - 5;
		var i = 0;
		while(document.getElementById(element+"_MOD"+i) != null)
		{
			document.getElementById(element+"_MOD"+i).value = mod;
			i++;
		}
	}
}

function setRace(){
	
	var race = document.getElementById('race').value;
	//races are: HUMAN, DWARF, ELF, HALF-ELF, HALF-ORC, GNOME, HALFLING
//	unsetRace();
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
	document.getElementById("SPEED").value = "30ft";
	document.getElementById("GARL_GLITTERGOLD").disabled=true;
}
function setDwarf(){
	//+2 Constitution, -2 Charisma
	//speed = 20ft (this is for medium or heavy armor)
	document.getElementById("SPEED").value = "20ft";
	setMedium();
}
function setElf(){
	//+2 Dexterity, -2 Constitution
	//speed = 30ft
	document.getElementById("SPEED").value = "30ft";
	setMedium();
}
function setHalfElf(){
	//No ability adjustments
	//speed = 30ft
	document.getElementById("SPEED").value = "30ft";
	setMedium();
}
function setHalfOrc(){
	//+2 Strength, -2 Intelligence (INT score must be at least 3), -2 Charisma
	//speed = 30ft
	document.getElementById("SPEED").value = "30ft";
	setMedium();
}
function setGnome(){
	//+2 Constitution, -2 Strength
	//speed = 20ft
	document.getElementById("SPEED").value = "20ft";
	setSmall();
}
function setHalfling(){
	//+2 Dexterity, -2 Strength
	//speed = 20ft
	document.getElementById("SPEED").value = "20ft";
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
}
function unsetElf(){
	setNoSize();	
}
function unsetHalfElf(){
	setNoSize();	
}
function unsetHalfOrc(){
	setNoSize();	
}
function unsetGnome(){
	setNoSize();	
}
function unsetHalfling(){
	setNoSize();	
}