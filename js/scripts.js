// -------------------------------------
//         SCRIPTS FRONT-END
// -------------------------------------

// CONTENIDO:
// Animación del menú hamburgesa
// Configuración personalizada del slider



// --- BOTÓN SELECTOR DE IDIOMA --- //

// VARIABLES
var esp = document.getElementById("langEsp");
var	eng = document.getElementById("langEng");

// FUNCIONES
function claseIdiomaEsp(){
	if(esp.className == "lang") {
		esp.className = "lang active";
		eng.className = "lang";
	}
}

function claseIdiomaEng(){
	if(eng.className == "lang") {
		eng.className = "lang active";
		esp.className = "lang";
	}
}
// EVENTOS
esp.addEventListener("click", claseIdiomaEsp);
eng.addEventListener("click", claseIdiomaEng);



// --- ANIMACIÓN DEL MENU HAMBURGUESA --- //

// VARIABLES
var icon = document.getElementById("nav-icon");

// FUNCIONES
function agregarClase(){
	if(icon.className == "nav-icon") {
		icon.className = "nav-icon open";
	} else {
		icon.className = "nav-icon";
	}
}

// EVENTOS
icon.addEventListener("click", agregarClase);



// --- CONFIGURACIÓN PERSONALIZADA DEL SLIDER --- //

$('.carousel').carousel({
  interval: 5000,
  pause: false
})




