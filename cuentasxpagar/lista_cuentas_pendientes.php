 <script>
	$(document).ready(function() {			   
		$('#example').dataTable( {			
				 "language":
				 	{"url": "../Spanish.json" }
		    });
		});
</script>
<?php 
include '../configuracion/conexion.php';
	   $qry = "SELECT R.id, extractValue(R.dataxml,'//cfdi:Comprobante/@Folio') AS Folio,
               extractValue(R.dataxml,'//cfdi:Emisor/@Nombre') AS Proveedor,
               extractValue(R.dataxml,'//cfdi:Comprobante/@Total') AS Total,
               extractValue(R.dataxml,'//cfdi:Comprobante/@Fecha') AS Fecha,
               extractValue(R.dataxml,'//cfdi:Emisor/@nombre'),
               R.estado
               FROM cfdraw R WHERE R.estado != 1 AND R.estado_pago != 1";
               $consulta = mysqli_query($conexion, $qry);
 ?>







	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th width="5%">ID</th>
	                <th width="20%">Fecha Emision</th>
	                <th width="5%">Folio</th>
	                <th width="30%">Proveedor</th>
	                <th width="10%">Total</th>
	                <th width="10%">Pagar</th>
	                <th width="10%">Cancelar</th>
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
							<?php echo $row[4]; ?>
						</td>
						<td>
							
						<a href="verpdf.php?id=<?php echo $row[0] ?>" target="_blank" ><i><?php echo $row[1]; ?></i></a>
						</td>
						<td>
						   <?php 
						   if (empty($row[2]))
						    {
                              echo $row[5]; 
                            }
                            else
                            {
                              echo $row[2]; 
                            }
						   
						   ?>
						</td>
						<td>
							  <?php echo $row[3]; ?>
						</td>
						
						<td align="center">
							<a href="formulario_pagar.php?id=<?php echo $row[0] ?>"  ><i class="fa fa-money "  style="font-size:26px;color:green aria-hidden="true"></i></a>
						</td>
                       
                        <td align="center">
							
						<?php 
						if ($row[6]==1) {
							$valor = "checked";
						}
						if ($row[6]==0) {
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



