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
						<label for="old-pass">Contraseña actual</label>
						<input type="password" id="old-pass">

						<label for="new-pass-1">Contraseña nueva</label>
						<input type="password" id="new-pass-1">

						<label for="new-pass-2">Repetir contraseña nueva</label>
						<input type="password" for="new-pass-2">

						<input type="submit" name="" value="Cambiar" class="btn-default">
					</form>
				</div>
			</div>

		</div>
		<!-- FIN PASS -->
		

	</div>
</div>
