<html>
<head>

 <meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="../styles/paginaOtrosEmpleados.css" media="screen" />
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
	
	echo "<h2> Pagina otros empleados</h2>";

    echo "BienVenido: " .$_SESSION["usuario"]."<br><br>";

    ?>
    


 <div class="row">
  <div class="column">
    <div class="card">
      <img src="../imagenes/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>




</body>
</html>