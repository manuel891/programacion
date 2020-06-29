
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar vehiculo</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_vehiculo" name="editar_vehiculo">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_nombre" class="col-sm-3 control-label">Marca</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_marca" name="mod_marca"  pattern="[A-Z]{3,25}" title="Solo Mayusculas, con minimo de 3 Carácteres" required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
			  </div>
			   <div class="form-group">
				<label for="mod_telefono" class="col-sm-3 control-label">Modelo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_modelo" name="mod_modelo" pattern="[A-Za-z]{4,25}" title="Mayusculas y minusculas, Con minimo de 4 Carácteres" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="mod_email" class="col-sm-3 control-label">Año</label>
				<div class="col-sm-8">
				 <input type="text" class="form-control" id="mod_year" name="mod_year" pattern="[0-9]{4,4}" title="Solo numeros" maxlength="4" required>
				</div>
			  </div>

			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>