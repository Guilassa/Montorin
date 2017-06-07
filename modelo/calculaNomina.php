<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../styles/calculaNomina.css" media="screen" />
</head>

<body>
<?php
		 session_start();
?>

<?php          
	
			
								

								//recogemos datos de sesion
							    $nombre = $_SESSION['usuario']; 
	                            $apellido1 = $_SESSION['apellido1'];  
								$apellido2 = $_SESSION['apellido2'];  
								$dni=$_SESSION['dni']; 
								$categoria = $_SESSION['categoria']; 
								$fecha_alta = $_SESSION['fecha_alta']; 
								$nombre_empresa = $_SESSION['nombre_empresa']; 
								$cif_empresa = $_SESSION['cif_empresa']; 
								$iban = $_SESSION['iban'];
								$prorrata_extra = $_SESSION['prorrata_extra'];
								$fecha_baja_laboral = $_SESSION['fecha_baja_laboral'];
								$fecha_alta_laboral = $_SESSION['fecha_alta_laboral'];
								$horas_extra_forzadas = $_SESSION['horas_extra_forzadas'];
								$horas_extra_voluntarias = $_SESSION['horas_extra_voluntarias'];
								$email = $_SESSION['email'];
								
							
    ?>
    
    
    
<?php
	
	                
								 
								 
						    $filtroFecha = $_POST['filtroFecha'];     //fecha recibia de formulario
							/*echo($filtroFecha);*/
							
							
							
					
							
							
							////////////////////////////////////////////////////////////////////////////////////////////
							/////////                                                                            ///////
							/////////          RECOGEMOS DATOS DE DB DE HOJA2 PARA CALCULOS Y MOSTRAR EN NOMINA  ///////
							/////////                                                                            ///////
							////////////////////////////////////////////////////////////////////////////////////////////
							
						    include 'datos_bd.php'; //Incluye las variables de datos_bd
		              
		                    //Conexion a la base de datos local 
							$conexion = mysqli_connect($host_DB, $usuario_SQL, $password_SQL, $nombre_DB);
							if ($conexion->connect_error) {
							 die("La conexion falló: " . $conexion->connect_error);
							}
							
							
							  //Query para seleccionar el usuario introducido por login
							$sql = "SELECT * FROM hoja2 WHERE Categoria = '$categoria'";  
							
							//Recogemos los datos de la query en una variable
							$result = $conexion->query($sql);
							
							
								
							if ($result->num_rows > 0) {
							    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
								$id = $row['id']; 
								$categoriaH2 = $row['Categoria'];  //Categoria en hoja2
							    $salario_base = $row['Salario_base']; 
								$complementos = $row['Complementos'];
								$codigo_cotizacion = $row['Codigo_cotizacion'];
								$bruto_anual = $row['Bruto_anual'];
								$retencion = $row['Retencion'];
								$cuotas = $row['Cuotas'];
								$valor_cuotas = $row['Valor_cuotas'];
								$antiguedad = $row['Antiguedad'];
								$trienio = $row['Trienio'];
						
								
							}
							
							

							
	   
?>


  <img  src="../imagenes/HP_Logo.png"   height="100px" width="100px">



<table >
<tr >
  <td colspan="5"><p>empresa</p><?php   echo $nombre_empresa  ?> <p>cif empresa</p><?php   echo $cif_empresa  ?></td>  
</tr>
<tr>
  <td class="filasDatos"><p>nombre</p><?php  echo  $nombre.$apellido1.$apellido2 ?></td> 
  <td class="filasDatos"><p>dni</p><?php  echo  $dni ?></td> 
  <td class="filasDatos"><p>fecha alta</p><?php  echo  $fecha_alta ?></td> 
  <td class="filasDatos"><p>datos bancarios</p><?php  echo  $iban ?></td> 
  <td class="filasDatos"><p>centro de trabajo</p>León</td> 
</tr>
<tr>
  <td  class="filasDatos" colspan="2"><p>categoria</p><?php   echo $categoria  ?></td> 
  <td  class="filasDatos" colspan="3" ><p>email</p><?php   echo $email  ?></td>  
</tr>

<tr>
  
  <td   class="filasDatos" colspan="1"><p>codigo de cotización</p>?</td>  
  <td   class="filasDatos" colspan="3"><p>tipo de contrato</p>?</td>  
  <td   class="filasDatos" colspan="1"><p>dias</p>?</td>
</tr>


<tr>
  <td   ><p>unidades</p></td> 
  <td   ><p>precio</p></td> 
  <td    ><p>conceptos</p></td>  
  <td   ><p>devengos</p></td>  
  <td  ><p>retencion</p></td>
</tr>

<tr>
  <td   class="filasprecios"><p>1.0000</p></td> 
  <td   class="filasprecios"><p><?php echo  $salario_base ?></p><p><?php echo  $complementos/12 ?></p><p>falta></p><p><?php echo  $valor_cuotas ?></p>
                             <p><?php if($valor_cuotas=='1.6'){echo  $valor_cuotas;}; ?></p>
                             <p><?php if($valor_cuotas=='0.1'){echo  $valor_cuotas;}; ?></p>
                             
                             </td> 
  <td   class="filasprecios"><p>SALARIO BASE</p><p>COMPLEMENTOS</p><p>ANTIGUEDAD</p><p>CONTINGENCIAS COMUNES</p><p>DESEMPLEO</p><p>CUOTA FORMACIÓN</p><p>IRPF</p><p>CONTINGENCIAS COMUNES EMPRESARIO</p><p>DESEMPLEO EMPRESARIO</p><p>FORMACIÓN EMPRESARIO</p><p>ACCIDENTES TRABAJO EMPRESARIO</p><p>FOGASA EMPRESARIO</p></td>  
  <td   class="filasprecios"><?php echo  $salario_base ?></td>  
  <td   class="filasprecios"></td>
</tr>


<tr>
  <td   class="filasResultados"><p>rem total</p></td> 
  <td   class="filasResultados"><p>base I.R.P.F</p></td> 
  <td   class="filasResultados"><p>base de cotización</p></td>  
  <td   class="filasResultados"><p>total devengado</p></td>  
  <td   class="filasResultados"><p>total deducir</p></td>
</tr>

<tr> 
  <td   class="filasResultados" colspan="4"><p>acumulado</p></td>  
  <td   class="filasResultados"><p>total a percibir</p></td>
</tr>



</table>



</body>
</html>