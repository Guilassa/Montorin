<?php
	$order=$_POST['order'];
	$where=$_POST['where'];
	$like=$_POST['like'];

	if(isset($order)){
		
		$conn = new mysqli("localhost", "id1771132_root", "rooot", "id1771132_ingenieriadesoftware");
		$result = $conn->query("SELECT id, Nombre, Apellido1, Apellido2, Categoria, email FROM hoja1 WHERE '$where' LIKE '$like' ORDER BY '$order'");

		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			
				$outp .= $rs["id"]   . ',';
				$outp .= $rs["Nombre"]       . ',';
				$outp .= $rs["Apellido1"]. ',';
				$outp .= $rs["Apellido2"] . ',';
				$outp .= $rs["Categoria"] . ',';
				$outp .= $rs["email"]     . '.';

		}
		$conn->close();

		echo($outp);
		
	}else{
		echo "nada";
	}

	
?>