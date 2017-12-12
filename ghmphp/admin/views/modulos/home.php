<?php session_start();

	if(!$_SESSION['validar']){
		header('location:login');
		exit();
	} 
include 'views/modulos/botonera.php';
?>

			<!-- HOME -->
			<div class="col">

				<div class="row home">
					<div class="col-12">
						<h2 class="titulo icon-logoHuevo""><span class=""></span></h2>
					</div>

				</div>

			</div>
			<!-- FIN HOME -->



	</div>
</div>