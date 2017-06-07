<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nomina</title>
<link rel="stylesheet" type="text/css" href="../styles/calculaNomina.css"/>
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
error_reporting(E_ALL ^ E_NOTICE);
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
							$sql = "SELECT id, Categoria, Salario_base, Complementos, Codigo_cotizacion FROM Hoja2 WHERE Categoria = '$categoria'";

							//Recogemos los datos de la query en una variable
							$result = mysqli_query($conexion, $sql);



							if ($result->num_rows > 0) {
							    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
								$id = $row['id'];
								$categoriaH2 = $row['Categoria'];  //Categoria en hoja2
							    $salario_base = $row['Salario_base'];
								$complementos = $row['Complementos'];
								$codigo_cotizacion = $row['Codigo_cotizacion'];
							}

							$sqlcostes = "SELECT Bruto_anual, Retencion, Cuotas, Valor_cuotas, Antiguedad, Trienio FROM Hoja2";

							$resultado = mysqli_query($conexion, $sqlcostes);

							if (mysqli_num_rows($resultado) > 0){

								$indice = 0;
								while($fila = mysqli_fetch_assoc($resultado)){

									$bruto_anual[$indice] = $fila['Bruto_anual'];
									$retencion[$indice] = $fila['Retencion'];
									$cuotas[$indice] = $fila['Cuotas'];
									$valor_cuotas[$indice] = $fila['Valor_cuotas'];
									$antiguedad[$indice] = $fila['Antiguedad'];
									$trienio[$indice] = $fila['Trienio'];
									$indice++;
								}
							}

							/*
							$sql = "SELECT Cuotas, Valor_cuotas FROM hoja2";

							//Recogemos los datos de la query en una variable
							$result = $conexion->query($sql);

							$indice = 0;
							while($fila = mysqli_fetch_array($result)){
								$cuotas[$indice] = $fila['Cuotas'];
								$valor_cuotas[$indice] = $fila['Valor_cuotas'];
								$indice++;
							}


							$sql = "SELECT Antiguedad, Trienio FROM hoja2";

							$result = $conexion->query($sql);

							$indice = 0;
							while($fila = mysqli_fetch_array($result)){
								$antiguedad[$indice] = $fila['Antiguedad'];
								$trienio[$indice] = $fila['Trienio'];
								$indice++;
							}*/

							//CAlculo de la diferencia en meses entre la fecha introducida y la fecha de alta
							$datetime1=new DateTime($fecha_alta);
							$datetime2=new DateTime($filtroFecha);

							// obtenemos la diferencia entre las dos fechas
							$interval=$datetime2->diff($datetime1);

							// obtenemos la diferencia en meses
							$intervalMeses=$interval->format("%m");
							// obtenemos la diferencia en años y la multiplicamos por 12 para tener los meses
							$intervalAnos = $interval->format("%y")*12;

							$anios_antiguedad = $interval->format("%y");   	//Años de antiguedad a la fecha de la nomina
							$meses_antiguedad = $intervalMeses + $intervalAnos;

							$mes_nomina = date( 'm', strtotime( $filtroFecha ));
							$anio_nomina = date( 'Y', strtotime( $filtroFecha ));
							$dias_mes = cal_days_in_month(CAL_GREGORIAN, $mes_nomina, $anio_nomina);  //Dias del mes elegido

							//Calculo trieniazo
							$trieniazo = 0;
							if(($anios_antiguedad > 1) && ($anios_antiguedad % 3) == 0){
								$trieniazo = 1;
							}

							//Calculo prorrata
							$prorrateo = 0;
							if($prorrata_extra == "SI"){
								$prorrateo = 1;
							}




							function dias_transcurridos($fecha_i,$fecha_f){
								$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
								$dias 	= abs($dias); $dias = floor($dias);
								return $dias;
							}


							//Calculo baja
							$estuvoDeBaja = 0;
							$dias_de_baja = 0;
							if($fecha_baja_laboral != NULL){
								$string_de_primer_dia = "01-$mes_nomina-$anio_nomina";
								$string_de_ultimo_dia = "$dias_mes-$mes_nomina-$anio_nomina";
								$fecha_inicio_baja = date_create_from_format("d/m/Y", $fecha_baja_laboral);
								$fecha_fin_baja = date_create_from_format("d/m/Y", $fecha_alta_laboral);

								$primer_dia_mes = date_create_from_format("d-m-Y", $string_de_primer_dia);
								$ultimo_dia_mes = date_create_from_format('d-m-Y', $string_de_ultimo_dia);

								if((strtotime($fecha_baja_laboral) < strtotime($string_de_primer_dia)) && (strtotime($fecha_alta_laboral) > strtotime($string_de_ultimo_dia))){
									//Caso de que este de baja antes del inicio del mes y el alta sea posterior
									$dias_de_baja = $dias_mes;
								}

								if((strtotime($fecha_baja_laboral) < strtotime($string_de_primer_dia)) && (strtotime($fecha_alta_laboral) < strtotime($string_de_ultimo_dia))){
									//Caso de que este de baja antes del inicio del mes y el alta sea en este mismo mes
									//resta de la fecha de alta hasta primer dia de mes
									$dias_de_baja = dias_transcurridos($string_de_primer_dia,$fecha_alta_laboral);
									$mensaje = "Se ha dado de alta este mes";

								}

								if((strtotime($fecha_baja_laboral) > strtotime($string_de_primer_dia)) && (strtotime($fecha_alta_laboral) > strtotime($string_de_ultimo_dia))){
									//Caso de que se de de baja este mes y alta posterior
									//resta desde final de mes a dia de baja
									$dias_de_baja = dias_transcurridos($fecha_baja_laboral, $string_de_ultimo_dia);
									$mensaje="Ha cogido baja este mes";
								}
							}

							//Calculo coste trienio
							$coste_trienios = 0;
							if($trieniazo == 1){
								for($i = 0; $i < sizeof($antiguedad); $i++){
									if($anios_antiguedad/3 == $antiguedad[$i]){
										$coste_trienios = $trienio[$i];									//Coste de trienios anio trieniazo
									}
								}
							}else{
								for($i = 0; $i < sizeof($antiguedad); $i++){
									if((floor($anios_antiguedad/3)) == $antiguedad[$i]){
										$coste_trienios = $trienio[$i];									//Coste trienio anio normal
									}
								}
							}


							//Calculo bruto_anual
							if($trieniazo == 1){
								$salario_bruto_anual = $salario_base + $complementos + ($coste_trienios * 14) + (2 * (($coste_trienios/12) * 14));	//REVISAR REVISAR
							}else{
								$salario_bruto_anual = $salario_base + $complementos + ($coste_trienios * 14);
							}

							//Calculo IRPF
							$redondeo = (round($salario_bruto_anual/1000)*1000);
							for($i = 0; $i < sizeof($bruto_anual); $i++){
								if($redondeo == $bruto_anual[$i]){
									$retenido = $retencion[$i];											//Valor del porcentaje del IRPF
								}
							}


							$bruto_con_prorrateo = ($salario_base/14) + ($complementos/14) + $coste_trienios + ((($salario_bruto_anual/14)*2)/12);
							$bruto_no_prorrateo = ($salario_base/14) + ($complementos/14) + $coste_trienios;

							$salario_base_nomina = round(($salario_base/14),2);
							$complemento_nomina = round(($complementos/14),2);

							$contingencias_generales_trabajador = round((($valor_cuotas[0]/100)*$bruto_con_prorrateo),2);
							$cuota_desempleo_trabajador = round((($valor_cuotas[1]/100)*$bruto_con_prorrateo),2);
							$cuota_formacion_trabajador = round((($valor_cuotas[2]/100)*$bruto_con_prorrateo),2);

							$parte_proporcional_extra = 0;
							if($prorrateo == 1){
								$parte_proporcional_extra = ((($salario_bruto_anual/14)*2)/12);
							}

							$reduccion = ($bruto_con_prorrateo/30);
							if($prorrateo == 1){
								//if(estuvodebaja){

								//}else{
									$bruto_total_nomina = $bruto_con_prorrateo;
								//}
							}else{
								//if(estuvodebaja){

								//}else{
									$bruto_total_nomina = $bruto_no_prorrateo;
								//}
							}


							//Importe IRPF
							if($prorrateo == 1){
								$irpf = round((($retenido/100)*$bruto_con_prorrateo),2);
							}else{
								$irpf = round((($retenido/100)*$bruto_no_prorrateo),2);
							}




							$contingencias_comunes_empresario = round((($valor_cuotas[3]/100)*$bruto_con_prorrateo),2);
							$fogasa_empresario = round((($valor_cuotas[4]/100)*$bruto_con_prorrateo),2);
							$cuota_desempleo_empresario = round((($valor_cuotas[5]/100)*$bruto_con_prorrateo),2);
							$cuota_formacion_empresario = round((($valor_cuotas[6]/100)*$bruto_con_prorrateo),2);
							$cuota_accidentes_empresario = round((($valor_cuotas[7]/100)*$bruto_con_prorrateo),2);


							//Total aportacion de la empresa
							$aportacion_total_empresa = $valor_cuotas[3] + $contingencias_comunes_empresario + $fogasa_empresario + $cuota_desempleo_empresario + $cuota_formacion_empresario;

							$devengado = $salario_base_nomina + $complemento_nomina + $coste_trienios;

							$deduccion_total = $contingencias_generales_trabajador + $cuota_desempleo_trabajador + $cuota_formacion_trabajador + $irpf;;


							$liquido_a_percibir = $devengado - $deduccion_total;

