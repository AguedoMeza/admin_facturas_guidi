<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_Name = $_SESSION["s_Persona"];
date_default_timezone_set('America/Monterrey');
$fecha = date("Y-m-d");  //aqui pinches obtengo la pvta fecha para evaluar el periodo :v


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">

</script>
      <meta charset="utf-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Control de Ausenstimos</title>
     <link rel="stylesheet" href="./AdminLTE 2 _ Dashboard_files/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./AdminLTE 2 _ Dashboard_files/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./AdminLTE 2 _ Dashboard_files/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./AdminLTE 2 _ Dashboard_files/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./AdminLTE 2 _ Dashboard_files/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./AdminLTE 2 _ Dashboard_files/_all-skins.min.css">
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="./AdminLTE 2 _ Dashboard_files/css">
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
                <a class="navbar-brand" href="capturas.php" style="font-size: 25px;">Recepción</a> 
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
                        <a class="active-menu"  href="index.html"><i class="fa fa-credit-card fa-2x"></i> Captura Reservas</a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-credit-card fa-2x"></i>Pago reserva</a>
                    </li>
                     <li>
                        <a href="index.html"><i class="fa fa-credit-card fa-2x"></i>Lista de reservas</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="h2a">Registro del pago de la reserva<div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo $s_Name;?></div></h2>  
                    </div>
                </div>
				
				<form id="personas" method="post" action="">
					<div class="row">

				
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="form-group">
              <label for="nombre" class="control-label">Cantidad a pagar : </label>
              <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="" disabled>
            </div>
          </div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="form-group">
							<label for="nombre" class="control-label">Tipo de pago : </label>
						<select class="form-control">
              <option>Tarjeta de credito</option>
              <option>Deposito</option>
              <option>Transferencia</option>
              <option>Efectivo</option>
            </select>
						</div>
					</div>
        
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="form-group">
              <label for="nombre" class="control-label">Cantidad que pagó el cliente : </label>
              <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="" >
            </div>
          </div>
           <br>
           <br>
           <br>
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">S-Habitacion 101</span>
              <span class="info-box-number">Disponible</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </div>
				</div>
				<hr>

				<div class="row">
					
					
					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-12">	
						<table class="table table-bordered">
    <thead>
      <tr>
        <th>Cantidad de noches</th>
        <th>Cliente</th>
        <th>Pendiente</th>
        <th>Activo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td width="50px" >4</td>
        <td width="50px"></td>
         <td width="100px"></td>
        <td width="50px"></td>
      </tr>
     
    </tbody>
  </table>

            <div class="form-group">
          <button type="button" class="btn btn-primary">Finalizar Proceso</button>
 </div>
          </div>
									</div>
		   		</form>
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

   


 
 
</body>
</html>
