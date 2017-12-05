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
						<h2 class="titulo">Gestor de Imagenes</h2>
					</div>
				</div>


				<div class="row img-cms">
					<div class="col-12">
						<h4 class="titulo">Imagenes desktop</h4>
						<p class="texto">Arrastra a la zona punteada tus imagenes. <small>Tamaño recomendado: 2600x1733. Peso máximo recomendado: 1.5mb.</small></p>
						<button class="btn-default">Modificar orden</button>
					</div>
					<div class="col-12 carga-slider">
						<div class="row">
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide1.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide2.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide3.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide4.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
						</div>
						<div class="col-12 alert alert-danger" style="margin-top: 15px; margin-bottom: 15px">
								Por si te hace falta un alert. Sino, volalo a la japi.
						</div>
					</div>
				</div>



				<div class="row img-cms">
					<div class="col-12">
						<h4 class="titulo">Imagenes para smartphone</h4>
						<p class="texto">Arrastra a la zona punteada tus imagenes. <small>Tamaño recomendado: 750x820. Peso máximo recomendado: 800kb.</small></p>
						<button class="btn-default">Modificar orden</button>
					</div>
					<div class="col-12 carga-slider">
						<div class="row">
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide1-m.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide2-m.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide3-m.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
							<div class="col-12 col-lg-3 img-container">
								<img src="../img/slide4-m.jpg" class="img-fluid">
								<span class="icon-cross"></span>
							</div>
						</div>
						<div class="col-12 alert alert-danger" style="margin-top: 15px; margin-bottom: 0px">
								Por si te hace falta un alert. Sino, volalo a la japi.
						</div>
					</div>
				</div>


			</div>
			<!-- FIN PASS -->




		</div>
	</div>

</body>
</html>