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
		$categoria = $row['Categoria']; //recogenos ctegoria de DB


		$apellido1 = $row['Apellido1'];  
		$apellido2 = $row['Apellido2'];  
		$dni = $row['Dni']; 
		$fecha_alta = $row['Fecha_alta']; 
		$nombre_empresa = $row['Nombre_empresa']; 
		$cif_empresa = $row['Cif_empresa']; 
		$iban = $row['IBAN']; 
		$prorrata_extra = $row['Prorrata_extra']; 
		$fecha_baja_laboral = $row['Fecha_baja_laboral'];
		$fecha_alta_laboral = $row['Fecha_alta_laboral'];
		$horas_extra_forzadas = $row['Horas_extra_forzadas'];
		$horas_extra_voluntarias = $row['Horas_extra_voluntarias'];
		$email = $row['email']; 

	}


	//comparamos si password de  login es igual al de la DB
	if (strcmp($password_login, $password)==0) {

		$_SESSION['loggedin'] = true;
		$_SESSION['usuario'] = $usuario_login;

		$_SESSION['apellido1'] = $apellido1;
		$_SESSION['apellido2'] = $apellido2;
		$_SESSION['dni'] = $dni;
		$_SESSION['fecha_alta'] = $fecha_alta;
		$_SESSION['categoria'] = $categoria;
		$_SESSION['nombre_empresa'] = $nombre_empresa;
		$_SESSION['cif_empresa'] = $cif_empresa;
		$_SESSION['iban'] = $iban;
		$_SESSION['prorrata_extra'] = $prorrata_extra;
		$_SESSION['fecha_baja_laboral'] = $fecha_baja_laboral;
		$_SESSION['fecha_alta_laboral'] = $fecha_alta_laboral;
		$_SESSION['horas_extra_forzadas'] = $horas_extra_forzadas;
		$_SESSION['horas_extra_voluntarias'] = $horas_extra_voluntarias;
		$_SESSION['email'] = $email;


		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);    // sino esta activo  surante este tiempo desloga


		  if (strcmp($categoria, "Administrativo")==0){   // comprobamos si el tipo de usuario es admin   sino  else
			$_SESSION["usuario"]=$_POST["login"];//alamcenmos en usuario persona que se ha logado
			header("location:../vista/paginaAdministrador.php");
		   } else {
			$_SESSION["usuario"]=$_POST["login"];//alamcenmos en usuario persona que se ha logado
			header("location:../vista/paginaOtrosEmpleados2.php");
		   }


		}else{   //para  los que no esten en la base se queda en pagna de login 

			header("location:../fullscreen-login/index.php");

			}					
							
	   ?>
</body>
</html>