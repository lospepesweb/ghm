<?php
require_once 'conexion.php';

class GestorVideosModel{

	//subir videos

	static public function guardarVideoModel($datosModel, $tabla){
	
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (tit_esp, noti_esp, tit_ing, noti_ing, ruta) VALUES (:tit_esp, :noti_esp, :tit_ing, :noti_ing, :ruta)");
		$stmt -> bindParam(':tit_esp', $datosModel['tit_esp'], PDO::PARAM_STR);
		$stmt -> bindParam(':noti_esp', $datosModel['noti_esp'], PDO::PARAM_STR);
		$stmt -> bindParam(':tit_ing', $datosModel['tit_ing'], PDO::PARAM_STR);
		$stmt -> bindParam(':noti_ing', $datosModel['noti_ing'], PDO::PARAM_STR);
		$stmt -> bindParam(':ruta', $datosModel['ruta'], PDO::PARAM_STR);

		if ($stmt -> execute()) {
			return 'ok';
		} else {
			return 'error';
		}
	
		$stmt->close();
	}

	//mostrar videos

	static public function mostrarVideoModel($tabla) {
		
		$stmt = Conexion::conectar()->prepare("SELECT id, tit_esp, noti_esp, tit_ing, noti_ing ,ruta FROM $tabla ORDER BY orden ASC");

		$stmt -> execute();

		return $stmt -> fetchAll();
			
		$stmt->close();
	
	}

	//borrar videos
	static public function borrarVideoModel($datosModel, $tabla){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt -> bindParam(':id', $datosModel, PDO::PARAM_INT);

		if ($stmt -> execute()) {
			return 'ok';
		} else {
			return 'error';
		}
	
		$stmt->close();

	}

	//editar videos
	static public function editarVideoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tit_esp = :tit_esp_n, noti_esp = :noti_esp_n, tit_ing = :tit_ing_n, noti_ing = :noti_ing_n, ruta = :ruta WHERE id = :id");
		$stmt -> bindParam(':tit_esp_n', $datosModel['tit_esp'], PDO::PARAM_STR);
		$stmt -> bindParam(':noti_esp_n', $datosModel['noti_esp'], PDO::PARAM_STR);
		$stmt -> bindParam(':tit_ing_n', $datosModel['tit_ing'], PDO::PARAM_STR);
		$stmt -> bindParam(':noti_ing_n', $datosModel['noti_ing'], PDO::PARAM_STR);
		$stmt -> bindParam(':ruta', $datosModel['ruta'], PDO::PARAM_STR);
		$stmt -> bindParam(':id', $datosModel['id'], PDO::PARAM_INT);

		if ($stmt -> execute()) {
			return 'ok';
		} else {
			return 'error';
		}
	
		$stmt->close();
	
	}

}