<?php 
//incluir conexion
	include "../configuracion/conexion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];
//include '../global_seguridad/verificar_sesion.php';

//Se recuperan las variables GET
//$g_id = $_GET['id'];
$g_estado = $_GET['estado'];

//se extrae de una funcion date 
date_default_timezone_set('America/Monterrey');
$p_fecha=date("Y-m-d"); 
$p_hora=date ("h:i:s");

//Se crea la consulta
  $query = "  
           UPDATE cfdraw
           SET estado='$g_estado'
           WHERE id='".$_GET["id"]."'";  

//Se ejecuta la sentencia en la clase
$result = mysqli_query($conexion, $query);


 ?>