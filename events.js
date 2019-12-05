// JavaScript Document
window.onload = function(){
	var clickMe = document.getElementById("tableRow").childNodes;
	for(index of clickMe) {
		index.onclick = editMe;
	}
}

function editMe(){
	document.getElementById("addEvent").classList.remove("hideMe");
}