?>


  <img  src="../imagenes/HP_Logo.png"   height="100px" width="100px">



<table >
<tr >
    <td class="filasDatos"><p>empresa</p><?php   echo $nombre_empresa  ?></td>
    <td class="filasDatos"></td>
<td class="filasDatos"></td>
<td class="filasDatos"></td>
    <td class="filasDatos"><p>cif empresa</p><?php   echo $cif_empresa  ?></td>
	
</tr>
<tr>
  <td class="filasDatos"><p>Nombre</p><?php  echo  $nombre.$apellido1.$apellido2 ?></td>
  <td class="filasDatos"><p>DNI</p><?php  echo  $dni ?></td>
  <td class="filasDatos"><p>Fecha alta</p><?php  echo  $fecha_alta ?></td>
  <td class="filasDatos"><p>Datos bancarios</p><?php  echo  $iban ?></td>
  <td class="filasDatos"><p>Centro de trabajo</p>León</td>
</tr>
<tr>
  <td  class="filasDatos" colspan="2"><p>Categoría</p><?php   echo $categoria  ?></td>
  <td  class="filasDatos" colspan="3" ><p>e-mail</p><?php   echo $email  ?></td>
</tr>

<tr>

  <td   class="filasDatos" colspan="1"><p>Código de cotización</p><?php echo $codigo_cotizacion ?></td>
  <td   class="filasDatos" colspan="3"></td>
  <td   class="filasDatos" colspan="1"><p>Días</p><?php echo $dias_mes ?></td>
