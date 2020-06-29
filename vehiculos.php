<?php

	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$active_clientes="active";
	$title="Vehiculos | Sistema Vehicular";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("head.php");?>
  </head>
  <body>
	<?php
	include("navbar.php");
	?>
	
    <div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevoVehiculo"><span class="glyphicon glyphicon-plus" ></span> Nuevo Vehiculo</button>
			</div>
			<h4><i class='glyphicon glyphicon-pencil'></i> Registro Vehiculos</h4>
		</div>
		<div class="panel-body">
		
			
			
			<?php
				include("modal/registro_vehiculo.php");
				include("modal/editar_vehiculo.php");
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Buscar Vehiculo</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Marca del Vehiculo" onkeyup='load(1);'>
							</div>
							
						</div>
				
				
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			
		
	
			
			
			
  </div>
</div>
		 
	</div>
	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/vehiculos.js"></script>
  </body>
</html>
