<?php session_start();

	if(!$_SESSION['validar']){
		header('location:login');
		exit();
	} 
include 'views/modulos/botonera.php';
?>
		<div class="col">

			<!-- VIDEOS -->
			<div class="col">

				<!-- Esta es primera parte, donde esta el titulo, el boton y el form de carga -->
				<div class="row carga-video">
					<div class="col-12">
						<h2 class="titulo">Gestor de videos</h2>
					</div>

					<div class="col-12" id="btnCargaVideos">
						<button class="btn btn-default">Agregar video</button>
					</div>

					<div class="col-12" id="divCargaVideos" style="display: none">
						<form id="formCargaVideos" class="row" method="POST" enctype="multipart/form-data">
							<div class="col-12 col-lg-6">
								<input type="text" name="tit_esp" placeholder="Título en español" required>
								<textarea name="noti_esp" class="" maxlength="100" placeholder="Noticia en español" required></textarea>
							</div>
							<div class="col-12 col-lg-6">
								<input type="text" name="tit_ing" placeholder="Título en ingles" required>
								<textarea name="noti_ing" class="" maxlength="100" placeholder="Noticia en ingles" required></textarea>
							</div>

							<div class="col-12 col-lg-6 inputfile-container">
								<input type="file" name="video" id="selecVideo" class="" required>
							</div>
							<div class="col-12 col-lg-6 d-flex justify-content-lg-end">
								<!-- <img src="../img/enviando.gif" style="height:33px; margin-right: 5px" id="status"> -->
								<input type="submit" name="" class="btn-default" value="Confirmar carga" id="guardarVideo">
							</div>
						</form>

						

					</div>
				</div>
				<!-- Fin de esta primera parte -->
				<?php 
					$subirVideo = new GestorVideos();
					$subirVideo -> guardarvideos();
				?>


				<!-- Esta es la parte donde se muestran todos los videos que estan subidos -->
				<div class="row vista-previa">

					<!-- Este es el encabezado de esta parte -->
					<div class="col-12">
						<h2 class="titulo">Vista previa</h2>
					</div>

					<div class="col-12">
						<button class="btn-default">Modificar orden</button>
					</div>
					
					<!-- Este es el formulario para editar el video -->
					<!-- <div class="col-12">
						<form id="" name="" class="row">
							<div class="col-12 col-lg-6">
								<input type="text" name="" placeholder="Título en español">
								<textarea name="" class="" maxlength="100" placeholder="Noticia en español"></textarea>
							</div>
							<div class="col-12 col-lg-6">
								<input type="text" name="" placeholder="Título en ingles">
								<textarea name="" class="" maxlength="100" placeholder="Noticia en ingles"></textarea>
							</div>

							<div class="col-12 col-lg-6 inputfile-container">
								<input type="file" name="file" id="file" class="">
							</div>
							<div class="col-12 col-lg-6 d-flex justify-content-lg-end">
								<img src="../img/enviando.gif" style="height:33px; margin-right: 5px">
								<input type="submit" name="" class="btn-default" value="Confirmar edición">
							</div>
						</form>

						<div class="col-12 alert alert-danger" style="margin-top: 15px; margin-bottom: 0px">
								Por si te hace falta un alert. Sino, volalo a la japi.
						</div>
						
					</div> -->


					
					<!-- Ahora empieza la seccion donde van a estar los videos. OJO con estos dos primeros divs. -->
					<div class="col-12">
						<div class="row seccion-videos">



							<!-- Esta estructura se va a repetir por cada video-->
							<?php 
								$video = new GestorVideos;
								$video -> mostrarVideoController();
								$video -> borrarArticuloController();
							?>	

						</div>
					</div>
				</div>
				<!-- Fin de la parte de donde se muestranlos videos que estan subidos -->
			</div>
			<!-- FIN VIDEOS -->




		</div>
	</div>

</body>
</html>