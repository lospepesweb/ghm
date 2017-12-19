/*=============================================================
=            mostrar formulario de carga de videos            =
=============================================================*/
$('#btnCargaVideos').click(function(){
	$('#divCargaVideos').toggle(400);

})
/*=====  End of mostrar formulario de carga de videos  ======*/

/*===================================
=           VALIDAR VIDEO           =
===================================*/

//seleccionar video en el input

$('#selecVideo').change(function(){

	video = this.files[0];
	videoSize = video.size; 
	videoType = video.type;
	
	if(videoType != 'video/mp4'){
		
		$('.alerta').remove();
		$('#formCargaVideos').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 0px">El archivo es de un formato distinto a MP4.</di>');
		return false;
	} else {
		
		$('.alerta').remove();
		
		if(Number(videoSize) > 10000000){
			
			$('#formCargaVideos').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 0px">El video excede el peso permitido de 10Mb.</div>');
			return false;
		} else {

			$('.alerta').remove();

		}

	}

})

/*=====  End of VALIDAR VIDEO   ======*/

/*====================================
=            EDITAR VIDEO            =
====================================*/

$('.editarVideo').click(function(){


	idVideo = $(this).parent().parent().attr('id');
	tit_esp = $('#'+idVideo).children('div').children('div').children('.tit_esp').html();
	noti_esp = $('#'+idVideo).children('div').children('div').children('.noti_esp').html();
	tit_ing = $('#'+idVideo).children('div').children('div').children('.tit_ing').html();
	noti_ing = $('#'+idVideo).children('div').children('div').children('.noti_ing').html();
	rutaVideo = $('#'+idVideo).children('video').children('source').attr('src');
	
	$('#'+idVideo).html('<div class="col-12"><form id="formEditarVideo" method="POST" enctype="multipart/form-data" class="row"><div class="col-12 col-lg-6"><input type="text" name="tit_esp_n" placeholder="Título en español" value="'+tit_esp+'"><textarea name="noti_esp_n" class="" maxlength="100" placeholder="Noticia en español">'+noti_esp+'</textarea></div><div class="col-12 col-lg-6"><input type="text" name="tit_ing_n" placeholder="Título en ingles" value="'+tit_ing+'"><textarea name="noti_ing_n" class="" maxlength="100" placeholder="Noticia en ingles">'+noti_ing+'</textarea></div><div class="col-12 col-lg-6 inputfile-container"><input type="file" name="nuevoVideo" id="nuevoVideo" class=""></div><input type="hidden" value="'+idVideo+'" name="id"><input type="hidden" value="'+rutaVideo+'" name="videoAntiguo"><div class="col-12 col-lg-6 d-flex justify-content-lg-end"><input type="submit" name="" class="btn-default" value="Guardar cambios"></div></form></div>');

	$('#nuevoVideo').change(function(){
		video = this.files[0];
		videoSize = video.size; 
		videoType = video.type;
		
		if(videoType != 'video/mp4'){
			
			$('.alerta1').remove();
			$('#formEditarVideo').after('<div class="col-12 alert alert-danger alerta1" style="margin-top: 15px; margin-bottom: 0px">El archivo es de un formato distinto a MP4.</di>');
			return false;
		} else {
			
			$('.alerta1').remove();
			
			if(Number(videoSize) > 10000000){
				
				$('#formEditarVideo').after('<div class="col-12 alert alert-danger alerta1" style="margin-top: 15px; margin-bottom: 0px">El video excede el peso permitido de 10Mb.</div>');
				return false;
			} else {

				$('.alerta1').remove();

			}

		}

	})

})


/*=====  End of EDITAR VIDEO  ======*/

/*======================================
=            ORDENAR VIDEOS            =
======================================*/

var ordenId = [];
var ordenItem = [];

$('#btnModificarOrdenVideos').click(function(){

	$(this).removeClass('d-md-block');
	$('#btnGuardarOrdenVideos').show();
	$('div.video').removeClass('col-lg-6');
	$('div.video').addClass('col-lg-3');
	$('div.noticia').remove();
	$('div.btn-video-container').remove();

	$('.seccion-videos').css({'cursor':'move'});
	
	$('.seccion-videos').sortable({
		revert: true,
		connectWith: '.video',
		handle: '.handleVideo',
		stop: function(event){

			for (var i = 0; i < $('.seccion-videos div').length; i++) {
				
				ordenId[i] = event.target.children[i].id;
				ordenItem[i] = i+1;
		
			}

		}

	})

})


$('#btnGuardarOrdenVideos').click(function(){

	$(this).hide();
	$('#btnModificarOrdenVideos').show();

	for (var i = 0; i < $('.seccion-videos div').length; i++) {
				
		var actualizarOrden = new FormData();
		actualizarOrden.append('actualizarOrdenId', ordenId[i]);
		actualizarOrden.append('actualizarOrdenItem', ordenItem[i]);

		$.ajax({
			url: 'views/ajax/gestorVideos.php',
			method: 'POST',
			data: actualizarOrden,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){
				
				$('.seccion-videos').html(respuesta);

				swal({
					title: '¡OK!',
					text: '¡El orden de ha actualizado correctamente!',
					type: 'success',
					confirmButtonText: 'Cerrar',
					closeOnConfirm: false
				},
				function(isConfirm){
					if(isConfirm){
						window.location = 'videos';
					}
				});
			}

		})

	}



})

/*=====  End of ORDENAR VIDEOS  ======*/

