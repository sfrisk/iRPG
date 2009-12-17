// File: basic_character.js
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

window.onload = setup;

var numericExpression = /^[0-9]+$/;
var currentRace = 'HUMAN';
var currentClass = 'BARBARIAN';
var currentAge = 15;
var MinAge = 15;
var MinAgeClass = 1;
var MiddleAge = 35;
var OldAge = 53;
var Venerable = 70;
var Max = 110;

function setup(){
	
	document.getElementById('race').addEventListener("change", setRace, false);
	document.getElementById('class').addEventListener("change", setClass, false);
	document.getElementById('age').addEventListener("change", setAge, false);
	document.getElementById('STR').addEventListener("change", setRawSTR, false);
	document.getElementById('DEX').addEventListener("change", setRawDEX, false);
	document.getElementById('CON').addEventListener("change", setRawCON, false);
	document.getElementById('INT').addEventListener("change", setRawINT, false);
	document.getElementById('WIS').addEventListener("change", setRawWIS, false);
	document.getElementById('CHA').addEventListener("change", setRawCHA, false);
	document.getElementById('roll_dice').onclick = rollDice;
}

//Age adjustments
function setAge()
{
	unsetAge();
	var age = document.getElementById('age').value;
	if(!age.match(numericExpression))
	{
		alert("The value you entered for age is not a valid answer");
		document.getElementById('age').value = MinAge + MinAgeClass;
	}
	else if(age < MinAge + MinAgeClass)
	{
		alert("You can't be that young");
		document.getElementById('age').value = MinAge + MinAgeClass;	
	}
	
	else if(age > MiddleAge && age <= OldAge)
	{
			setMiscAbility("DEX", -1);
			setMiscAbility("STR", -1);
			setMiscAbility("CON", -1);
			setMiscAbility("INT", 1);
			setMiscAbility("WIS", 1);
			setMiscAbility("CHA", 1);
			currentAge = age;		
	}
	else if(age > OldAge && age <= Venerable)	
	{
			setMiscAbility("DEX", -3);
			setMiscAbility("STR", -3);
			setMiscAbility("CON", -3);
			setMiscAbility("INT", 2);
			setMiscAbility("WIS", 2);
			setMiscAbility("CHA", 2);
			currentAge = age;		
	}
	else if(age > Venerable && age <= Max)	
	{
			setMiscAbility("DEX", -6);
			setMiscAbility("STR", -6);
			setMiscAbility("CON", -6);
			setMiscAbility("INT", 3);
			setMiscAbility("WIS", 3);
			setMiscAbility("CHA", 3);
			currentAge = age;		
	}
	else if(age > Max)
	{
		alert("You can't be that old!")
		document.getElementById('age').value = MinAge;	
	}
	else
	{
		currentAge = age;
	}	
}

function unsetAge()
{

	if(currentAge > MiddleAge && currentAge <= OldAge)
	{
			setMiscAbility("DEX", 1);
			setMiscAbility("STR", 1);
			setMiscAbility("CON", 1);
			setMiscAbility("INT", -1);
			setMiscAbility("WIS", -1);
			setMiscAbility("CHA", -1);	
	}
	else if(currentAge > OldAge && currentAge <= Venerable)	
	{
			setMiscAbility("DEX", 3);
			setMiscAbility("STR", 3);
			setMiscAbility("CON", 3);
			setMiscAbility("INT", -2);
			setMiscAbility("WIS", -2);
			setMiscAbility("CHA", -2);	
	}
	else if(currentAge > Venerable && currentAge <= Max)	
	{
			setMiscAbility("DEX", 6);
			setMiscAbility("STR", 6);
			setMiscAbility("CON", 6);
			setMiscAbility("INT", -3);
			setMiscAbility("WIS", -3);
			setMiscAbility("CHA", -3);		
	}
	else{
		//do nothing
	}
}

