 <script>
	$(document).ready(function() {			   
		$('#example').dataTable( {			
				 "language":
				 	{"url": "../assets/js/Spanish.json" }
		    });
		});
</script>
<?php 
include '../configuracion/conexion.php';
	   $qry = "SELECT id, id_cliente, fecha_entrada, fecha_salida FROM reservas";
            $consulta = mysqli_query($conexion, $qry);
 ?>







	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th width="5%"># Reserva</th>
	                <th>Cliente</th>
	                <th width="30%">Descripción Cuartos</th>
	                <th>Fecha entrada</th>
	           	    
	                <th>Fecha Salida</th>
	                <th>Cantidad Noches</th>
	                <th width="10%">R. Pago</th>
	                <th width="10%">Activo</th>
	            </tr>
	        </thead>
	        <tbody>
	        <?php 
	        	while($row = mysqli_fetch_array($consulta))
				{	?>
					
					<tr>
						<td>
							<?php echo $row[0]; ?>
						</td>
						<td>
							
						</td>
						<td>
						
						</td>
						<td align="center">
							
						</td>
						<td>
						
						</td>
						
						<td>
						
						</td>
				
		




						<td align="center">
							<a href="../pago_reservas/index.php"><i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true"></i></a>
						</td>
						<td align="center">

						<?php 
						if ($row[4]==1) {
							$valor = "checked";
						}
						if ($row[4]==0) {
							$valor="";
						}
						?>
							<?php echo "<input type='checkbox' id='status' $valor onclick='OnChangeCheckbox (this)' data-id='$row[0]'/>"; ?>
						</td>
					</tr>

				<?php 
				}
				 ?>
				
	        </tbody>  
		</table>
	</div>