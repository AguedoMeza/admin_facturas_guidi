<?php
   include "../configuracion/conexion.php";
   
  $id = $_GET["id"];

  date_default_timezone_set('America/Monterrey');
   $fecha=date('Y-m-d');
   $hora=date('h:m:s');
              
   $qry = "SELECT R.id,extractValue(R.dataxml,'//cfdi:Comprobante/@Folio')
           FROM cfdraw R
           WHERE id = '$id'";
              
                  
   $consulta = mysqli_query($conexion,$qry);
                  
   $row=mysqli_fetch_row($consulta);

   $id=$row[0];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="../dataTables.bootstrap.css"/>
 <script src="../jquery-3.2.1.min.js"></script> 
 <script src="../jquery.dataTables.min.js"></script>
  <script src="../dataTables.bootstrap.min.js"></script>    
<!-- script para activar y desactivar -->

 <!--  modal pagar  -->



    

<!--  fin modal pagar  -->
<!-- Inicio modal updte -->
  
<!-- Fin modal update  -->

      <meta charset="utf-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOTEL GUIDI | SISTEMA</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Navegar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="capturas.php" style="font-size: 25px;">Contabilidad</a> 
            </div>
  <div><div  style="color: white;
padding: 15px 50px 5px 50px;
float: left;
font-size: 20px;"> <center>HOTEL GUIDI LINARES | DEPARTAMENTO DE SISTEMAS | JOSE AGUEDO SERNA MEZA</center> </div><div style="float: right; padding: 15px 50px 5px 50px;"><a href="login/cerrarsesion.php" class="btn btn-danger square-btn-adjust" style="background-color: #095219">Salir</a> </div></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-credit-card fa-2x"></i>Cuentas X Pagar</a>
                    </li>
                     <li>
                        <a class=""  href="index.php"><i class="fa fa-credit-card fa-2x"></i>Cuentas X Cobrar</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="h2a">Registro del pago<div style="font-size: 20px;" class="pull-right">Bienvenido: Orlando Cardenas</div></h2>  
                    </div>
                </div>
				<span id="liveclock"></span>
				
					<div class="row">

           <!--  inicio del formulario -->
            <form  method="POST" id="formulario" action="ejecutar_pagar.php ?>">
                        

              <div class="form-group col-md-6">
                <label for="nombre">Numero de Folio: </label>
                <input type="text" class="form-control" id="folio" disabled name="nombre" value="<?php echo $row[1];?>">
              </div>
               <div class="form-group col-md-6">
                <label for="nombre">Fecha en que se realizó el pago: </label>
                <input type="date" class="form-control" id="fecha_pago"  name="fecha_pago" ">
              </div>

            

               <input style="visibility:hidden" type="text" name="id_factura" value="<?php echo $Vid_ordenC = $_GET["id"];?>">
                             
               <div  align="right" class="form-group col-md-12">
                <input type="submit" value="Registrar Pago" class="btn btn-success">
                 </div>
                       <div class="row">
          <div class="col-lg-12">
            <br><hr>
           
          </div> 
        </div>
             </form>
             
           <!--  fin del formulario -->
 					 
          
          </div>
          
				</div>
				<hr>

				<div class="row">
					
					
					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-12">	
						<!-- inicio tabla -->
        
            <!-- fin tabla -->
            <div class="form-group">
         
 </div>
          </div>
									</div>
		   		
<hr>
      

      
      </div>


		 </div>


                
  </div>




     <!-- /. WRAPPER  -->



    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
  
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>

   

<script>
  $('.js').change( function()
    {
    $(this).parents("tr:eq(0)").find(".form-control").prop("disabled",!this.checked); 
    }
    );
</script>
 
 
</body>
</html>


