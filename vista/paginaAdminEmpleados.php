<?php
$a=$_POST['var1'];
if(isset($a))
{
	
}
else{
	header ("Location: paginaAdministrador.php");
}

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Administrador de Trabajadores</title>
		
        <link rel="stylesheet" type="text/css" href="../styles/paginaOtrosEmpleados.css" media="screen" />

		<link rel="stylesheet" href="../styles/cssMenu/fontello.css" />
		<link rel="stylesheet" href="../styles/cssMenu/normalize.css" />
		
		<link rel="stylesheet" href="../styles/cssMenu/index.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="../styles/cssMenu/sidebar.css" />
	</head>
	<body>
    
<div class="wrapper jsc-sidebar-content jsc-sidebar-pulled">
	<nav>
		<a href="#" class="icon-menu link-menu jsc-sidebar-trigger"></a>
	</nav>
	<section class="main-content">
    

<div class="column">
  <div class="card"> <img src="../imagenes/team1.jpg" alt="Jane" style="width:100%">
    <div class="container">
      <h3 id="nombreApellidos"></h3><!--imprimimos con querys-->
		  <p id="categoria"></p>
		  <p id="email"></p>
		  <p id="empresa"></p>
		  <p></p>
		  <?php
			if($a!=-1){
			?>
			  <a href="paginaAdministrador.php" onClick="eliminar()" style="text-decoration: none;font-size: 42px; color: darkred;">
					<i class="fa fa-trash" aria-hidden="true"></i>
			  </a>
			<?php
			}
			?>
    </div>
  </div>
<div class="datos">
	<form>
		<input type="hidden" name="id" id="id" value= "<?php echo $a ?>" />
		<table align="center">
			<tr>
				<td>Nombre</td>
				<td>1er Apellido</td>
				<td>2o Apellido</td>
			</tr>
			<tr>
				<td><input type="text" name = "nombre" id="inputNombre" placeholder="Nombre" value="" required /></td>

				<td><input type="text" name = "apellido1" id="inputApellido1" placeholder="1er Apellido" value="" required /></td>

				<td><input type="text" name = "apellido2" id="inputApellido2" placeholder="2o Apellido" value="" required /></td>

			</tr>
			<tr>
				<td>Categoría</td>
				<td>Fecha de Alta</td>
				<td>Dni</td>
			</tr>
			<tr>
				<td><input type="text" name = "categoria" id="inputCategoria" placeholder="Categoría" value="" required /></td>

				<td><input type="text" name = "fechaAlta" id="inputFechaAlta" placeholder="Fecha de Alta" value="" required /></td>

				<td><input type="text" name = "dni" id="inputDni" placeholder="Dni" value="" required /></td>

			</tr>
			<tr>
				<td>E-Mail</td>
				<td>Contraseña</td>
				<td>Empresa</td>
			</tr>
			<tr>
				<td><input type="text" name = "email" id="inputMail" placeholder="E-Mail" value="" required /></td>

				<td><input type="text" name = "pass" id="inputPass" placeholder="Contraseña" value="" required /></td>
				
				<td><input type="text" name = "empresa" id="inputEmpresa" placeholder="Empresa" value="" required /></td>

			</tr>
			<tr>
				<td>CCC</td>
				<td>IBAN</td>
				<td>CIF Empresa</td>

			</tr>
			<tr>
				<td><input type="text" name = "ccc" id="inputCCC" placeholder="CCC" value="" required /></td>

				<td><input type="text" name = "iban" id="inputIBAN" placeholder="IBAN" value="" required /></td>
				
				<td><input type="text" name = "cif" id="inputCif" placeholder="Cif Empresa" value="" required /></td>

			</tr>
			<tr>
				<td>
				<?php
					if($a==-1){
						?>
							<button type="submit" class ="button" name="btn-add"><a href="paginaAdministrador.php" onClick="add()"/>Añadir</button>
						<?php	
					}else{
						?>	
							<button type="submit" class ="button" name="btn-update"><a href="paginaAdministrador.php" onClick="actualizar()"/>Actualizar</button>
						<?php
					}
			 	?>
				</td>
				<td>	
					<button class ="button" style="margin: 33px 0"><a href="paginaAdministrador.php"/>Cancel</button>
				</td>
			</tr>
		</table>
	</form>
</div>

	</section>
</div>

		<nav class="sidebar jsc-sidebar" id="jsi-nav" data-sidebar-options="">
	<ul class="sidebar-list">
		<li><a href="#" class="current">INFORMACI&Oacute;N PERSONAL</a></li>
		<li><a href="../vista/herramientas.php">MIS HERRAMIENTAS</a></li>
        <li><a href="../vista/datosEconomicos.php">DATOS ECONOMICOS</a></li>
        <li><a href="../vista/puestoDeTrabajo.php">MI PUESTO DE TRABAJO</a></li>
        <li><a href="../vista/informacion.php">INFORMACI&Oacute;N</a></li>
		<li><a href="../styles/cierreDeSesion.php">SALIR</a></li>
	</ul>
