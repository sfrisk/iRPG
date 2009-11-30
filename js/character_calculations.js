window.onload = setup;

var numericExpression = /^[0-9]+$/;

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
	if(race == "HUMAN" || race == "DWARF" || race == "ELF" || race == "HALF-ELF" || race == "HALF-ORC"){
		//size = medium
		document.getElementById('size').value = "MEDIUM";
	}
	else if(race == "GNOME" || race == "HALFLING")
	{
		document.getElementById('size').value = "SMALL";
	}
	else
	{
		document.getElementById('size').value = "NO_SIZE";
	}
}