</tr>


<tr>
  <td class="vaaa"><p>unidades</p></td>
  <td class="vaaa"><p>precio</p></td>
  <td class="vaaa"><p>conceptos</p></td>
  <td  class="vaaa"><p>devengos</p></td>
  <td class="vaaa"><p>retención</p></td>
</tr>

<tr class="ajustaraltura">
  <td class="centrados"><p>1</p>
														 <p>1</p>
														 <p><?php echo $anios_antiguedad?></p>
														 <p><?php echo $valor_cuotas[0]?> %</p>
														 <p><?php echo $valor_cuotas[1]?> %</p>
														 <p><?php echo $valor_cuotas[2]?> %</p>
														 <p><?php echo $retenido?> %</p>
														 <p><?php echo $valor_cuotas[3]?> %</p>
														 <p><?php echo $valor_cuotas[5]?> %</p>
														 <p><?php echo $valor_cuotas[6]?> %</p>
														 <p><?php echo $valor_cuotas[7]?> %</p>
														 <p><?php echo $valor_cuotas[4]?> %</p>

	</td>
  <td class="centrados">
														<p><?php echo $salario_base_nomina ?></p>
														<p><?php echo $complemento_nomina ?></p>
														<p><?php echo $anios_antiguedad ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>
														<p><?php if($prorrateo == 1){
																echo round(($bruto_con_prorrateo),2);
														}else{
																echo round(($bruto_no_prorrateo),2);
														} ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>
														<p><?php echo round(($bruto_con_prorrateo),2) ?></p>

                             </td>
  <td class="centrados"><p>SALARIO BASE</p><p>COMPLEMENTOS</p><p>ANTIGUEDAD</p><p>CONTINGENCIAS COMUNES</p><p>DESEMPLEO</p><p>CUOTA FORMACIÓN</p><p>IRPF</p><p>CONTINGENCIAS COMUNES EMPRESARIO</p><p>DESEMPLEO EMPRESARIO</p><p>FORMACIÓN EMPRESARIO</p><p>ACCIDENTES TRABAJO EMPRESARIO</p><p>FOGASA EMPRESARIO</p></td>
  <td class="devengo" id="devengos">
														 <p><?php echo  $salario_base_nomina ?></p>
														 <p><?php echo $complemento_nomina ?></p>
														 <p><?php echo number_format($coste_trienios) ?></p>
														 <p></p>
														  <p></p>


											 	 		</td>
  <td class="retencion" id="retenciones">
		 					
														 <p><?php echo $contingencias_generales_trabajador ?></p>
														 <p><?php echo $cuota_desempleo_trabajador ?></p>
														 <p><?php echo $cuota_formacion_trabajador ?></p>
														 <p><?php echo $irpf ?></p>
														 <p><?php echo $contingencias_comunes_empresario ?></p>
														 <p><?php echo $cuota_desempleo_empresario ?></p>
														 <p><?php echo $cuota_formacion_empresario ?></p>
														 <p><?php echo $cuota_accidentes_empresario ?></p>
														 <p><?php echo $fogasa_empresario ?></p>
  </td>

</tr>


<tr>
  <td   class="filasResultados"></td>
  <td   class="filasResultados"></td>
  <td   class="filasResultados"></td>
  <td   class="filasResultados"><p>total devengado</p>
																<p><?php echo $devengado ?></p>
	</td>
  <td   class="filasResultados"><p>total deducido</p>
																<p><?php echo $deduccion_total ?></p>

	</td>
</tr>

<tr>
  <td   class="filasResultados" colspan="4"></td>
  <td   class="filasResultados"><p>total a percibir</p>
																<p><?php echo $liquido_a_percibir ?></p>

	</td>
</tr>



</table>



</body>
</html>