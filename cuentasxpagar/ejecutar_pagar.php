
<?php 

	include ("../configuracion/conexion.php");
	

	$p_id=$_POST["id_factura"];
	$p_fecha_pago = $_POST['fecha_pago'];

    date_default_timezone_set('America/Monterrey');
    $fecha = date('Y-m-d');
    $hora = date('H:m:s');
	


	$qry = "UPDATE cfdraw
			SET
			    fecha_pago = '$p_fecha_pago',
			    fecha_registro = '$fecha',
			    hora_registro = '$hora',
			    estado_pago = 1
			   
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
    echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>