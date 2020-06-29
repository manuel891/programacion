
	<!-- Modal -->
	<div class="modal fade" id="nuevoVehiculo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo vehiculo</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_vehiculo" name="guardar_vehiculo">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="marca" class="col-sm-3 control-label">Marca</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="marca" name="marca" pattern="[A-Z]{3,25}" title="Solo Mayusculas, con minimo de 3 Carácteres" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="modelo" class="col-sm-3 control-label">Modelo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="modelo" name="modelo" pattern="[A-Za-z]{4,25}" title="Mayusculas y minusculas, Con minimo de 4 Carácteres" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="year" class="col-sm-3 control-label">Año</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="year" name="year" pattern="[0-9]{4,4}" title="Solo numeros" maxlength="4" required> 
				</div>
			  </div>
						
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>