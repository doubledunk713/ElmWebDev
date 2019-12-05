// JavaScript Document
function updateMe(){
	var clickMe = document.getElementById("tableRow").childNodes;
	clickMe.onclick = editMe;
}

function editMe(){
	var addEvent = document.getElementById("addEvent");
	addEvent.addElement("input")
}