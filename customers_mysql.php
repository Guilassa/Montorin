<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "root", "ingenieriadesoftware");

$result = $conn->query("SELECT Nombre, Apellido1, Apellido2 , Dni FROM hoja1");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Nombre":"'  . $rs["Nombre"] . '",';
    $outp .= '"Apellido1":"'   . $rs["Apellido1"]        . '",';
    $outp .= '"Apellido2":"'. $rs["Apellido2"]     . '"}';
	
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>