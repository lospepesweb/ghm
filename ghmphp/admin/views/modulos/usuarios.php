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

					<div class="col-12">
						<form>
							<input type="password" placeholder="Contraseña actual">
							<input type="password" placeholder="Contraseña nueva">
							<input type="password" placeholder="Confirmar contraseña">

							<input type="submit" name="" value="Cambiar" class="btn-default">
						</form>
					</div>
			</div>




		</div>
<!-- FIN PASS -->




	</div>
</div>