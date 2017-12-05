<?php

require_once 'conexion.php';

class LoginM {

	static public function LoginModelo($datosModelo, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT usuario, password, intentos FROM $tabla WHERE usuario = :usuario");
		
		$stmt -> bindParam(':usuario', $datosModelo['usuario'], PDO::PARAM_STR);
		
		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();
	
	}

	static public function intentosModelo($datosModelo, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE usuario = :usuario");
		
		$stmt -> bindParam(':intentos', $datosModelo['actualizarIntentos'], PDO::PARAM_INT);
		$stmt -> bindParam(':usuario', $datosModelo['usuarioActual'], PDO::PARAM_STR);
		
		if($stmt->execute()){
		
			return 'ok';
		
		} else {
		
			return 'error';
		}
	}
}