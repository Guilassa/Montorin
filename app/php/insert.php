<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));

$btnName=$dbhandle->real_escape_string($data->btnName);
if($btnName=='Insert'){

$id=$dbhandle->real_escape_string($data->id);
$name=$dbhandle->real_escape_string($data->name);

$query="INSERT INTO hoja1 (Nombre,Apellido1) VALUES('".$id."','".$name."')";

$dbhandle->query($query);
	}

	else {

		$id=$dbhandle->real_escape_string($data->id);
       $name=$dbhandle->real_escape_string($data->name);
       	$query="UPDATE hoja1 SET Apellido1 = '".$name."' WHERE Nombre ='".$id."'";
       	$dbhandle->query($query);



	}

?>