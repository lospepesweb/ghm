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
		$('.navClose-link').children().removeClass("open");
	}

})

$('.navClose-link').click(function(e){
	
	var id = e.target.id;

	$('.navClose-link').children().removeClass("open");
	
	if(!$('#'+id).parent().hasClass('show')){
		$('#'+id).children().addClass('open');
	} else {
		$('#'+id).children().removeClass('open');
	}

})


/*=====  End of ANIMACIÓN DEL BOTÓN HAMBURGUESA  ======*/




/*=======================================================
=        CONFIGURACION PERSONALIZADA DEL SLIDER         =
=======================================================*/

$('.carousel').carousel({
  interval: 4000,
  pause: false
})

/*===  End of CONFIGURACION PERSONALIZADA DEL SLIDER  ====*/


/*=======================================================
=             MARGIN BOOTOM DEL MENU MOVIL              =
=======================================================*/

// VARIABLES
var anchoPantalla = window.innerWidth;
var alturaPantalla = window.innerHeight;
var marginBottom = ((alturaPantalla - 398) - 60); // El 398 es el alto del header y el 60 es el margin-top que tiene el .navbar-nav
var divLang = document.getElementById("lang-container");

// FUNCIONES
if (anchoPantalla < 991) {
	divLang.setAttribute("style","margin-bottom:"+marginBottom+"px !important");
}

/*====  End of MARGIN BOOTOM DEL MENU MOVI  ====*/


/*=======================================================
=            PADDING DE SECCIONES DEL INDEX             =
=======================================================*/

var portada = document.getElementById("portada");
var intro = document.getElementById("intro");
var huevo = document.getElementById("huevo");

var alturaPortada = portada.offsetHeight;
var alturaIntro = intro.offsetHeight;
var alturaHuevo = huevo.offsetHeight;

var relacion = 0.75;

var paddingIntro = (((alturaPortada * relacion) - alturaIntro) / 2);
var paddingHuevo = (((alturaPortada * relacion) - alturaHuevo) / 2);

intro.setAttribute("style","padding-bottom:"+paddingIntro+"px !important; padding-top:"+paddingIntro+"px !important");
huevo.setAttribute("style","padding-bottom:"+paddingHuevo+"px !important; padding-top:"+paddingHuevo+"px !important");

/*====  End of PADDING DE SECCIONES DEL INDEX  ====*/