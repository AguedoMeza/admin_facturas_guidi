<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4>Registro de la factura X pagar</h4>
				</div>
				<form enctype="multipart/form-data" method="POST" id="formulario">
				<div class="modal-body">
					<div class="container">
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<input type="hidden" name="aula" id="aula" value="">
										
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="panel panel-primary">
										<div class="panel-heading">
								          <h3 class="panel-title">
								            <span ></span>Ingrese los archivos</h3>
								        </div>
								        <div class="panel-body">
								        
											  
											    <i class="fa fa-file-pdf-o" style="font-size:36px;color:red"></i><span class="name">Solo Archivos PDF</span>
                                                <input type="file" name="pdf">
											    <br>
											   <i class="fa fa-file-code-o" style="font-size:36px;color:green"></i><span class="name">Solo Archivos XML</span>
                                                <input type="file" name="foto">
											    <br>
											    <span class="name">Elija una opción si es NECESARIO</span>
											    <div class="radio">
											  <label>
											  Factura cancelada?
											    <input type="radio" name="estado_cancelar"  value="1" >
											    	
											  </label>
											</div>
												<div class="radio">
												  <label>
											  Factura pagada?
												    <input type="radio" name="estado_pago"  value="1">
												      
												  </label>
												</div>
											
											    
											
								        </div>
									</div>
								</div>




							</div>
							<div class="row">
								<div class="col-sm-5">
							
							</div>
							
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
					<input type="submit" class="btn btn-success" value="Guardar">
				</div>
				</form>
			</div>
		</div>
	</div>