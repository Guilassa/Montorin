<html>
<head>
	<title></title>
</head>
<body>


 	<?php
			

	try {


		$base = new PDO("mysql:host=localhost;dbname=ingenieriadesoftwaredemohpinc","root","");
		$base->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM hoja1 WHERE Nombre= :login AND Password= :password" ;

		$resultado=$base->prepare($sql)	;

		
		$login=htmlentities(addslashes($_POST["login"]));
		$password=htmlentities(addslashes($_POST["password"]));
		
		
		$tipoUsuario = $row['Categoria'];


		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":password", $password);
		
		


		$resultado->execute();

		$numero_registro=$resultado->rowCount();

		if ($numero_registro!=0) {

			 session_start(); //crea sesion
				 
		     $_SESSION["usuario"]=$_POST["login"];//alamcenmos en usuario persona que se ha logado

			 header("location:paginaAdministrador.php");
				 
			
			 
			 

		} else {
            	
             header("location:index.php");
		}



	} catch (Exception $e) {

		die("Error:" . $e->getMessage());

	}

					  
						
    ?>
</body>
</html>