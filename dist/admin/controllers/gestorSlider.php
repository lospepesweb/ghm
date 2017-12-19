<?php 

class GestorSlider {

	//MOSTRAR IMAGEN SLIDE AJAX
	//------------------------------------------------------------------------------

	static public function mostrarImagenController($datosController){
		
		list($ancho, $alto) = getimagesize($datosController);

		// if ($ancho < 2595 || $alto < 1730){
		// 	echo 0;
		// } else {

			$aleatorio = mt_rand(100, 999);

			$ruta = '../../views/img/slider_d/slide'.$aleatorio.'.jpg';
			
			$nuevo_ancho = 2600;
			$nuevo_alto = 1733;

			$origen = imagecreatefromjpeg($datosController);
			$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

			imagecopyresized($destino, $origen, 0,0,0,0,$nuevo_ancho, $nuevo_alto,$ancho,$alto);

			imagejpeg($destino, $ruta);

			GestorSliderModel::subirImagenSlideModel($ruta, 'slider');
			
			$respuesta = GestorSliderModel::mostrarImagenSlideModel($ruta, 'slider');

			echo $respuesta;

		}
	
	// }

	//Mostrar imagenes en la vista
	static public function mostrarSlideVistaController(){

		$respuesta = GestorSliderModel::mostrarSlideVistaModel('slider');

		foreach ($respuesta as $row => $item) {
			
			echo '<div class="col-12 col-lg-3 img-container imagen" id="'.$item['id'].'">
					<img src="'.substr($item['ruta'],6).'" class="img-fluid handleSlide">
						<a href="index.php?pagina=slider&idBorrar='.$item['id'].'&rutaImagen='.substr($item['ruta'],6).'">
							<span class="icon-cross eliminarSlide"></span>
						</a>
				  </div>';

		}
	
	}

	//borrar slides

	static public function borrarSlideController(){

	 	if (isset($_GET['idBorrar'])) {
	 		unlink($_GET['rutaImagen']);

	 		$datosController = $_GET['idBorrar'];

	 		$respuesta = GestorSliderModel::borrarSlideModel($datosController,'slider');

	 		if ($respuesta == 'ok') {
	 			echo '<script>
						swal({
							title: "¡OK!",
							text: "¡La imagen fue borrada con éxito!",
							type: "success",
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						},
						function(isConfirm){
							if (isConfirm){
								window.location = "slider";
							}
						});
					 </script>';

	 		}

	 	}

 	}

 	//ORDENAR SLIDES
	static public function actualizarOrdenController($datosController){
		
		GestorSliderModel::actualizarOrdenModel($datosController, 'slider');

		$respuesta = GestorSliderModel::seleccionarOrdenModel('slider');

		foreach ($respuesta as $row => $item) {
			
			echo '<div class="col-12 col-lg-3 img-container id="'.$item['id'].'" imagen>
					<img src="'.substr($item['ruta'],6).'" class="img-fluid handleSlide">
						<a href="index.php?pagina=slider&idBorrar='.$item['id'].'&rutaImagen='.substr($item['ruta'],6).'">
							<span class="icon-cross eliminarSlide"></span>
						</a>
				  </div>';
		}

	}

}