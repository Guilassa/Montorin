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
   /* $nombre= $_SESSION["usuario"];
	$apellido1=$_SESSION['apellido1'];
	$apellido2=$_SESSION['apellido2'];
	$categoria=$_SESSION['categoria'];
	$email=$_SESSION['email'];
	$dni=$_SESSION['dni'];*/
	
	
		
							    $nombre = $_SESSION['usuario']; 
	                            $apellido1 = $_SESSION['apellido1'];  
								$apellido2 = $_SESSION['apellido2'];  
								$dni=$_SESSION['dni']; 
								$categoria = $_SESSION['categoria']; 
								$fecha_alta = $_SESSION['fecha_alta']; 
								$nombre_empresa = $_SESSION['nombre_empresa']; 
								$cif_empresa = $_SESSION['cif_empresa']; 
								$iban = $_SESSION['iban'];
								$prorrata_extra = $_SESSION['prorrata_extra'];
								$fecha_baja_laboral = $_SESSION['fecha_baja_laboral'];
								$fecha_alta_laboral = $_SESSION['fecha_alta_laboral'];
								$horas_extra_forzadas = $_SESSION['horas_extra_forzadas'];
								$horas_extra_voluntarias = $_SESSION['horas_extra_voluntarias'];
								$email = $_SESSION['email'];
								
								
							
    ?>
    
    
    
    


		

<div class="wrapper jsc-sidebar-content jsc-sidebar-pulled">
	<nav>
		<a href="#" class="icon-menu link-menu jsc-sidebar-trigger"></a>
	</nav>
	<section class="main-content">
    

<div class="column">
  <div class="card"> <img src="../imagenes/team1.jpg" alt="Jane" style="width:100%">
    <div class="container">
      <h2><?php echo $nombre ?> <?php echo $apellido1 ?> <?php echo $apellido2 ?></h2>                <!--imprimimos con querys-->
      <p class="title"><?php echo $categoria ?></p>
      <p>Some text that describes me lorem ipsum ipsum lorem.</p>
      <p><?php echo $email ?></p>
      <p><?php echo $nombre_empresa ?></p>
      <p>
        <button class="button">Modificar</button>
      </p>
    </div>
  </div>

  
	</section>
</div>

		<nav class="sidebar jsc-sidebar" id="jsi-nav" data-sidebar-options="">
	<ul class="sidebar-list">
		<li><a href="paginaOtrosEmpleados2.php" class="current">INFORMACI&Oacute;N PERSONAL</a></li>
		<li><a href="../vista/herramientas.php">MIS HERRAMIENTAS</a></li>
        <li><a href="../vista/datosEconomicos.php">DATOS ECONOMICOS</a></li>
        <li><a href="../vista/puestoDeTrabajo.php">MI PUESTO DE TRABAJO</a></li>
        <li><a href="../vista/informacion.php">INFORMACI&Oacute;N</a></li>
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
