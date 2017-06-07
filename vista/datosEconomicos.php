<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SidebarJS</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../styles/paginaOtrosEmpleados.css" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400" rel="stylesheet" />
<link rel="stylesheet" href="../styles/cssMenu/fontello.css" />
<link rel="stylesheet" href="../styles/cssMenu/normalize.css" />
<link rel="stylesheet" href="../styles/cssMenu/index.css" />
<link rel="stylesheet" href="../styles/cssMenu/sidebar.css" />
</head>
<body>
<?php

    session_start();//reanudamos sesion para recuperar lo que se almaceno durante sesion en la otra pagina

    if (!isset($_SESSION["usuario"])) { //si nadie inicio sesion 
    	
    	header("location:../fullscreen-login/index.php");   //regresamos a pagina de login

    } 

    ?>
<?php           // en otro caso osea si alguien ha inciado sesion
	

    //recogemos datos de sesion
    $nombre= $_SESSION["usuario"];
	$apellido1=$_SESSION['apellido1'];
	$apellido2=$_SESSION['apellido2'];
	$categoria=$_SESSION['categoria'];
	$email=$_SESSION['email'];
	$empresa=$_SESSION['nombre_empresa'];
	$dni=$_SESSION['dni'];
							
    ?>
<div class="wrapper jsc-sidebar-content jsc-sidebar-pulled">
  <nav> <a href="#" class="icon-menu link-menu jsc-sidebar-trigger"></a> </nav>
  <section class="main-content">
    <div>
      <h1>Datos Economicos</h1>
      <h2>Generar Nomina</h2>
      <form action="../modelo/calculaNomina.php" method="post" >
        <label>Fecha (Formato yyyy/MM/dd):</label>
        <br>
        <input name="filtroFecha" type="date" id="filtroFecha">
        <br>
        <br>
        <input type="submit" name="Submit" value="DESCARGAR">
      </form>
    </div>
  </section>
</div>
<nav class="sidebar jsc-sidebar" id="jsi-nav" data-sidebar-options="">
  <ul class="sidebar-list">
    <li><a href="paginaOtrosEmpleados2.php" class="current">INFORMACIÓN PERSONAL</a></li>
    <li><a href="../vista/herramientas.php">MIS HERRAMIENTAS</a></li>
    <li><a href="../vista/datosEconomicos.php">DATOS ECONOMICOS</a></li>
    <li><a href="../vista/puestoDeTrabajo.php">MI PUESTO DE TRABAJO</a></li>
    <li><a href="../vista/informacion.php">INFORMACIÓN</a></li>
    <li><a href="../styles/cierreDeSesion.php">SALIR</a></li>
  </ul>
</nav>
<script src="../styles/cssMenu/jquery.min.js"></script> 
<script src="../styles/cssMenu/sidebar.js"></script> 
<script>
			$('#jsi-nav').sidebar({
				trigger: '.jsc-sidebar-trigger',
				pullCb: function () { console.log('pull'); },
				pushCb: function () { console.log('push'); }
			});
		</script>
</body>
</html>
