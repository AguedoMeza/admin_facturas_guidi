<?php
include 'configuracion/conexion.php';

if(isset($_POST['get_option']))
{

 $nombre_curso = $_POST['get_option'];
 
 $result = mysqli_query($conexion, "select h.id_horario, h.orden, c.nombre_curso
 	                from horarios h
 	                inner join cursos c
 	                on h.id_horario = c.id_curso
 	                where c.nombre_curso = '$nombre_curso'");
  $bool = mysqli_num_rows($result);

  while ($row=mysqli_fetch_array($result))
                   {
                      echo "<option>".$row['orden']."</option>";
                   }
 
 exit;
}
?>


