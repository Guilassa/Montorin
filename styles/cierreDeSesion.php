<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>


  <?php
		 session_start();   // a la sesion iniciada 
		 
		 session_destroy(); // la cerramos
		 
		 header("location:../fullscreen-login/index.php");   // y regresamos a pagina de login
		 
		 
  ?>



<body>
</body>
</html>