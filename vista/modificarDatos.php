<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		
        <link rel="stylesheet" type="text/css" href="../styles/paginaOtrosEmpleados.css" media="screen" />

		<link rel="stylesheet" href="../styles/cssMenu/fontello.css" />
		<link rel="stylesheet" href="../styles/cssMenu/normalize.css" />
		
		<link rel="stylesheet" href="../styles/cssMenu/index.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
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
	<nav style="background-color:grey;">
	     <a href="#" class="link-menu jsc-sidebar-trigger" 
             style="text-decoration: none;font-size: 30px; color: white;padding:5px">
                 <i class="fa fa-bars" aria-hidden="true"></i></a>
	</nav>
	<section class="main-content">
    

      <br><br><br><br><br><br><br>
					  
					  <h1>Modifica</h1>
           
              <form class="contacto">
                   <div><label>Nombre : <?php echo $nombre ?> </label></div>
                   <div><label>Primer Apellido : <?php echo $apellido1 ?> </label></div>
                   <div><label>Segundo Apellido : <?php echo $apellido2 ?> </div>
                   <div><label>Dni : <?php echo $dni ?> </label></div>
                   <div><label>Categoria : <?php echo $categoria ?> </label></div>
                   <div><label>Fecha de alta :  <?php echo $fecha_alta ?> </label></div>
                   <div><label>Empresa : <?php echo $nombre_empresa ?> </label></div>
                   <div><label>Cif de Empresa : <?php echo $cif_empresa ?></div>
                   <div><label>Email :</label><input type="text" value="<?php echo $email ?>"></div>
                </form>


	</section>
</div>

	<nav class="sidebar jsc-sidebar" id="jsi-nav" data-sidebar-options="">
	      <ul class="sidebar-list">
            <li><a href="paginaOtrosEmpleados2.php" class="current">INFORMACIÓN PERSONAL</a></li>
            <li><a href="../vista/herramientas.php">MIS HERRAMIENTAS</a></li>
            <li><a href="../vista/datosEconomicos.php">DATOS ECONOMICOS</a></li>        
            <li><a href="../styles/cierreDeSesion.php">SALIR</a></li>
	     </ul>
        </nav>
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