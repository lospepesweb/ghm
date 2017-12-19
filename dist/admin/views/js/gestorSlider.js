/*=============================================
Arrastrar Imagen
=============================================*/

$("#zonaArrastre-d").on("dragover", function(e){

	e.preventDefault();
	e.stopPropagation();

	$("#zonaArrastre-d").css({"background":"url(views/img/pattern.jpg)"})

})

$('body').on("dragover", function(e){

	e.preventDefault();
	e.stopPropagation();

})

/*=====  Fin Arrastrar Imagen  ======*/

/*==================================
=            Soltar img            =
==================================*/

$('body').on('drop', function(e){

	e.preventDefault();
	e.stopPropagation();
	$('#zonaArrastre-d').css({'background':'white'});
	$('#zonaArrastre-c').css({'background':'white'});

})

$('#zonaArrastre-d').on('drop',function(e){
   
    e.preventDefault(); //previene la accion por defecto del navegador
    e.stopPropagation(); //parar la propagación de un evento
 
    $('#zonaArrastre-d').css({'background':'white'});
 
    var archivo = e.originalEvent.dataTransfer.files;
    var imagen = archivo[0];
 
    var imagenSize = imagen.size; //es una string aunque muestre un número
    var imagenType = imagen.type;

    
	if (Number(imagenSize) > 2097152){//2097152 bytes = 2mb (tamaño maximo permitido)
    	$('.alerta').remove();
    	$('#zonaArrastre-d').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">El peso de la imagen es superior al permitido.</div>');

	} else {
    	
		if(imagenType == 'image/jpeg' || imagenType == 'image/png'){
		
        	$('.alerta').remove();

			var datos = new FormData();
	        datos.append('imagen', imagen);
	        
	        $.ajax({
	            url:"views/ajax/gestorSlider.php",
	            method: "POST",
	            data: datos,
	            cache: false,
	            contentType: false,
	            processData: false,
	            beforeSend: function(){

	                $("#zonaArrastre-d").append('<div class="col-12 col-lg-3 img-container" id="status"><img src="views/img/loader2.gif"></div>');

	            },
	            success: function(respuesta){

	                $("#status").remove();
	                
	                if(respuesta == 0){

	                	$('.alerta').remove();
	                    $("#zonaArrastre-d").after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px"La imagen es inferior al tamaño sugerido.</div>')
	                
	                } else {
	                	$('.alerta').remove();
	                    $("#zonaArrastre-d").css({"height":"auto"});
						$("#zonaArrastre-d").append('<div class="col-12 col-lg-3 img-container"><img src="'+respuesta['ruta']+'" class="img-fluid"><span class="icon-cross"></span></div>');

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
        	$('#zonaArrastre-d').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">El formato del archivo es distinto a los permitidos.</div>');

    	}

    }

})

/*=====  End of Soltar img  ======*/

/*======================================
=            ORDENAR SLIDES            =
======================================*/

var ordenId = [];
var ordenItem = [];

$('#btnModificarOrdenSlides-d').click(function(){

	$(this).hide();
	$('#btnGuardarOrdenSlides-d').show();
	$('#gestorSliderCelular').remove();
	$('.eliminarSlide').remove();

	$('#zonaArrastre-d').css({'cursor':'move'});
	
	$('#zonaArrastre-d').sortable({
		revert: true,
		connectWith: '.imagen',
		handle: '.handleSlide',
		stop: function(event){

			for (var i = 0; i < $('#zonaArrastre-d div').length; i++) {
				
				ordenId[i] = event.target.children[i].id;
				ordenItem[i] = i+1;

			}

		}

	})

})

$('#btnGuardarOrdenSlides-d').click(function(){

	$(this).hide();
	$('#btnModificarOrdenSlides-d').show();

	for (var i = 0; i < $('#zonaArrastre-d div').length; i++) {
				
		var actualizarOrden = new FormData();
		actualizarOrden.append('actualizarOrdenId', ordenId[i]);
		actualizarOrden.append('actualizarOrdenItem', ordenItem[i]);

		$.ajax({
			url: 'views/ajax/gestorSlider.php',
			method: 'POST',
			data: actualizarOrden,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){
				
				$('#zonaArrastre-d').html(respuesta);

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
