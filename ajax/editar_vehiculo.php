<?php
	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_marca'])) {
           $errors[] = "Marca vacío";
		}  else if (
			!empty($_POST['mod_id']) &&
			!empty($_POST['mod_marca'])
		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$marca=mysqli_real_escape_string($con,(strip_tags($_POST["mod_marca"],ENT_QUOTES)));
		$modelo=mysqli_real_escape_string($con,(strip_tags($_POST["mod_modelo"],ENT_QUOTES)));
		$año=mysqli_real_escape_string($con,(strip_tags($_POST["mod_year"],ENT_QUOTES)));
		
		$id_vehiculo=intval($_POST['mod_id']);
		$sql="UPDATE tbl_vehiculos SET marca='".$marca."', modelo='".$modelo."', year ='".$año."' WHERE idVehiculo='".$id_vehiculo."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Vehiculo ha sido actualizado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>