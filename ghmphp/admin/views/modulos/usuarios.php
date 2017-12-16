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
					<form method="post" onsubmit="return validarCambioPassword();">
						<label for="old-pass">Contraseña actual</label>
						<input type="password" id="old-pass" name="password">

						<label for="new-pass-1">Contraseña nueva</label>
						<input type="password" id="new-pass-1" name=nPassword>

						<label for="new-pass-2">Repetir contraseña nueva</label>
						<input type="password" id="new-pass-2" name=nPassword2>

						<input type="submit" name="" value="Cambiar" class="btn-default" id="btnCambiarPass">
					
					<?php 
						$cambiarPass = new GestorPassword;
						$cambiarPass -> cambiarPasswordController();
					?>
					
					</form>

				</div>
			</div>

		</div>
		<!-- FIN PASS -->
		

	</div>
</div>
