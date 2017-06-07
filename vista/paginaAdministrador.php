<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="../styles/index.css" media="screen" />
</head>
<body>
<?php

    session_start();//reanudamos sesion para recuperar lo que se almaceno durante sesion en la otra pagina

    if (!isset($_SESSION["usuario"])) { //si nadi inicio sesion 
    	
    	header("location:../fullscreen-login/index.php");   //regresamos a pagina de login

    } 

    ?>
<?php
	
	echo "<h2> Pagina Administradores</h2>";

    echo "BienVenido: " .$_SESSION["usuario"]."<br><br>";

    ?>
<div class="parallax"></div>
<div style="height:100px;background-color:#898592;font-size:36px"> 1  Scroll Up and Down this page to see the parallax scrolling effect.
  This div is just here to enable scrolling.
  Tip: Try to remove the background-attachment property to remove the scrolling effect. </div>
<div class="parallax2"></div>
<div style="height:100px;background-color:#898592;font-size:36px"> 2   Scroll Up and Down this page to see the parallax scrolling effect.
  This div is just here to enable scrolling.
  Tip: Try to remove the background-attachment property to remove the scrolling effect. </div>
<div class="parallax3"></div>
<div style="height:100px;background-color:#898592;font-size:36px"> 3   Scroll Up and Down this page to see the parallax scrolling effect.
  This div is just here to enable scrolling.
  Tip: Try to remove the background-attachment property to remove the scrolling effect. </div>
<div class="parallaxDown"></div>
</body>
</html>