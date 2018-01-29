<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "dragonball2", "hg_beta");
$output = '';

 $query = "SELECT R.id, extractValue(R.dataxml,'//cfdi:Comprobante/@Folio') AS Folio,
               extractValue(R.dataxml,'//cfdi:Emisor/@Nombre') AS Proveedor,
               extractValue(R.dataxml,'//cfdi:Comprobante/@Total') AS Total,
               extractValue(R.dataxml,'//cfdi:Comprobante/@Fecha') AS Fecha,
               extractValue(R.dataxml,'//cfdi:Emisor/@nombre'),
               R.estado
               FROM cfdraw R WHERE R.estado != 1 AND R.estado_pago != 1";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Fecha Emision</th>  
                         <th>Folio</th>  
                         <th>Proveedor</th>  
                         <th>Total</th>
                    </tr>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
                    <tr>  
                         <td>'.$row["Fecha"].'</td>  
                         <td>'.$row["Folio"].'</td>  
                         <td>'.$row["Proveedor"].'</td>  
                         <td>'.$row["Total"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=facturas_pendientes.xls');
  echo $output;
 }

?>