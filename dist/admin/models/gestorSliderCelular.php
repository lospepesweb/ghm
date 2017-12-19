<?php 

require_once 'conexion.php';

class GestorSliderModelCelular{

    //SUBIR RUTA DE LA IMAGEN
	//----------------------------------------------------------------------------------------
	static public function subirImagenSlideModelCelular($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (ruta) VALUES (:ruta)");
		$stmt->bindparam(':ruta', $datosModel, PDO::PARAM_STR);
		
		if($stmt->execute()){
			
			return 'ok';

		} else {

			return 'error';

		}

		$stmt->close();
	}

	//SELECCIONAR RUTA DE LA IMAGEN
	
	static public function mostrarImagenSlideModelCelular($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta FROM $tabla WHERE ruta = :ruta");
		
		$stmt->bindParam(':ruta', $datosModel, PDO::PARAM_STR);
		
		$stmt->execute();
		
		return $stmt->fetch();
		
		$stmt->close();
	}

	//Mostrar imagenes de la base de datos en la vista
	//----------------------------------------------------------

	static public function mostrarSlideVistaModelCelular($tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT id, ruta FROM $tabla ORDER BY orden ASC");
			
		$stmt->execute();
		
		return $stmt -> fetchAll();
		
		$stmt->close();
	}

	//borrar slides
	static public function borrarSlideModelCelular($datosModel, $tabla){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt -> bindParam(':id', $datosModel, PDO::PARAM_INT);

		if ($stmt -> execute()) {
			return 'ok';
		} else {
			return 'error';
		}
	
		$stmt->close();

	}

	//ordenar videos
	static public function actualizarOrdenModelCelular($datosModel, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET orden = :orden WHERE id = :id ");

		$stmt->bindParam(':orden', $datosModel['ordenItem'],PDO::PARAM_INT);
		$stmt->bindParam(':id', $datosModel['ordenId'],PDO::PARAM_INT);

		if($stmt -> execute()){
			return 'ok';
		} else {
			return 'error';
		}

		$stmt -> close();
	
	}

	static public function seleccionarOrdenModelCelular($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, ruta FROM $tabla ORDER BY orden ASC");
	
		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

}