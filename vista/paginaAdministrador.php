<html><head>

  	<meta charset="utf-8">
    <title>Pagina inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place css in the directory -->
    
    <!-- bootstrap:css -->
    <!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.0/css/bootstrap-combined.min.css" rel="stylesheet">-->
    <!-- endbootstrap -->
    <!-- font-awesome:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endfont-awesome -->
    <!-- index:css-->
    <link rel="stylesheet" href="css/index.css" />
    <!-- endindex -->
</head>


<body ng-app="holaApp">

<?php

    session_start();//reanudamos sesion para recuperar lo que se almaceno durante sesion en la otra pagina

    if (!isset($_SESSION["usuario"])) { //si nadi inicio sesion 
    	
    	header("location:../fullscreen-login/index.php");   //regresamos a pagina de login

    } 
?>


<div  class="linea1">

  <div  class="logo">

  </div>  

</div> 


<div id="header" class="header">   <!--cabecera-->
      
      <!--MENUI DESPLEGABLE-->

      <ul   class="nav">
        <li><a  ng-href="../index.html">Home
         	<i class="fa fa-home" style="margin-left: 10px" aria-hidden="true"></i></a>
          
        </li>

        <li class="login"><a href="../fullscreen-login/index.php">Cerrar Sesion
        	<i class="fa fa-sign-in" style="margin-left: 10px" aria-hidden="true"></i></a>
        
        </li>

        <li><a  href="" onclick="document.getElementById('id01').style.display='block';bases();">Backup/Restore
         	<i class="fa fa-database" style="margin-left: 10px"aria-hidden="true"></i></a>
          
        </li>

        <li><a  href="" >Contact
         	<i class="fa fa-address-card-o" style="margin-left: 10px" aria-hidden="true"></i></a>
          
        </li>  



         <li><a  class="active" title="Mi Cuenta"><img class="avatarr" src="../imagenes/img_avatar2.png" alt="Avatar"><?php  echo " Bienvenido: ".$_SESSION["usuario"] ?></a>
          
        </li> 

      </ul>

</div>   <!--acaba cabecera-->

<!--Ventana emergente de Backup-->
	<div id="id01" class="modal" >
  
  <div class="modal-content animate" style="background-color: rgba(59,209,89,0.90);">
    <div class="imgcontainer"style="background-color: rgba(0,0,0,0.0);">
      <span onclick="document.getElementById('id01').style.display='none';borrar();" class="close" title="Close Modal">&times;</span>
      <img src="../imagenes/timeMachine.png" alt="Avatar" class="avatar">
    </div>

    <div class="contain" style="border: hidden">
      
      <select id="bbdd" style="width: auto;">
      </select>
    </div>

    <div class="contain" style="background-color:#f1f1f1;padding: 10 0">
      	<input class="button" id="backup" value="Backup" onClick="backup();" style="width: auto"/>
      	<input class="button" id="restore" value="Restaurar" onClick="resource();" style="width: auto"/>
    </div>
  </div>
</div>


<div class="parallax"></div>           <!-- donde haya esto se añade un paralax -->
<div class ="administrativos"></div>
	
<div class="tablero" ng-controller="cntrl" style="background-image: url(../imagenes/EmployeeBack1.jpeg)">
  
	<h1 align="right" style="padding-right: 2%">Administrativos
		<button class="button" ng-class="{'active': order=='Nombre'}" ng-click="setOrder('Nombre')" style="width: auto; margin-left: 28%;background-color: #3bd159;">
			<a href="" style="text-decoration: none; color: white;">Nombre
				<i class="fa fa-sort-alpha-asc" style="font-size: 22px" aria-hidden="true"></i>
			</a>
		</button>
		
		<button class="button" ng-class="{'active': order=='Apellido1'}" ng-click="setOrder('Apellido1')" style="width: auto; margin-left: 20px;background-color: #3bd159;">
			<a href="" style="text-decoration: none; color: white;">Apellido
				<i class="fa fa-sort-alpha-asc" style="font-size: 22px" aria-hidden="true"></i>
			</a></button>
			
	</h1>
        <input class ="completar" type="text" name="search" placeholder="Search.." ng-model="buscar1"> 
	<div class="row">
  	 <div class="column">
		<div class="card" style="background-color:rgba(205,255,149,0.64);color:#4E4E4E;text-align: center">
		  <img src="../imagenes/img_avatar2.png" alt="Add" style="width:100%">
		  <div class="container">
			<h3>Añadir nuevo trabajador</h3>
			<br>
			<p class="title"></p>
			<br>
			<br>
			<div style="margin: 15px 0;">
				<a  style="text-decoration: none;font-size: 22px; color: black;">
					<i class="fa fa-user-plus" aria-hidden="true"></i>
				</a>	
			</div>
			<br>
			<form name="form0" id="form0" method="post" action="paginaAdminEmpleados.php">
				<input type="hidden" name="var1" id="var1" value= -1 />
				<button type ="submit" class="button" name ="add" value="add">Añadir</button>
			</form>
		  </div>
		</div>
	  </div>
	 <div class="column" ng-repeat="usuario in names | orderBy : order | filter : {Categoria : 'Administrativo'} | filter : buscar1">
		<div class="card" style="background-color:rgba(255,255,255,0.64);color:#4E4E4E;text-align: center">
		  <img src="../imagenes/img_avatar2.png" alt="{{usuario.Nombre}}" style="width:100%">
		  <div class="container">
			<h3>{{usuario.Nombre}} {{usuario.Apellido1}} {{usuario.Apellido2}}</h3>
			<br>
			<p class="title">{{usuario.Categoria}}</p>
			<br>
			<div style="margin: 15px 0;">
				<a class="{{usuario.id}}" href="" onClick="SnackbarInfo();email(this.className);" style="text-decoration: none;font-size: 22px; color: black;">
					<i class="fa fa-envelope"></i>
				</a>
				<div id="snackbar"></div>
			</div>
			<br>
			<form name="form1" id="form1" method="post" action="paginaAdminEmpleados.php">
				
				<input type="hidden" name="var1" id="var1" value= {{usuario.id}} />
				<input type="hidden" name="va" id="va" value= "0" />
				
				<button type ="submit" class="button" name ="enviar" value="Enviar">Perfil</button>
				
			</form>
		  </div>
		</div>
	  </div>
	  </div>
	</div> 
