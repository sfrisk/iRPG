// File: character_ajax.js
// Name: Sarah Frisk
// Class: CS 297, Fall 2009
// Project 10
// Due date: December 16

window.onload = setup;
var ajax = new XMLHttpRequest();
ajax.open("GET", "character_list.php", false)
ajax.send(null);
var table;

function setup(){
	showCharacters();
}

function showCharacters(){
	//adds characters from XML to page's table
	var characters = ajax.responseXML.getElementsByTagName("character");
	table = document.createElement('table');
	table.id = ("CharacterTable");
	
	var row = document.createElement("tr");
	table.appendChild(row);
	
	var name = document.createElement("td");
	name.id = "display";
	var class = document.createElement("td");
	class.id = "display";
	var level = document.createElement("td");
	level.id = "display";
	var gender = document.createElement("td");
	gender.id = "display";
	var race = document.createElement("td");
	race.id = "display";
	var age = document.createElement("td");
	age.id = "display";
	var alignment = document.createElement("td");
	alignment.id = "display";
	var diety = document.createElement("td");
	diety.id = "display";

	row.appendChild(name);
	row.appendChild(class);
	row.appendChild(level);
	row.appendChild(gender);
	row.appendChild(race);
	row.appendChild(age);
	row.appendChild(alignment);
	row.appendChild(diety);
	
	name.appendChild(document.createTextNode("Name"));
	class.appendChild(document.createTextNode("Class"));
	level.appendChild(document.createTextNode("Level"));
	gender.appendChild(document.createTextNode("Gender"));
	race.appendChild(document.createTextNode("Race"));
	age.appendChild(document.createTextNode("Age"));
	alignment.appendChild(document.createTextNode("Alignment"));
	diety.appendChild(document.createTextNode("Diety"));
	
	for(var i = 0; i < characters.length; i++)
	{
		var row = document.createElement("tr");
		table.appendChild(row);
		
		var nameNode = characters[i].getElementsByTagName("name")[0];
		var classNode = characters[i].getElementsByTagName("class")[0];
		var levelNode = characters[i].getElementsByTagName("level")[0];
		var genderNode = characters[i].getElementsByTagName("gender")[0];
		var raceNode = characters[i].getElementsByTagName("race")[0];
		var ageNode = characters[i].getElementsByTagName("age")[0];
		var alignmentNode = characters[i].getElementsByTagName("alignment")[0];
		var dietyNode = characters[i].getElementsByTagName("diety")[0];
		
		var name_value = document.createTextNode(nameNode.firstChild.nodeValue);
		var class_value = document.createTextNode(classNode.firstChild.nodeValue);
		var level_value = document.createTextNode(levelNode.firstChild.nodeValue);
		var gender_value = document.createTextNode(genderNode.firstChild.nodeValue);
		var race_value = document.createTextNode(raceNode.firstChild.nodeValue);
		var age_value = document.createTextNode(ageNode.firstChild.nodeValue);
		var alignment_value = document.createTextNode(alignmentNode.firstChild.nodeValue);
		var diety_value = document.createTextNode(dietyNode.firstChild.nodeValue);
		
		var name = document.createElement("td");
		var class = document.createElement("td");
		var level = document.createElement("td");
		var gender = document.createElement("td");
		var race = document.createElement("td");
		var age = document.createElement("td");
		var alignment = document.createElement("td");
		var diety = document.createElement("td");
		
		row.appendChild(name);
		row.appendChild(class);
		row.appendChild(level);
		row.appendChild(gender);
		row.appendChild(race);
		row.appendChild(age);
		row.appendChild(alignment);
		row.appendChild(diety);
		
		name.appendChild(name_value);
		class.appendChild(class_value);
		level.appendChild(level_value);
		gender.appendChild(gender_value);
		race.appendChild(race_value);
		age.appendChild(age_value);
		alignment.appendChild(alignment_value);
		diety.appendChild(diety_value);
	}
	
	document.getElementById("characterblock").appendChild(table);
	
}
	
