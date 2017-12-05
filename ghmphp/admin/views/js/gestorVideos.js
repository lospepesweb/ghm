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
		$('#formCargaVideos').after('<div class="col-12 alert alert-danger" style="margin-top: 15px; margin-bottom: 0px">El archivo es de un formato distinto a MP4.</di>');
		return false;
	} else {
		
		$('.alerta').remove();
		
		if(Number(videoSize) > 10000000){
			
			$('#formCargaVideos').after('<div class="col-12 alert alert-danger" style="margin-top: 15px; margin-bottom: 0px">El video excede el peso permitido de 10Mb.</div>');
			return false;
		} else {

			$('.alerta').remove();

		}

	}

})

/*=====  End of VALIDAR VIDEO   ======*/