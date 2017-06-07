<!DOCTYPE html>
<html><head>

  	<meta charset="utf-8">
    <title>Pagina inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="css/index.css" />
    <!-- endbuild -->

</head>


<body ng-app="holaApp">

<?php

    session_start();//reanudamos sesion para recuperar lo que se almaceno durante sesion en la otra pagina

    if (!isset($_SESSION["usuario"])) { //si nadi inicio sesion 
    	
    	header("location:../fullscreen-login/i.php");   //regresamos a pagina de login

    } 

    ?>
<?php
	
	echo "<h2> Pagina Administradores</h2>";

    echo "Bienvenido: " .$_SESSION["usuario"]."<br><br>";

    ?>

<div  class="linea1">

  <div  class="logo">

  </div>  

</div> 




<div id="header" class="header">   <!--cabecera-->
      


      <!--MENUI DESPLEGABLE-->



      <ul   class="nav">
        <li><a  ng-href="" >Home</a>
          
        </li>

        <li class="login"><a  href="../fullscreen-login/index.php" >Login</a>
        
        </li>

        <li><a  ng-href="" >Acerca de</a>
          
        </li>

        <li><a  ng-href="" >Contact</a>
          
        </li>

        

      </ul>

</div>   <!--acaba cabecera-->

<div class="parallax"></div>           <!-- donde haya esto se añade un paralax -->
<div class ="administrativos"></div>
	
<div class="tablero" ng-controller="cntrl" style="background-image: url(../imagenes/EmployeeBack1.jpeg)">
	<h1 align="center">Administrativos</h1>
	<div class="row">
	  <div class="column" ng-repeat="usuario in names | orderBy : 'Nombre' | filter : 'Administrativo'">
		<div class="card" style="background-color:rgba(255,255,255,0.78);color:#4E4E4E;text-align: center">
		  <img src="../imagenes/img_avatar2.png" alt="{{usuario.Nombre}}" style="width:100%">
		  <div class="container">
			<h3>{{usuario.Nombre}} {{usuario.Apellido1}} {{usuario.Apellido2}}</h3>
			<br>
			<p class="title">{{usuario.Categoria}}</p>
			<br>
			<div style="margin: 15px 0;">
				<a class="{{usuario.id}}" href="" onClick="SnackbarInfo();email(this.className);copiarAlPortapapeles('snackbar')" style="text-decoration: none;font-size: 22px; color: black;">
					<i class="fa fa-envelope"></i>
				</a>
				<div id="snackbar"></div>
			</div>
			<br>
			<p><button class="button">Contact</button></p>
		  </div>
		</div>
	  </div>
	</div> 
</div>


<div class="empleados"></div>

<script src="js/angular.min.js"></script>
<div class="tablero" ng-controller="cntrl" style="background-image: url(../imagenes/EmployeeBack2.jpg)">
	<h1 align="center">Empleados</h1>
	<div class="row">
	  <div class="column" ng-repeat="usuario in names | orderBy : 'Nombre' | filter : {Categoria:'!Administrativo'}">
		<div class="card" style="background-color:rgba(255,255,255,0.78);color:#4E4E4E ;text-align: center">
		  <img src="../imagenes/img_avatar2.png" alt="{{usuario.Nombre}}" style="width:100%">
		  <div class="container">
			<h3>{{usuario.Nombre}} {{usuario.Apellido1}} {{usuario.Apellido2}}</h3>
			<br>
			<p class="title">{{usuario.Categoria}}</p>
			<br>
			<div style="margin: 15px 0;">
				<a class="{{usuario.id}}" href="" onClick="SnackbarInfo();email(this.className);copiarAlPortapapeles('snackbar')" style="text-decoration: none;font-size: 22px; color: black;">
				<i class="fa fa-envelope"></i></a>
				
			</div>
			<br>
			<p><button class="button">Contact</button></p>
		  </div>
		</div>
	  </div>
	</div> 
</div>
<script>
var app=angular.module('holaApp',[]);
app.controller('cntrl', function($scope,$http){

	$http.get("../php/customers_mysql.php").then(function (response) 
	{
		$scope.names = response.data.records;
	})

});

function SnackbarInfo() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}

	function email (a){
		var x = "Se ha copiado al portapapeles: ";
		var q = a;
		
		$.ajax({
    		// aqui va la ubicación de la página PHP
		  url: '../php/search.php',
		  type: 'post',
		  /*dataType: 'html',*/
		  data: {'q':q},
		  success:function(resultado){
		   // imprime "resultado Funcion"
		   //alert(resultado);
			var b = resultado;
			x = x+b;
    		document.getElementById("snackbar").innerHTML = x;
		  }})
	}
	</script>
	<script>	
	 //Inicio del boton de copia
        var playButton = $('#snackbar');  // Se obtiene el id del boton clicable
    playButton.click(function(){    // Aqui se pone a escucha el evento click para el boton antes definido
            copyToClipboard();          // Esto llama a la funcion copyToClipboard() (Está mas abajo)
    });
        //fin del boton de copia
        //Funcion copytoClipboard
    function copyToClipboard() {
        $("body").append("<input type='text' id='temp'>"); // Acá se crea un input dinamicamente con un id para luego asignarle un valor sombreado
        $("#temp").val("EDITAESTO creado por GAMMAFP").select(); // Acá se obtiene el id del boton que hemos creado antes y se le agrega un valor y luego se le sombrea con select(). Para agregar lo que se quiere copiar editas val("EDITAESTOAQUÍ")
        document.execCommand("copy"); // document.execCommand("copy") manda a copiar el texto seleccionado en el documento
        $("#temp").remove();

    }
}
	
</script>

<div class="parallax"></div>


  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
       (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
       r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
       }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="js/jquery.js"></script>
    <script src="js/angular.js"></script>


</body>
</html>
