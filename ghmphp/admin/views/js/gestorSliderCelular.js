/*=============================================
Arrastrar Imagen
=============================================*/

$("#zonaArrastre-c").on("dragover", function(e){

	e.preventDefault();
	e.stopPropagation();

	$("#zonaArrastre-c").css({"background":"url(views/img/pattern.jpg)"})

})

/*=====  Fin Arrastrar Imagen  ======*/

/*==================================
=            Soltar img            =
==================================*/

$('#zonaArrastre-c').on('drop',function(e){
   
    e.preventDefault(); //previene la accion por defecto del navegador
    e.stopPropagation(); //parar la propagación de un evento
 
    $('#zonaArrastre-c').css({'background':'white'});
 
    var archivo = e.originalEvent.dataTransfer.files;
    var imagen = archivo[0];
 
    var imagenSize = imagen.size; //es una string aunque muestre un número
    var imagenType = imagen.type;

    
	if (Number(imagenSize) > 819200){//819200 bytes = 800kb (tamaño maximo permitido)
    	$('.alerta').remove();
    	$('#zonaArrastre-c').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">El peso de la imagen es superior al permitido.</div>');

	} else {
    	
		if(imagenType == 'image/jpeg' || imagenType == 'image/png'){
		
        	$('.alerta').remove();

			var datos = new FormData();
	        datos.append('imagen', imagen);
	        
	        $.ajax({
	            url:"views/ajax/gestorSliderCelular.php",
	            method: "POST",
	            data: datos,
	            cache: false,
	            contentType: false,
	            processData: false,
	            beforeSend: function(){

	                $("#zonaArrastre-c").append('<div class="col-12 col-lg-3 img-container" id="status"><img src="views/img/loader2.gif"></div>');

	            },
	            success: function(respuesta){

	                $("#status").remove();
	                
	                if(respuesta == 0){

	                	$('.alerta').remove();
	                    $("#zonaArrastre-c").after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px"La imagen es inferior al tamaño sugerido.</div>');
	                
	                } else {
	                	$('.alerta').remove();
	                    $("#zonaArrastre-c").css({"height":"auto"});
						$("#zonaArrastre-c").append('<div class="col-12 col-lg-3 img-container"><img src="'+respuesta['ruta']+'" class="img-fluid"><span class="icon-cross"></span></div>');

						swal({
							title: "¡OK!",
							text: "¡La imagen se subió correctamente!",
							type: "success",
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						},
						function(isConfirm){
							if (isConfirm){
								window.location = "slider";
							}
						});	
	                
	                }
	            
	            }
	       
	        });
			    	
    	} else {

			$('.alerta').remove();
        	$('#zonaArrastre-c').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">El formato del archivo es distinto a los permitidos.</div>');

    	}

    }

	$("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
	
})

/*=====  End of Soltar img  ======*/

/*======================================
=            ORDENAR SLIDES            =
======================================*/

var ordenId = [];
var ordenItem = [];

$('#btnModificarOrdenSlides-c').click(function(){

	$(this).hide();
	$('#btnGuardarOrdenSlides-c').show();
	$('#gestorSliderDesktop').remove();
	$('.eliminarSlide-c').remove();

	$('#zonaArrastre-c').css({'cursor':'move'});
	
	$('#zonaArrastre-c').sortable({
		revert: true,
		connectWith: '.imagen-c',
		handle: '.handleSlide-c',
		stop: function(event){

			for (var i = 0; i < $('#zonaArrastre-c div').length; i++) {
				
				ordenId[i] = event.target.children[i].id;
				ordenItem[i] = i+1;

			}

		}

	})

})

$('#btnGuardarOrdenSlides-c').click(function(){

	$(this).hide();
	$('#btnModificarOrdenSlides-c').show();

	for (var i = 0; i < $('#zonaArrastre-c div').length; i++) {
				
		var actualizarOrden = new FormData();
		actualizarOrden.append('actualizarOrdenId', ordenId[i]);
		actualizarOrden.append('actualizarOrdenItem', ordenItem[i]);

		$.ajax({
			url: 'views/ajax/gestorSliderCelular.php',
			method: 'POST',
			data: actualizarOrden,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){
				
				$('#zonaArrastre-c').html(respuesta);

				swal({
					title: '¡OK!',
					text: '¡El orden de ha actualizado correctamente!',
					type: 'success',
					confirmButtonText: 'Cerrar',
					closeOnConfirm: false
				},
				function(isConfirm){
					if(isConfirm){
						window.location = 'slider';
					}
				});
			}

		})

	}

})

/*=====  End of ORDENAR SLIDES  ======*/