</div>


<div class="empleados"></div>

<script src="js/angular.min.js"></script>

<div class="tablero" ng-controller="cntrl" style="background-image: url(../imagenes/EmployeeBack2.jpg)">
     
     <h1 align="right" style="padding-right: 2%">Empleados
    		<button class="button" ng-class="{'active': orderE=='Nombre'}" ng-click="setOrderE('Nombre')" style="width: auto; margin-left: 31%;background-color: #3bd159;">
			<a href="" style="text-decoration: none; color: white;">Nombre
				<i class="fa fa-sort-alpha-asc" style="font-size: 22px" aria-hidden="true"></i>
			</a>
		</button>
		
		<button class="button" ng-class="{'active': orderE=='Apellido1'}" ng-click="setOrderE('Apellido1')" style="width: auto; margin-left: 10px;background-color: #3bd159;">
			<a href="" style="text-decoration: none; color: white;">Apellido
				<i class="fa fa-sort-alpha-asc" style="font-size: 22px" aria-hidden="true"></i>
			</a></button>
	</h1>
        <input class ="completar" type="text" name="search1" placeholder="Search.." ng-model="buscar2">
	<div class="row">
	  <div class="column" ng-repeat="usuario in names | orderBy : orderE | filter : {Categoria : '!Administrativo'} | filter : buscar2">
		<div class="card" style="background-color:rgba(255,255,255,0.64);color:#4E4E4E ;text-align: center">
		  <img src="../imagenes/img_avatar2.png" alt="{{usuario.Nombre}}" style="width:100%">
		  <div class="container">
			<h3>{{usuario.Nombre}} {{usuario.Apellido1}} {{usuario.Apellido2}}</h3>
			<br>
			<p class="title">{{usuario.Categoria}}</p>
			<br>
			<div style="margin: 15px 0;">
				<a class="{{usuario.id}}" href="" onClick="SnackbarInfo();email(this.className);" style="text-decoration: none;font-size: 22px; color: black;">
				<i class="fa fa-envelope"></i></a>
				
			</div>
			<br>
			<form name="form2" id="form2" method="post" action="paginaAdminEmpleados.php">
				
				<input type="hidden" name="var1" value= {{usuario.id}} />
				<input type="hidden" name="update" value= 0 />
				<button type ="submit" class="button" name ="enviar" value="Enviar">Perfil</button>
				
			</form>
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
	
	$scope.setOrder = function (order) {
        $scope.order = order;
    };
	
	$scope.setOrderE = function (orderE) {
        $scope.orderE = orderE;
    };
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
			
			window.prompt("Copia al portapapeles su E-mail: Ctrl+C, Enter", b);  
			
		  }})
	}
	
	</script>

	<div class="parallax"></div>
   
    <script src="js/jquery.js"></script>
    <script src="js/angular.js"></script>
    <script src="js/angular.min.js"></script>
    
    <script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	function bases(){

		var bases = 1;
		$.ajax({
			// aqui va la ubicación de la página PHP
		  url: '../php/search2.php',
		  type: 'post',
		  /*dataType: 'html',*/
		  data: {'bases':bases},
		  success:function(resultado){
			// imprime "resultado Funcion"
			//alert(resultado);
			var b = resultado;
			var c = b.split(",");
			var select = document.getElementById('bbdd');  
			//alert(c[0]);
			var opt = document.createElement('option');
				opt.value = "-- Selecciona una BBDD --";
				opt.disabled=true;
				opt.innerHTML = "-- Selecciona una BBDD --";
				select.appendChild(opt);

			for (var i = 0; i<c.length; i++){
				var opt = document.createElement('option');
				opt.value = c[i];
				opt.innerHTML = c[i];
				select.appendChild(opt);
			}
		  }})
	}
	function borrar(){
		document.getElementById('bbdd').options.length = 0;
	}
		
	function backup(){
		var bases=document.getElementById("bbdd").value;
		$.ajax({
			// aqui va la ubicación de la página PHP
		  url: '../php/db_backup2.php',
		  success:function(resultado){
                        var re = resultado;
                        alert(re);
		  }})
			
	}
	
	function restaurar(){
		
	}
	</script>  


</body>
</html>