<?php
        $conn = new mysqli("localhost", "id1771132_root", "rooot", "id1771132_ingenieriadesoftware");
        error_reporting(E_ALL ^ E_NOTICE);
	$a=$_POST['q'];
	$array=$_POST['array'];
	$d=$_POST['d'];
	$arrayAdd=$_POST['arrayAdd'];
	$bases=$_POST['bases'];

	if(isset($a)){
	
		$result = $conn->query("SELECT * FROM hoja1 WHERE id LIKE '$a'");

		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= $rs["Nombre"]. ',';			//0	Nombre
			$outp .= $rs["Apellido1"]. ',';			//1	Apellido1
			$outp .= $rs["Apellido2"]. ',';			//2	Apellido2
			$outp .= $rs["Categoria"]. ',';			//3	Categoria
			$outp .= $rs["email"]. ',';				//4	email
			$outp .= $rs["Fecha_alta"]. ',';		//5 Fecha de Alta
			$outp .= $rs["Nombre_empresa"]. ',';	//6	Empresa
			$outp .= $rs["Cif_empresa"]. ',';		//7	Cif Empresa
			$outp .= $rs["Cod_cuenta"]. ',';		//8	Codigo CC
			$outp .= $rs["IBAN"]. ',';				//9 IBAN
			$outp .= $rs["Prorrata_extra"]. ',';	//10 Prorrata Extra
			$outp .= $rs["Dni"]. ',';				//11 Dni
			$outp .= $rs["Fecha_baja_laboral"]. ',';//12 Fecha baja laboral	
			$outp .= $rs["Fecha_alta_laboral"]. ',';//13 Fecha alta laboral
			$outp .= $rs["Password"];				//14 Password
			
		}
		$conn->close();

		echo($outp);
		
	}
	elseif(isset($array))
	{
		
		$sql = "UPDATE hoja1 SET Nombre = '$array[0]',
								Apellido1 = '$array[1]',
								Apellido2 = '$array[2]',
								Categoria = '$array[3]',
								email = '$array[4]',
								Fecha_alta = '$array[5]',
								Nombre_empresa = '$array[6]',
								Cif_empresa = '$array[7]',
								Cod_cuenta = '$array[8]',
								IBAN = '$array[9]',
								Dni = '$array[10]',
								Password = '$array[11]'
								WHERE id LIKE '$array[12]'";

		if ($conn->query($sql) === TRUE) {
			echo "Se ha actualizado correctamente";
		} else {
			echo "Error al realizar la peticion: " . $conn->error;
		}
		$conn->close();
	}
	elseif(isset($arrayAdd))
	{
		
		$sql = "INSERT INTO hoja1 (Nombre , Apellido1 , Apellido2 ,	Categoria , email , Fecha_alta , Nombre_empresa , 
				Cif_empresa , Cod_cuenta , IBAN , Dni, Password ) 
				VALUES ('$arrayAdd[0]','$arrayAdd[1]','$arrayAdd[2]','$arrayAdd[3]','$arrayAdd[4]','$arrayAdd[5]','$arrayAdd[6]' , 
                                '$arrayAdd[7]','$arrayAdd[8]','$arrayAdd[9]','$arrayAdd[10]','$arrayAdd[11]')";

		if ($conn->query($sql) === TRUE) {
			echo "Se ha añadido correctamente";
		} else {
			echo "Error al realizar la peticion: " . $conn->error;
		}
		$conn->close();
	}
	elseif(isset($bases) && $bases==1)
	{
		
		$result = $conn->query("SHOW DATABASES");

		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= $rs["Db"];
		}
		echo($outp);
	}
	else
	{
		
		$sql = "DELETE FROM hoja1 WHERE id LIKE '$d'";

		if ($conn->query($sql) === TRUE) {
			echo "Se ha eliminado correctamente";
		} else {
			echo "Error al realizar la peticion: " . $conn->error;
		}
		$conn->close();	
	}
?>