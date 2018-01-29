<?php 
include('config.php');

// leemos datos de la foto
$foto= $_FILES["foto"]["tmp_name"];
$nombrefoto  = $_FILES["foto"]["name"];

$pdf = $_FILES["pdf"]["tmp_name"];
$nombrepdf = $_FILES["pdf"]["name"];
//este es el archivo que añadiremosal campo blob
  $foto  = $_FILES['foto']['tmp_name'];
  $pdf = $_FILES['pdf']['tmp_name'];
  //lo comvertimos en binario antes de guardarlo
		   $foto=mysql_real_escape_string(file_get_contents($_FILES["foto"]["tmp_name"]));
		   $pdf=mysql_real_escape_string(file_get_contents($_FILES["pdf"]["tmp_name"]));
			 
$estado = $_POST['estado_cancelar'];
$estado_pago = $_POST['estado_pago'];


$sql = "INSERT INTO `cfdraw` (  `datapdf` ,  `dataxml` , `estado` , `estado_pago` ) VALUES( '$pdf' ,  '$foto', '$estado' , '$estado_pago') ";
mysql_query($sql) or die(mysql_error());
header('Location: index.php');
?>