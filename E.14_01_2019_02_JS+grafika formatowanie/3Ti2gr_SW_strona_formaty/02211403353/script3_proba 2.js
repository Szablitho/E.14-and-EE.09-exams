
function formatRed() {
	document.getElementById('text').style.color = "red";
}
function formatBlue() {
	document.getElementById('text').style.color = "blue";
}
function formatGreen() {
	document.getElementById('text').style.color = "green";
}

const button = document.querySelector("#red");
button.addEventListener('click', formatRed,formatStyle)

const buttonBlue = document.querySelector("#blue");
buttonBlue.addEventListener('click', formatBlue)

const buttonGreen = document.querySelector("#green");
buttonGreen.addEventListener('click', formatGreen)

function formatStyle() {
	var size = document.getElementById('size').value;
	document.getElementById("text").style.fontSize = size;
	var selected = document.getElementById('justify').value;
	if(selected==1) {
		document.getElementById("text").style.fontStyle ="normal";
	}
	else {document.getElementById("text").style.fontStyle ="italic";}
}
const buttons = document.querySelector(".button");
buttons.addEventListener('click', formatStyle)