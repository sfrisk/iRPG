

//Modifiers
function setMod(value, id){
	var mod = Math.floor(value / 2) - 5;
	alert(mod);
	document.getElementById(id +"_MOD").value = mod;
}