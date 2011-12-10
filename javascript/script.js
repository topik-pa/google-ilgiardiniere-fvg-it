/*
script.js
Script vari
Autore: Marco Pavan - pavan.marco@email.it
Data: 22 sett 2010
*/
function randomImage() {	//Script per visualizzare una immagine casuale tra quelle presenti nella cartella randomImages

	var chosenImage = new Array();		//Creazione dell'array contanente le immagini
	chosenImage[1]="fakeO.jpg";
	chosenImage[2]="fakeV.jpg";
	chosenImage[3]="logo.png";
	
	var chosenAltCopy = new Array();	//Creazione dell'array contenente le descrizioni testuali delle immagini
	chosenAltCopy[1] = "Alt text 1";
	chosenAltCopy[2] = "Alt text 2";
	chosenAltCopy[3] = "Alt text 3";
	
	var getRandom = Math.ceil(Math.random()*chosenImage.length)	//Creazione di un numero casuale
	if(getRandom==0) {
		getRandom=1;
	}
	
	//Creo il tag dell'immagine...
	document.write('<img src=\"randomImages/' + chosenImage[getRandom] + '"alt=\"' + chosenAltCopy[getRandom] + '\" width=\"300\" height=\"300\" class=\"imageRandom\" />');
}
