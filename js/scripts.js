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

	$(this).toggleClass('open');

	if($('.navClose-link').children().hasClass("open")){
		$('.navClose-link').children().toggleClass("open");
	}

})

$('.navClose-link').click(function(){
	$(this).children().toggleClass("open")
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

var portada = document.getElementById("portada");
var intro = document.getElementById("intro");
var huevo = document.getElementById("huevo");

var alturaIntro = intro.offsetHeight;
var paddingIntro = ((portada.offsetHeight - alturaIntro - 226) / 2);
var alturaHuevo = huevo.offsetHeight;
var paddingHuevo = ((portada.offsetHeight - alturaHuevo - 35) / 2);

intro.setAttribute("style","padding-bottom:"+paddingIntro+"px !important; padding-top:"+paddingIntro+"px !important");
huevo.setAttribute("style","padding-bottom:"+paddingHuevo+"px !important; padding-top:"+paddingHuevo+"px !important");