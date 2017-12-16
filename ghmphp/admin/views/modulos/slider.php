<?php session_start();

	if(!$_SESSION['validar']){
		header('location:login');
		exit();
	} 
include 'views/modulos/botonera.php';
?>
<!-- SLIDER -->
		<div class="col">
			<div class="row gestor-slider">
					<div class="col-12">
						<h2 class="titulo">Gestor de Imágenes</h2>
					</div>
				</div>


				<div class="row img-cms" id="gestorSliderDesktop">
					<div class="col-12">
						<h4 class="titulo">Imágenes desktop</h4>
						<p class="texto">Arrastra a la zona punteada tus imágenes. <small>Tamaño recomendado: 2600x1733. Peso máximo recomendado: 2mb. Formatos permitidos: JPG y PNG.</small></p>
						<button class="btn-default" id="btnModificarOrdenSlides-d">Modificar orden</button>
						<button class="btn-default" id="btnGuardarOrdenSlides-d" style="display: none;">Guardar orden</button>
					</div>
					<div class="col-12 carga-slider">
						<div class="row" id="zonaArrastre-d">
							
							<?php 
								$slider_d = new GestorSlider();
								$slider_d -> mostrarSlideVistaController();
								$slider_d -> borrarSlideController();
							?> 

						</div>
					</div>
				</div>



				<div class="row img-cms" id="gestorSliderCelular">
					<div class="col-12">
						<h4 class="titulo">Imágenes para smartphone</h4>
						<p class="texto">Arrastra a la zona punteada tus imágenes. <small>Tamaño recomendado: 750x820. Peso máximo recomendado: 800kb. Formatos permitidos: JPG y PNG.</small></p>
						<button class="btn-default" id="btnModificarOrdenSlides-c">Modificar orden</button>
						<button class="btn-default" id="btnGuardarOrdenSlides-c" style="display: none;">Guardar orden</button>
					</div>
					<div class="col-12 carga-slider">
						<div class="row" id="zonaArrastre-c">

							<?php 
								$slider_c = new GestorSliderCelular();
								$slider_c -> mostrarSlideVistaControllerCelular();
								$slider_c -> borrarSlideControllerCelular();
							?> 

						</div>
					</div>
				</div>
			</div>
			<!-- FIN SLIDER -->
		</div>
	</div>
</body>
</html>