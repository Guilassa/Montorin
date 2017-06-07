<?php
	$a=$_POST['q'];
	if(isset($a)){
		
		$conn = new mysqli("localhost", "root", "root", "ingenieriadesoftware");
		$result = $conn->query("SELECT email FROM hoja1 WHERE id LIKE '$a'");

		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
				$outp .= $rs["email"];

		}
		$outp =$outp;
		$conn->close();

		echo($outp);
		
	}else{
		echo "nada";
	}

	
?>