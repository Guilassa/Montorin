<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
		 session_start();
	   ?>
<?php
		                    include 'datos_bd.php'; //Incluye las variables de datos_bd
		              
		                    //Conexion a la base de datos local 
							$conexion = mysqli_connect($host_DB, $usuario_SQL, $password_SQL, $nombre_DB);
							if ($conexion->connect_error) {
							 die("La conexion falló: " . $conexion->connect_error);
							}
							 
							$usuario_login = $_POST['login'];     //recibidos de formulario
							$password_login = $_POST['password'];
							
								//Query para seleccionar el usuario introducido por login
							$sql = "SELECT * FROM hoja1 WHERE Nombre = '$usuario_login'";   // si usuario de base es = a usuario recogido de login
							
							//Recogemos los datos de la query en una variable
							$result = $conexion->query($sql);
							
							
							if ($result->num_rows > 0) {
							    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
								$password = $row['Password'];  //recogremos pass de DB
							    $tipoUser = $row['Categoria']; //recogenos ctegoria de DB
								
							}
							
							
							//comparamos si password de  login es igual al de la DB
							if (strcmp($password_login, $password)==0) {
								
								$_SESSION['loggedin'] = true;
							    $_SESSION['usuario'] = $usuario_login;
							    $_SESSION['tipo'] = $tipoUser;
							    $_SESSION['start'] = time();
							    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);    // sino esta activo  surante este tiempo desloga
								 
								  
								  if (strcmp($tipoUser, "Administrativo")==0){   // comprobamos si el tipo de usuario es admin   sino  else
								    $_SESSION["usuario"]=$_POST["login"];//alamcenmos en usuario persona que se ha logado
							    	header("location:../vista/paginaAdministrador.php");
							       } else {
									$_SESSION["usuario"]=$_POST["login"];//alamcenmos en usuario persona que se ha logado
									header("location:../vista/paginaOtrosEmpleados.php");
							       }
								
								
								}else{   //para  los que no esten en la base se queda en pagna de login 
									
									header("location:../fullscreen-login/index.php");
									
									}
							
							
							
							
	   ?>
</body>
</html>