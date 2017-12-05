<?php session_start();

	if(!$_SESSION['validar']){
		header('location:login');
		exit();
	} 
include 'views/modulos/botonera.php';
?>

<!-- PASS -->
		<div class="col">

			<div class="row seccion-pass">
				<div class="col-12">
					<h2 class="titulo">Gestor de Contraseñas</h2>
				</div>
			</div>


		</div>
		<!-- FIN PASS -->




	</div>
</div>