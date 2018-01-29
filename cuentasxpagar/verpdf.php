<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
 
<body>
 
<?php include('../configuracion/conexion.php');


 $qry = "SELECT datapdf
               FROM cfdraw WHERE id=".$_GET['id'];
               $consulta = mysqli_query($conexion, $qry);

 $row = mysqli_fetch_array($consulta);
 
?>
  

   <object data="data:application/pdf;base64,<?php echo base64_encode($row[0]) ?>" type="application/pdf" style="height:720px;width:100%"></object>
</body>
</html>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

</html>