// File: basic_character.js
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

window.onload = setup;

var numericExpression = /^[0-9]+$/;
var formerRace = 'HUMAN';
var formerClass = 'BARBARIAN';

function setup(){
	
	document.getElementById('race').addEventListener("change", setRace, false);
	document.getElementById('class').addEventListener("change", setClass, false);
	document.getElementById('STR').addEventListener("change", setRawSTR, false);
	document.getElementById('DEX').addEventListener("change", setRawDEX, false);
	document.getElementById('CON').addEventListener("change", setRawCON, false);
	document.getElementById('INT').addEventListener("change", setRawINT, false);
	document.getElementById('WIS').addEventListener("change", setRawWIS, false);
	document.getElementById('CHA').addEventListener("change", setRawCHA, false);
	document.getElementById('roll_dice').onclick = rollDice;
}

//Dice Roll
function rollDice()
{
	var abilities = new Array("STR", "DEX", "CON", "INT", "WIS", "CHA")
	var i = 0;
	var j = 0;
	for(i = 0; i < 6; i++)
	{
		var dice = new Array(Math.floor(Math.random()*6 + 1), Math.floor(Math.random()*6 + 1), Math.floor(Math.random()*6 + 1), Math.floor(Math.random()*6 + 1));
		var min = 0
		for (j = 0; j < dice.length; j++)
		{
			if (dice[min] > dice[j])
				min = j;
		}
		var total = 0;
		for (j = 0; j < dice.length; j++)
		{
			if (j != min)
				total = total + dice[j];
		}
		document.getElementById(abilities[i]).value = total;
		setMod(abilities[i]);
	}
}

// Race Adjusts Ability
function setRace(){
	
	var race = document.getElementById('race').value;
	//races are: HUMAN, DWARF, ELF, HALF-ELF, HALF-ORC, GNOME, HALFLING
	unsetRace();

	if (race == "HUMAN"){
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

	if(formerRace == "HUMAN"){
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

function setHuman()
{

}
function setDwarf()
{
	setMiscAbility("CON", 2);
	setMiscAbility("CHA", -2)
}
function setElf()
{
	setMiscAbility("DEX", 2);
	setMiscAbility("CON", -2);
}
function setHalfElf()
{

}
function setHalfOrc()
{
	setMiscAbility("STR", 2);
	setMiscAbility("INT", -2);
}
function setGnome()
{
	setMiscAbility("CON", 2);
	setMiscAbility("STR", -2);
}
function setHalfling()
{
	setMiscAbility("DEX", 2);
	setMiscAbility("STR", -2);
}

function unsetHuman()
{
}
function unsetDwarf(){
	setMiscAbility("CON", -2);
	setMiscAbility("CHA", 2)
}
function unsetElf(){
	setMiscAbility("DEX", -2);
	setMiscAbility("CON", 2);	
}
function unsetHalfElf(){
		
}
function unsetHalfOrc(){
	setMiscAbility("STR", -2);
	setMiscAbility("INT", 2);	
}
function unsetGnome(){
	setMiscAbility("CON", -2);
	setMiscAbility("STR", 2);	
}
function unsetHalfling(){	
	setMiscAbility("DEX", -2);
	setMiscAbility("STR", 2);
}


// Class Adjusts? (I know bard can't be lawful... check this)
// also adjusts HP, 



//Ability adjustments

function setMiscAbility(id, value)
{
	var misc = parseInt(document.getElementById(id+"_MISC").value) + value;
	document.getElementById(id+"_MISC").value = misc;
	setMod(id);
}

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

function setRawAbility(element)
{
	var ability = document.getElementById(element).value;
	
	if(!ability.match(numericExpression))
	{
		alert("Need a numeric input");
		document.getElementById(element).value = 10;
		return false;
	}
	
	else if(ability > 18) //assuming that we're always starting with a level one character
	{
		alert("Your input is too high for your character level");
		document.getElementById(element).value = 10;
		return false;
	}
	
	else if(ability < 3)
	{
		alert("Your input is too low for your character level");
		document.getElementById(element).value = 10;
		return false
	}
	
	else
	{
		setMod(element);
	}
}

function setMod(id)
{
	var total = parseInt(document.getElementById(id).value) + parseInt(document.getElementById(id+"_MISC").value);
	document.getElementById(id+"_TOTAL").value = total;
	var mod = Math.floor(total / 2) - 5;
	document.getElementById(id+"_MOD").value = mod;
}