function setMinAgeClass()
{
	race = document.getElementById("race").value;
	class = document.getElementById("class").value;
	
	if(race == "HUMAN")
	{
		if(class == "BARBARIAN" || class == "ROGUE" || class == "SORCERER")
			MinAgeClass = 1;
		if(class == "BARD" || class == "FIGHTER" || class == "PALADIN" || class == "RANGER")
			MinAgeClass = 1;
		if(class == "CLERIC" || class == "DRUID" || class == "MONK" || class == "WIZARD")
			MinAgeClass = 2;
	}
	
	else if(race == "DWARF")
	{
		if(class == "BARBARIAN" || class == "ROGUE" || class == "SORCERER")
			MinAgeClass = 3;
		if(class == "BARD" || class == "FIGHTER" || class == "PALADIN" || class == "RANGER")
			MinAgeClass = 5;
		if(class == "CLERIC" || class == "DRUID" || class == "MONK" || class == "WIZARD")
			MinAgeClass = 7;		
	}
	
	else if(race == "ELF")
	{
		if(class == "BARBARIAN" || class == "ROGUE" || class == "SORCERER")
			MinAgeClass = 4;
		if(class == "BARD" || class == "FIGHTER" || class == "PALADIN" || class == "RANGER")
			MinAgeClass = 6;
		if(class == "CLERIC" || class == "DRUID" || class == "MONK" || class == "WIZARD")
			MinAgeClass = 10;		
	}
	
	else if(race == "GNOME")
	{
		if(class == "BARBARIAN" || class == "ROGUE" || class == "SORCERER")
			MinAgeClass = 4;
		if(class == "BARD" || class == "FIGHTER" || class == "PALADIN" || class == "RANGER")
			MinAgeClass = 6;
		if(class == "CLERIC" || class == "DRUID" || class == "MONK" || class == "WIZARD")
			MinAgeClass = 9;		
	}
	
	else if(race == "HALF-ELF")
	{
		if(class == "BARBARIAN" || class == "ROGUE" || class == "SORCERER")
			MinAgeClass = 1;
		if(class == "BARD" || class == "FIGHTER" || class == "PALADIN" || class == "RANGER")
			MinAgeClass = 2;
		if(class == "CLERIC" || class == "DRUID" || class == "MONK" || class == "WIZARD")
			MinAgeClass = 3;		
	}
	
	else if(race == "HALF-ORC")
	{
		if(class == "BARBARIAN" || class == "ROGUE" || class == "SORCERER")
			MinAgeClass = 1;
		if(class == "BARD" || class == "FIGHTER" || class == "PALADIN" || class == "RANGER")
			MinAgeClass = 1;
		if(class == "CLERIC" || class == "DRUID" || class == "MONK" || class == "WIZARD")
			MinAgeClass = 2;		
	}
	
	else if(race == "HALFLING")
	{
		if(class == "BARBARIAN" || class == "ROGUE" || class == "SORCERER")
			MinAgeClass = 2;
		if(class == "BARD" || class == "FIGHTER" || class == "PALADIN" || class == "RANGER")
			MinAgeClass = 3;
		if(class == "CLERIC" || class == "DRUID" || class == "MONK" || class == "WIZARD")
			MinAgeClass = 4;		
	}
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
	setMinAgeClass();
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
	currentRace = race;
}

function unsetRace(){

	if(currentRace == "HUMAN"){
		unsetHuman();
	}
	else if (currentRace == "DWARF"){
		unsetDwarf();
	}
	else if(currentRace == "ELF"){
		unsetElf();
	}
	else if(currentRace =="HALF-ELF"){
		unsetHalfElf();
	}
	else if(currentRace =="HALF-ORC"){
		unsetHalfOrc();
	}
	else if(currentRace == "GNOME"){
		unsetGnome();
	}
	else if(currentRace == "HALFLING"){
		unsetHalfling();
	}
}

function setHuman()
{
	MinAge = 15;
	MinAgeClass = 1;
	MiddleAge = 35;
	OldAge = 53;
	Venerable = 70;
	Max = 110;
	setAge();
}
function setDwarf()
{
	setMiscAbility("CON", 2);
	setMiscAbility("CHA", -2)
	MinAge = 40;
	MiddleAge = 125;
	OldAge = 188;
	Venerable = 250;
	Max = 450;
	setAge();
}
function setElf()
{
	setMiscAbility("DEX", 2);
	setMiscAbility("CON", -2);
	MinAge = 110;
	MiddleAge = 175;
	OldAge = 263;
	Venerable = 350;
	Max = 750;
	setAge();
}
function setHalfElf()
{
	MinAge = 20;
	MiddleAge = 62;
	OldAge = 93;
	Venerable = 125;
	Max = 185;
	setAge();
}
function setHalfOrc()
{
	MinAge = 14;
	MiddleAge = 30;
	OldAge = 45;
	Venerable = 60;
	Max = 80;
	setAge();
	setMiscAbility("STR", 2);
	setMiscAbility("INT", -2);
}
function setGnome()
{
	MinAge = 40;
	MiddleAge = 100;
	OldAge = 150;
	Venerable = 200;
	Max = 500;
	setAge();
	setMiscAbility("CON", 2);
	setMiscAbility("STR", -2);
}
function setHalfling()
{
	MinAge = 20;
	MiddleAge = 50;
	OldAge = 75;
	Venerable = 100;
	Max = 200;
	setAge();
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
function setClass()
{
	currentClass = document.getElementById("class").value;
	setMinAgeClass();
	setAge();
}



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