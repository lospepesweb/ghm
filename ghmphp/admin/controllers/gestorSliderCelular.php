<?php 

class GestorSliderCelular {

	//MOSTRAR IMAGEN SLIDE AJAX
	//------------------------------------------------------------------------------

	public function mostrarImagenControllerCelular($datosController){
		
		list($ancho, $alto) = getimagesize($datosController);

		// if ($ancho < 2595 || $alto < 1730){
		// 	echo 0;
		// } else {

			$aleatorio = mt_rand(100, 999);

			$ruta = '../../views/img/slider_c/slide'.$aleatorio.'.jpg';
			
			$nuevo_ancho = 750;
			$nuevo_alto = 820;

			$origen = imagecreatefromjpeg($datosController);
			$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

			imagecopyresized($destino, $origen, 0,0,0,0,$nuevo_ancho, $nuevo_alto,$ancho,$alto);

			imagejpeg($destino, $ruta);

			GestorSliderModelCelular::subirImagenSlideModelCelular($ruta, 'slider_c');
			
			$respuesta = GestorSliderModelCelular::mostrarImagenSlideModelCelular($ruta, 'slider_c');

			echo $respuesta;

		}
	
	// }

	//Mostrar imagenes en la vista
	public function mostrarSlideVistaControllerCelular(){

		$respuesta = GestorSliderModelCelular::mostrarSlideVistaModelCelular('slider_c');

		foreach ($respuesta as $row => $item) {
			
			echo '<div class="col-12 col-lg-3 img-container imagen-c" id="'.$item['id'].'">
					<img src="'.substr($item['ruta'],6).'" class="img-fluid handleSlide-c">
						<a href="index.php?pagina=slider&idBorrar-c='.$item['id'].'&rutaImagen='.substr($item['ruta'],6).'">
							<span class="icon-cross eliminarSlide-c"></span>
						</a>
				  </div>';

		}
	
	}

	//borrar slides

	public function borrarSlideControllerCelular(){

	 	if (isset($_GET['idBorrar-c'])) {
	 		unlink($_GET['rutaImagen']);

	 		$datosController = $_GET['idBorrar-c'];

	 		$respuesta = GestorSliderModelCelular::borrarSlideModelCelular($datosController,'slider_c');

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
	public function actualizarOrdenControllerCelular($datosController){
		
		GestorSliderModelCelular::actualizarOrdenModelCelular($datosController, 'slider_c');

		$respuesta = GestorSliderModelCelular::seleccionarOrdenModelCelular('slider_c');

		foreach ($respuesta as $row => $item) {
			
			echo '<div class="col-12 col-lg-3 img-container id="'.$item['id'].'" imagen-c>
					<img src="'.substr($item['ruta'],6).'" class="img-fluid handleSlide-c">
						<a href="index.php?pagina=slider&idBorrar-c='.$item['id'].'&rutaImagen='.substr($item['ruta'],6).'">
							<span class="icon-cross eliminarSlide-c"></span>
						</a>
				  </div>';
		}

	}

}