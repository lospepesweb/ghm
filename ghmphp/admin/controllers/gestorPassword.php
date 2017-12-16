<?php

class GestorPassword{

	public function cambiarPasswordController(){
		
		if(isset($_POST['password'])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['password'])){

				//$encriptar = crypt($_POST['password'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datosController = $_POST['password'];
				// echo $datosController;
				$respuesta = GestorPasswordModel::seleccionarPasswordModel($datosController, 'usuarios');
				// echo $respuesta['password'];

	// 		}
	// 	}
	// }
// }

				if($datosController != $respuesta['password']){

					echo '<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">La contraseña actual es incorrecta.</div>';

				} else {
					if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['nPassword'])){
						echo '<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">La nueva contraseña no puede contener caracteres especiales.</div>';
					}

					if($_POST['nPassword'] != $_POST['nPassword2']){
						echo '<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">Las contraseñas no coinciden.</div>';
					}


					// $encriptarNueva = crypt($_POST['nPassword'], '$2y$10$JLrLSZcuwxBgwDnPYLRpI..ipTjCDlJWHf5FwqVAnTxzECXDSnW7W');

					$datosController = array('passwordActual'=>$_POST['password'],
											 'passwordNueva'=>$_POST['nPassword']);

					$respuesta = GestorPasswordModel::actualizarPasswordModel($datosController, 'usuarios');

					if($respuesta == 'ok'){

						echo '<script>
								swal({
									title: "¡Ok!",
									text: "¡La contraseña se actualizó correctamente!",
									type: "success",
									confirmButtonText: "Cerrar",
									closeOnConfirm: false
								},
								function(isConfirm){
									if (isConfirm){
										window.location = "usuarios";
									}
								});
							 </script>';
						
					} else {
						echo $respuesta;
					}


				}

			} else {
				echo '<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">La contraseña actual no puede contener caracteres especiales.</div>';
			}

		}

	}

}











				// $encriptar = crypt($_POST['password'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			
// 				$datosController = array('usuario'=>$_POST['usuarioLogin'],
// 				                         'password'=>$_POST['passwordLogin']);
										 
// 				$respuesta = LoginM::LoginModelo($datosController, 'usuarios');
				
// 				$intentos = $respuesta['intentos'];
// 				$usuarioActual = $_POST['usuarioLogin'];
// 				$maximoIntentos = 2;
				
// 				if($intentos < $maximoIntentos){

// 					if($respuesta['usuario'] == $_POST['usuarioLogin'] && 
// 					   $respuesta['password'] == $_POST['passwordLogin']){
						
// 						$intentos = 0;

// 						$datosController = array('usuarioActual'=>$usuarioActual, 
// 											     'actualizarIntentos'=>$intentos);

// 						$respuestaActualizarIntentos = LoginM::intentosModelo($datosController, 'usuarios');

// 						session_start();

// 						$_SESSION['validar'] = true;
// 						$_SESSION['usuario'] = $respuesta['usuario'];
						
// 						header('location:home');

// 					} else {
						
// 						++$intentos;
// 						$datosController = array('usuarioActual'=>$usuarioActual, 
// 												 'actualizarIntentos'=>$intentos);
// 						$respuestaActualizarIntentos = LoginM::intentosModelo($datosController, 'usuarios');

// 						echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>';
// 					}
					
// 				} else {
// 					$intentos = 0;
// 					$datosController = array('usuarioActual'=>$usuarioActual, 
// 											 'actualizarIntentos'=>$intentos);
					
// 					$respuestaActualizarIntentos = LoginM::intentosModelo($datosController, 'usuarios');
// 					echo '<div class="alert alert-danger" role="alert">Ha ingresado 3 veces incorrectamente su contraseña, por favor, utilice el captcha.</div>';
// 				}
// 			}
// 		}
// 	}
// }