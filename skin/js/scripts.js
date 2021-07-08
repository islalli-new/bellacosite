// Cola menu
window.onscroll = function() {colamenu()}

var objcolado = document.getElementById("topocolado")
var notopo = objcolado.offsetTop

var alturaobjcolado = objcolado.offsetHeight

function colamenu() {
  var classbody = document.querySelector("body")
  if (window.pageYOffset > notopo) {
    classbody.classList.add("colado")
  } else {
    classbody.classList.remove("colado")
  }
}

//Classe menu no body
function togglemenu() {
   var classbody = document.querySelector("body")
   classbody.classList.toggle("menu-open")
}

//Abre menu orcamento
function slideorca() {
   var classbody = document.querySelector("body")
   classbody.classList.toggle("orca-open")
}