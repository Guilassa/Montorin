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
							 
							$password = $_POST['passwordActual'];     //recibidos de formulario
							$passwordNuevoA = $_POST['passwordNuevoA'];
							$passwordNuevoB = $_POST['passwordNuevoB'];
							
						    //Query para seleccionar el usuario introducido por login
							$sql = "SELECT * FROM hoja1 WHERE Password = '$password'";   // si contaseña de base es = a contraseña recogida de form
							
							//Recogemos los datos de la query en una variable
							$result = $conexion->query($sql);
							
							
							if ($result->num_rows > 0) {
							    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
								$passwordBase = $row['Password'];  //recogremos pass de DB
								$dni = $row['Dni'];  //recogremos pass de DB
								
					
							}
							
							
							//comparamos si password de  form es igual al de la DB
							if (strcmp($password, $passwordBase)==0) {
								
							  
							  
							  
							     if (strcmp($passwordNuevoA, $passwordNuevoB)==0) {
									 
								   
									 
									 
									 $sql = "UPDATE hoja1 SET Password = '$passwordNuevoA' WHERE Dni = '$dni' ";
									 $result = $conexion->query($sql);
									 
									   echo("se ha cambiado contraseña");
								
								}else{   //para  los que no corresponda regresara a pagina de Herramientas
								
									 echo("las contraseñas nuevas no coinciden");
									}
							  
							 
								
								
								}else{   //para  los que no corresponda regresara a pagina de Herramientas
									
									header("loation:../vista/herramientas.php");
									
									}
							
							
							
							
	   ?>
</body>
</html>