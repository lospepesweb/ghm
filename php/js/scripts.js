// -------------------------------------
//         SCRIPTS FRONT-END
// -------------------------------------

// CONTENIDO:
// Animación del menú hamburgesa
// Configuración personalizada del slider



// --- ANIMACIÓN DEL MENU HAMBURGUESA --- //

// VARIABLES
// var icon = document.getElementById("nav-icon");

// // FUNCIONES
// function agregarClase(){
// 	if(icon.className == "nav-icon") {
// 		icon.className = "nav-icon open";
// 	} else {
// 		icon.className = "nav-icon";
// 	}
// }

// // EVENTOS
// icon.addEventListener("click", agregarClase);

$('#nav-icon').click(function(){
	if($('#nav-icon').className == "nav-icon") {
		$('#nav-icon').className = "nav-icon open";
	} else {
		$('#nav-icon').className = "nav-icon";
	}
})



// --- CONFIGURACIÓN PERSONALIZADA DEL SLIDER --- //

// $('.carousel').carousel({
//   interval: 5000,
//   pause: false
// })

$(document).ready(function() {
	  $('.flexslider').flexslider({
	    slideShow: true,
	    slideshowSpeed: 3000,
	    pauseOnAction: false,
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    reverse: true,
	    useCSS: false
	  });
});