// -------------------------------------
//         SCRIPTS FRONT-END
// -------------------------------------

// CONTENIDO:
// Animación del menú hamburgesa
// Configuración personalizada del slider


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




// --- MARGIN-BOTTOM DE MENÚ PARA MOVILES --- //

// VARIABLES
var anchoPantalla = window.innerWidth;
var alturaPantalla = window.innerHeight;
var marginBottom = ((alturaPantalla - 398));
var divLang = document.getElementById("lang-container");

// FUNCIONES
if (anchoPantalla < 991) {
	divLang.setAttribute("style","margin-bottom:"+marginBottom+"px !important");
}



// ---  --- //

// VARIABLES
$('#closeNav1').click(function(){

	if($(this).hasClass('open')){
		$(this).toggleClass('open');
	} else {
		$(this).toggleClass('open');
	}

})

