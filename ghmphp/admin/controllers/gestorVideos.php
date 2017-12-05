<?php

class GestorVideos{

	public function guardarvideos(){

		if (isset($_POST['tit_esp'])) {

		    $aleatorio = mt_rand(100, 999);
		    
			$video = $_FILES['video']['tmp_name'];
		
			$ruta = 'views/videos/video'.$aleatorio.'.mp4';

			move_uploaded_file($video, $ruta);

			$datosController = array('tit_esp'=>$_POST['tit_esp'],
									 'noti_esp'=>$_POST['noti_esp'],
									 'tit_ing'=>$_POST['tit_ing'],
									 'noti_ing'=>$_POST['noti_ing'],
									 'ruta'=>$ruta);

			$respuesta = GestorVideosModel::guardarVideoModel($datosController, 'videos');

			if ($respuesta == 'ok') {
				echo '<script>
						swal({
							title: "¡OK!",
							text: "¡El video fue cargado correctamente!",
							type: "success",
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						},
						function(isConfirm){
							if (isConfirm){
								window.location = "videos";
							}
						});
					 </script>';
			} else {

				echo $respuesta;

			}

		}
	
	}

	//Mostrar videos en la vista

	public function mostrarVideoController(){
		
		$respuesta = GestorVideosModel::mostrarVideoModel('videos');

		foreach ($respuesta as $row => $item) {
			
			echo '<div class="video col-12 col-lg-6" id="'.$item['id'].'">

					<video class="video-src" autoplay muted loop>
						<source src="'.$item['ruta'].'" type="video/mp4">
					</video>

					<div class="noticia d-flex align-items-center">
						<div class="col-12">
							<h6 class="titulo">'.$item['tit_esp'].'</h6>
							<p class="texto">'.$item['noti_esp'].'</p>
						</div>
					</div>

					<div class="btn-video-container d-flex justify-content-center">
						<button class="btn-default"><span class="icon-pencil"></span> Editar</button>
						<a href="index.php?pagina=videos&idBorrar='.$item['id'].'&rutaImagen='.$item['ruta'].'"><button class="btn-default"><span class="icon-cross"></span> Eliminar</button></a>
					</div>

				</div>';

		}

	}

//borrar videos

	public function borrarArticuloController(){

	 	if (isset($_GET['idBorrar'])) {
	 		unlink($_GET['rutaImagen']);

	 		$datosController = $_GET['idBorrar'];

	 		$respuesta = GestorVideosModel::borrarVideoModel($datosController,'videos');

	 		if ($respuesta == 'ok') {
	 			echo '<script>
						swal({
							title: "¡OK!",
							text: "¡El video fue borrado con éxito!",
							type: "success",
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						},
						function(isConfirm){
							if (isConfirm){
								window.location = "videos";
							}
						});
					 </script>';

	 		}

	 	}

 	}

}