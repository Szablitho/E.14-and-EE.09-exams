/*function kolor(kolor) {document.getElementsByTagName('p')[0].Color=kolor;} */
function kolorRed() {
	document.getElementById('text').style.color = 'red'; /* nadanie koloru na sztywno */
	var size = document.getElementById("size").value; /* pobranie rozmiaru z formularza */
	document.getElementById('text').style.fontSize=size+'%'; /* nadanie rozmariu tekstowi biorąc wartosc z wczesniej */
	var asd = document.getElementById('justify').options[document.getElementById('justify').selectedIndex].value;
	if(asd == 1) { document.getElementById('text').style.fontStyle='normal'; }
	else { document.getElementById('text').style.fontStyle='italic';}


}
function kolorBlue() { 
	document.getElementById('text').style.color = 'blue';
	var size = document.getElementById("size").value; /* pobranie rozmiaru z formularza */
	document.getElementById('text').style.fontSize=size+'%'; /* nadanie rozmariu tekstowi biorąc wartosc z wczesniej */
	var asd = document.getElementById('justify').options[document.getElementById('justify').selectedIndex].value;
	if(asd == 1) { document.getElementById('text').style.fontStyle='normal'; }
	else { document.getElementById('text').style.fontStyle='italic';}
}
function kolorGreen() {
	document.getElementById('text').style.color = 'green';
	var size = document.getElementById("size").value; /* pobranie rozmiaru z formularza */
	document.getElementById('text').style.fontSize=size+'%'; /* nadanie rozmariu tekstowi biorąc wartosc z wczesniej */
	var asd = document.getElementById('justify').options[document.getElementById('justify').selectedIndex].value; /*przechowanie indexu z formularza wyboru w zmiennej*/
	if(asd == 1) { document.getElementById('text').style.fontStyle='normal'; } /* jesli index 1(czyli tekst prosty na stronie) to ustawia go na normal)*/
	else { document.getElementById('text').style.fontStyle='italic';} /* jesli index inny(czyli wybranie opcji kursywa  na stronie) to ustawia go na italic)*/
}
