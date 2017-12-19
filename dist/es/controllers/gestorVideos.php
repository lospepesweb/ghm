<?php

class Videos {

	public function seleccionarVideosController(){

		$respuesta = VideosModel::seleccionarVideosModel('videos');

		foreach ($respuesta as $row => $item) {
			
			echo '<div class="video-container">
					<video autoplay loop muted height="100%" width="100%">
						<source src="../admin/'.$item['ruta'].'" type="video/mp4">
					</video>
					<div class="noticia d-flex align-items-center">
						<div class="col-12">
							<h6 class="titulo">'.$item['tit_esp'].'</h6>
							<p class="texto">'.$item['noti_esp'].'</p>
						</div>
					</div>
				  </div>';			

		}

	}

}