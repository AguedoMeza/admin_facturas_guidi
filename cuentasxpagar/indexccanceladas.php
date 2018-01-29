<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
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
<script type="text/javascript">
        function OnChangeCheckbox (checkbox) {
            ajax = function(url){
                var xhr = window.XMLHttpRequest ? 
                          new XMLHttpRequest() : 
                          new ActiveXObject("Microsoft.XMLHTTP") || 
                          new ActiveXObject("Msxml2.XMLHTTP");
         
                xhr.open("GET", url, true);
                xhr.send(null);
            };
        var estado = checkbox.checked ? 1 : 0, //Si está marcado, asigno 1 a 'estado', si no, 0
        id = checkbox.getAttribute("data-id"), //El valor del pseudo-atributo 'data-id'
        url = "editar_estado.php?estado=" + estado + "&id=" + id;
        ajax(url); 

        if (estado==0) {
            alert("Registro desactivado");
        };
        if (estado==1) {
            alert("Factura cancelada correctamente cualquier duda comuniquese con el adm. de sistemas");
            window.location="index.php";

        };
        }
    </script>
 <!--  modal pagar  -->



    

<!--  fin modal pagar  -->
<!-- Inicio modal updte -->
   <script>
    $(document).ready(function (e) {

        $('#miventana').on('show.bs.modal', function(e) {    
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#aula').val(id);
        });
    });
  </script>
  <script>
    $(document).ready(function (e) {

        $('#modal_cc').on('show.bs.modal', function(e) {    
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#lv').val(id);
        });
    });
  </script>
  <script>
  $(function(){
            $("#formulario").on("submit", function(e){
                e.preventDefault();
                var f = $(this);
                var formData = new FormData(document.getElementById("formulario"));
                //formData.append("dato", "valor");
                //formData.append(f.attr("name"), $(this)[0].files[0]);
                $.ajax({
                    url: "ejecutar_insertar.php",
                    type: "POST",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
           processData: false
                })
                    .done(function(res){
                        //$("#mensaje").html("Respuesta: " + res);
                        $('#miventana').modal('hide');
                        alert("Factura registrada correctamente");
                        window.location="index.php";
                    });
            });
        });
  </script> 
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
font-size: 20px;"> <center>HOTEL GUIDI LINARES | DEPARTAMENTO DE SISTEMAS | JOSE AGUEDO SERNA MEZA</center> </div><div style="float: right; padding: 15px 50px 5px 50px;"><a href="../login/cerrarsesion.php" class="btn btn-danger square-btn-adjust" style="background-color: #095219">Salir</a> </div></div>
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
                     <h2 class="h2a">LISTA DE CUENTAS X PAGAR CANCELADAS<div style="font-size: 20px;" class="pull-right">Bienvenido: Orlando Cardenas</div></h2>  
                    </div>
                </div>
				<span id="liveclock"></span>
				<form id="personas" method="post" action="">
					<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="form-group">
              <select class="form-control" onchange="location = this.value;">
                 <option>Selecciona una opción</option>
                 <option value="indexcpagadas.php">Pagadas</option>
                 <option value="indexccanceladas.php" >Canceladas</option>
                  <option value="index.php" >Pendientes</option>
               </select>
            </div>
          </div>
					 <div class="col-xs-3 col-sm-6 col-md-6 col-lg-4">
            <div class="form-group">
              <!-- <button type="button" class="btn btn-primary" data-toggle='modal' data-target='#miventana' >Registrar Factura</button> -->
            </div>
          
          </div>
          
				</div>
				<hr>

				<div class="row">
					
					
					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-12">	
						<!-- inicio tabla -->
         <?php
          include("lista_cuentas_canceladas.php");
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
    include('modal_insertar.php');
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


