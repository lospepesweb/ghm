// -------------------------------------
//         SCRIPTS FRONT-END
// -------------------------------------

// CONTENIDO:
// Animación del menú hamburgesa
// Configuración personaliza del slider



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
  interval: 2000,
  pause: false
})