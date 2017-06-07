<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="../styles/paginaOtrosEmpleados.css" media="screen" />



        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400" rel="stylesheet" />
		<link rel="stylesheet" href="../styles/cssMenu/fontello.css" />
		<link rel="stylesheet" href="../styles/cssMenu/normalize.css" />
		
		<link rel="stylesheet" href="../styles/cssMenu/index.css" />
		
		<link rel="stylesheet" href="../styles/cssMenu/sidebar.css" />


</head>
<body>
<a href="../styles/cierreDeSesion.php">Cierra Sesión</a>


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
							
    ?>
    






 
 <div class="wrapper jsc-sidebar-content jsc-sidebar-pulled">
	<nav>
		<a href="#" class="icon-menu link-menu jsc-sidebar-trigger"></a>
	</nav>
	<section class="main-content">
    
    
		<div class="row">
<div class="column">
  <div class="card"> <img src="../imagenes/team1.jpg" alt="Jane" style="width:100%">
    <div class="container">
      <h2><?php echo $nombre ?></h2>                <!--imprimimos con querys-->
      <p class="title"><?php echo $categoria ?></p>
      <p>Some text that describes me lorem ipsum ipsum lorem.</p>
      <p><?php echo $email ?></p>
      <p><?php echo $empresa ?></p>
      <p>
        <button class="button">Contact</button>
      </p>
    </div>
  </div>
</div>

	</section>
    
</div>

		<nav class="sidebar jsc-sidebar" id="jsi-nav" data-sidebar-options="">
	<ul class="sidebar-list">
		<li><a href="paginaOtrosEmpleados.php" class="current">SidebarJS</a></li>
		<li><a href="http://github.com/makotot/sidebar/">View on Github</a></li>
		<li><a href="http://github.com/makotot/sidebar/releases">Download</a></li>
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