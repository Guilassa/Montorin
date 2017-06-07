<!DOCTYPE html>
<html>
<head>
	<title>22</title>
</head>
<body>

    <h1>HOOOOOOLAA</h1>


	<div class="entry">
					<p>

						<?php
							session_start();
						?>
							 
						<?php
							 
							include 'datosBDSI2.php'; //Incluye las variables de datos_bd

							//Conexion a la base de datos local 
							$conexion = mysqli_connect($host_DB, $usuario_DB, $password_DB, $nombre_DB);
							if ($conexion->connect_error) {
							 die("La conexion falló: " . $conexion->connect_error);
							}
							 
							$usuario_login = $_POST['usuario'];
							$password_login = $_POST['password'];
							  
						    	//Query para seleccionar el usuario introducido por login
							$sql = "SELECT * FROM $hoja1 WHERE Nombre = '$usuario_login'";
							
							//Recogemos los datos de la query en una variable
							$result = $conexion->query($sql);
							 
							
							if ($result->num_rows > 0) {
							    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							    $hash = $row['Contraseña'];
							    $tipoUser = $row['Categoria'];
							}

							if (strcmp($password_login, $tipoUser)==0) { 
							 
							    $_SESSION['Nombre'] = $usuario_login;
							    $_SESSION['Categoria'] = $tipoUser;
							    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
							 
							    echo "Bienvenido! " . $_SESSION['Nombre'];


							    if (strcmp($tipoUser, "Administrativo")==0){
							    	echo "<br><br><a href=admin.php>Continuar</a>";
							    } else {
									echo "<br><br><a href=subastador.php>Continuar</a>";
							    }
							 
							}else{
							      echo "Usuario o Password incorrecto.";
							      echo "<br><a href='login.php'>Volver a Intentarlo</a>";
							}

							/* liberar la serie de resultados */
							$result->free();
							 
							 mysqli_close($conexion);
						?>

					</p>
				</div>
</body>
</html>
