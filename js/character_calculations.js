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
		var mod = Math.floor(ability / 2) - 5;
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
	unsetRace();
	if (race == "NO_RACE"){
		setNoRace;
	}

	if (race == "HUMAN"){
		setHuman;
	}
	if (race == "DWARF"){
		setDwarf;
	}
	if (race == "ELF"){
		setElf;
	}
	if (race =="HALF-ELF"){
		setHalfElf;
	}
	if (race =="HALF-ORC"){
		setHalfOrc;
	}
	if (race == "GNOME"){
		setGnome;
	}
	if (race == "HALFLING"){
		setHalfling;
	}
	formerRace = race;
}

function unsetRace(){
	if (formerRace == "NO_RACE"){
		unsetNoRace;
	}

	if (formerRace == "HUMAN"){
		unsetHuman;
	}
	if (formerRace == "DWARF"){
		unsetDwarf;
	}
	if (formerRace == "ELF"){
		unsetElf;
	}
	if (formerRace =="HALF-ELF"){
		unsetHalfElf;
	}
	if (formerRace =="HALF-ORC"){
		unsetHalfOrc;
	}
	if (formerRace == "GNOME"){
		unsetGnome;
	}
	if (formerRace == "HALFLING"){
		unsetHalfling;
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
function setHuman(){
	setMedium;
}
function setDwarf(){
	setMedium;
}
function setElf(){
	setMedium;
}
function setHalfElf(){
	setMedium;
}
function setHalfOrc(){
	setMedium;
}
function setGnome(){
	setSmall;
}
function setHalfling(){
	setSmall;
}

function unsetNoRace(){
	//do nothing
}
function unsetHuman(){
	setNoSize;
}
function unsetDwarf(){
	setNoSize;
}
function unsetElf(){
	setNoSize;	
}
function unsetHalfElf(){
	setNoSize;	
}
function unsetHalfOrc(){
	setNoSize;	
}
function unsetGnome(){
	setNoSize;	
}
function unsetHalfling(){
	setNoSize;	
}