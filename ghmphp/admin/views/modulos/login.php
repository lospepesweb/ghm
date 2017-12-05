<div class="row login justify-content-center align-items-center">
	<div id="form-login" class="col-12 col-lg-4">
		<form class="text-center" method="POST" onsubmit="return validarLogin()">
			<h1 class="titulo"><span class="icon-logoHuevo"></span></h1>
			<div class="form-group">
				<label for="usuario">Usuario</label>
				<input type="name" class="form-control" id="usuarioLogin" name="usuarioLogin">
			</div>
			<div class="form-group">
				<label for="pass">Contraseña</label>
				<input type="password" class="form-control" id="passwordLogin" name="passwordLogin">
		  </div>
		  
		<?php 
			$login = new LoginC();
			$login -> loginController();
		?>

		  <button type="submit" class="btn-default"><span class="icon-chevron-thin-right"></span>Entrar</button>
		</form>
	</div>
</div>