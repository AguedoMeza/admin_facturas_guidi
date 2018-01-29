<?php 
	include ("../configuracion/conexion.php");
	$prueba = $_POST['aula'];
	$nombre = $_POST['nombre'];
	$ap_paterno = $_POST['ap_paterno'];
	$ap_materno = $_POST['ap_materno'];
		

   

	$consulta="INSERT INTO clientes (nombre_completo,ap_paterno,ap_materno)
	 VALUES('$nombre','$ap_paterno','$ap_materno')";
	$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
	
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>