</nav>


	<script src="../styles/cssMenu/jquery.min.js"></script>

	<script src="../styles/cssMenu/sidebar.js"></script>
	<script>
		
		var q = "<?php echo $_POST['var1']?>";

		$.ajax({
			// aqui va la ubicación de la página PHP
		  url: '../php/search2.php',
		  type: 'post',
		  data: {'q':q},
		  success:function(resultado){
			// imprime "resultado Funcion"
			//alert(resultado);
			var resultado = resultado;
			var datos=resultado.split(",");

			
			if(q !="-1"){
				document.getElementById("inputNombre").value = datos[0];
				document.getElementById("inputApellido1").value = datos[1];
				document.getElementById("inputApellido2").value = datos[2];
				document.getElementById("inputCategoria").value = datos[3];
				document.getElementById("inputFechaAlta").value = datos[5];
				document.getElementById("inputEmpresa").value = datos[6];	  
				document.getElementById("inputMail").value = datos[4];	  
				document.getElementById("inputPass").value = datos[14];	  
				document.getElementById("inputCif").value = datos[7];	  
				document.getElementById("inputCCC").value = datos[8];	  
				document.getElementById("inputIBAN").value = datos[9];
				document.getElementById("inputDni").value = datos[11];
			}
			if(q =="-1"){
				document.getElementById("nombreApellidos").innerHTML = "Nombre";  
				document.getElementById("categoria").innerHTML = "1er Apellido";
				document.getElementById("email").innerHTML = "2o Apellido";
				document.getElementById("empresa").innerHTML = "Empresa"; 
			}else{  
			document.getElementById("nombreApellidos").innerHTML = datos[0]+" "+datos[1]+" "+datos[2];  
			document.getElementById("categoria").innerHTML = datos[3];
			document.getElementById("email").innerHTML = datos [4];
			document.getElementById("empresa").innerHTML = datos[6];   
			}
		  }})

	</script>
	<script>
		function actualizar()
		{
			var array = [
			document.getElementById("inputNombre").value ,		//0		Nombre
			document.getElementById("inputApellido1").value ,	//1		Apellido1
			document.getElementById("inputApellido2").value ,	//2		Apellido2
			document.getElementById("inputCategoria").value ,	//3		Categoria
			document.getElementById("inputMail").value ,		//4		Mail
			document.getElementById("inputFechaAlta").value ,	//5		Fecha Alta
			document.getElementById("inputEmpresa").value ,	  	//6		Empresa
			document.getElementById("inputCif").value ,	  	  	//7		CIF
			document.getElementById("inputCCC").value ,	  		//8		CCC
			document.getElementById("inputIBAN").value ,		//9		IBAN
			document.getElementById("inputDni").value ,			//10	Dni
			document.getElementById("inputPass").value ,		//11	Password
			document.getElementById("id").value];				//12	ID
			
			$.ajax({
			// aqui va la ubicación de la página PHP
		  url: '../php/search2.php',
		  type: 'post',
		  data: {'array':array},
		  success:function(resultado){
			// imprime "resultado Funcion"
			//alert(resultado);
			var r = resultado;
			alert(r);
			window.location("paginaAdministrador.php") ; 
		  }
		})
	}
	</script>
	
	<script>
		function add()
		{
			var arrayAdd = [
			document.getElementById("inputNombre").value ,		//0		Nombre
			document.getElementById("inputApellido1").value ,	//1		Apellido1
			document.getElementById("inputApellido2").value ,	//2		Apellido2
			document.getElementById("inputCategoria").value ,	//3		Categoria
			document.getElementById("inputMail").value ,		//4		Mail
			document.getElementById("inputFechaAlta").value ,	//5		Fecha Alta
			document.getElementById("inputEmpresa").value ,	  	//6		Empresa
			document.getElementById("inputCif").value ,	  	  	//7		CIF
			document.getElementById("inputCCC").value ,	  		//8		CCC
			document.getElementById("inputIBAN").value ,		//9		IBAN
			document.getElementById("inputDni").value ,			//10	Dni
			document.getElementById("inputPass").value] ;		//11	Password
			
			$.ajax({
			// aqui va la ubicación de la página PHP
		  url: '../php/search2.php',
		  type: 'post',
		  data: {'arrayAdd':arrayAdd},
		  success:function(resultado){
			// imprime "resultado Funcion"
			//alert(resultado);
			var r = resultado;
			alert(r);
			window.location("paginaAdministrador.php") ; 
		  }
		})
	}
	</script>
	
	<script>
		function eliminar()
		{
			var d = "<?php echo $_POST['var1']?>";
			$.ajax({
			// aqui va la ubicación de la página PHP
		  url: '../php/search2.php',
		  type: 'post',
		  data: {'d':d},
		  success:function(resultado){
			// imprime "resultado Funcion"
			//alert(resultado);
			var r = resultado;
			alert(r);
			window.location="paginaAdministrador.php";  
		  }
		})
		}
	</script>

	<script>
		$('#jsi-nav').sidebar({
			trigger: '.jsc-sidebar-trigger',
			pullCb: function () { console.log('pull'); },
			pushCb: function () { console.log('push'); }
		});
	</script>
	</body>
</html>
