var Indigo = document.getElementById('indigo');
Indigo.addEventListener('click',()=>(
document.getElementById('prawy').style.backgroundColor = "indigo"
))
var SteelBlue = document.getElementById('steelblue');
SteelBlue.addEventListener('click',()=>(
document.getElementById('prawy').style.backgroundColor = "steelblue"
))
var Olive = document.getElementById('olive');
Olive.addEventListener('click',()=>(
document.getElementById('prawy').style.backgroundColor = "olive"
))
/*
const Fontcolor = document.getElementById('lista');
Fontcolor.addEventListener('change',()=>{
  var Selected = Fontcolor.options[Fontcolor.selectedIndex].value;
  switch (Selected) {
    case 'White':
    document.getElementById('prawy').style.color = Selected;
      break;
    case 'Tan':
    document.getElementById('prawy').style.color = Selected;
      break;
    case 'Bisque':
    document.getElementById('prawy').style.color = Selected;
      break;
      case 'Plum':
      document.getElementById('prawy').style.color = Selected;
        break;
    default:
      document.getElementById('prawy').style.color = Selected;
  }
}
)
*/
function changecolor() { // zmiana koloru czcionki - krótsze niż switch wyżej, stworzenie funkcji i callback listenerem do niej
	var a = document.getElementById('lista').value;
	document.getElementById('prawy').style.color = a;
}
  var Changecolor = document.getElementById('lista');
  Changecolor.addEventListener('change',changecolor);

// zmiana rozmiaru czcionki z użyciem operacji na elemencie
const ChangeSize = document.getElementById('czcionka');
ChangeSize.onchange = function() {
  let Size = document.getElementById('czcionka').value;
  document.getElementById('prawy').style.fontSize = Size;
    console.log("Kliknięto element");
}
// dodawania obramowania zdjęciu
var checked = document.getElementById('box') //input checkbox
checked.addEventListener('change',()=> {
  if(document.getElementById('box').checked) {document.getElementById('zdjecie').style.border = "solid 1px white";}
  else {document.getElementById('zdjecie').style.border = "none";}
}
)
// zmiana punktora starym sposobem(z radio("arg") w html) bez listenera, z listenerem by było https://stackoverflow.com/questions/58606047/how-to-use-on-addeventlistener-on-radio-button-in-plain-javascript
    function radio(arg) {
    if(arg=="dysk") { document.getElementById('lista2').style.listStyleType = "disc"; }
    if(arg=="kwadrat") { document.getElementById('lista2').style.listStyleType = "square"; }
    if(arg=="okrąg") { document.getElementById('lista2').style.listStyleType = "circle"; }
}
