<?php

class LoginC{

	public function loginController(){
		
		if(isset($_POST['usuarioLogin'])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['usuarioLogin']) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST['passwordLogin'])){

				// $encriptar = crypt($_POST['passwordLogin'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			
				$datosController = array('usuario'=>$_POST['usuarioLogin'],
				                         'password'=>$_POST['passwordLogin']);
										 
				$respuesta = LoginM::LoginModelo($datosController, 'usuarios');
				
				$intentos = $respuesta['intentos'];
				$usuarioActual = $_POST['usuarioLogin'];
				$maximoIntentos = 2;
				
				if($intentos < $maximoIntentos){

					if($respuesta['usuario'] == $_POST['usuarioLogin'] && 
					   $respuesta['password'] == $_POST['passwordLogin']){
						
						$intentos = 0;

						$datosController = array('usuarioActual'=>$usuarioActual, 
											     'actualizarIntentos'=>$intentos);

						$respuestaActualizarIntentos = LoginM::intentosModelo($datosController, 'usuarios');

						session_start();

						$_SESSION['validar'] = true;
						$_SESSION['usuario'] = $respuesta['usuario'];
						
						header('location:home');

					} else {
						
						++$intentos;
						$datosController = array('usuarioActual'=>$usuarioActual, 
												 'actualizarIntentos'=>$intentos);
						$respuestaActualizarIntentos = LoginM::intentosModelo($datosController, 'usuarios');

						echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>';
					}
					
				} else {
					$intentos = 0;
					$datosController = array('usuarioActual'=>$usuarioActual, 
											 'actualizarIntentos'=>$intentos);
					
					$respuestaActualizarIntentos = LoginM::intentosModelo($datosController, 'usuarios');
					echo '<div class="alert alert-danger" role="alert">Ha ingresado 3 veces incorrectamente su contraseña, por favor, utilice el captcha.</div>';
				}
			}
		}
	}
}