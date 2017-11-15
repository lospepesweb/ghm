// -------------------------------------
//         SCRIPTS FRONT-END
// -------------------------------------

// CONTENIDO:
// Animación del menú hamburgesa
// Configuración personalizada del slider



// --- BOTÓN SELECTOR DE IDIOMA --- //

// //VARIABLES
// var esp = document.getElementById("langEsp");
// var	eng = document.getElementById("langEng");

// // FUNCIONES
// function claseIdiomaEsp(){
// 	if(esp.className == "lang") {
// 		esp.className = "lang active";
// 		eng.className = "lang";
// 	}
// }

// function claseIdiomaEng(){
// 	if(eng.className == "lang") {
// 		eng.className = "lang active";
// 		esp.className = "lang";
// 	}
// }

// // EVENTOS
// esp.addEventListener("click", claseIdiomaEsp);
// eng.addEventListener("click", claseIdiomaEng);

/*================================================
=            BOTÓN SELECTRO DE IDIOMA            =
================================================*/

$('#langEsp').click(function(){
	if($('#langEng').hasClass('active')){
		$('#langEsp').toggleClass('active');
		$('#langEng').toggleClass('active');
 	}
})

$('#langEng').click(function(){
	if($('#langEsp').hasClass('active')){
		$('#langEng').toggleClass('active');
		$('#langEsp').toggleClass('active');
 	}
})

/*=====  End of BOTÓN SELECTRO DE IDIOMA  ======*/






// --- ANIMACIÓN DEL MENU HAMBURGUESA --- //

// // VARIABLES
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

/*=======================================================
=            ANIMACIÓN DEL BOTÓN HAMBURGUESA            =
=======================================================*/

$('#nav-icon').click(function(){

	if($(this).hasClass('open')){
		$(this).toggleClass('open');
	} else {
		$(this).toggleClass('open');
	}

})

/*=====  End of ANIMACIÓN DEL BOTÓN HAMBURGUESA  ======*/




// --- CONFIGURACIÓN PERSONALIZADA DEL SLIDER --- //

$('.carousel').carousel({
  interval: 4000,
  pause: false
})