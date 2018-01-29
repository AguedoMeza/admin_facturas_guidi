<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script src="../jquery-3.2.1.min.js"></script>     
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
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="h2a">LISTA DE RESERVAS<div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo $s_Name;?></div></h2>  
                    </div>
                </div>
				<span id="liveclock"></span>
				<form id="personas" method="post" action="">
					<div class="row">

					

         
          
          
				

            
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="form-group">
         
 </div>
          </div>
				</div>
				<hr>

				<div class="row">
					
					
					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-12">	
						<!-- inicio tabla -->
         <?php
          include("lista_reservas.php");
          ?>
            <!-- fin tabla -->
            <div class="form-group">
         
 </div>
          </div>
									</div>
		   		</form>
<hr>
      

      
      </div>


		 </div>


                
  </div>


<?php 
    include('modal.php');
      ?>

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
