
<?php
session_start();
if(isset($_SESSION['usuarioActual']))
{
echo  $_SESSION['usuarioActual'];
}
else
{
	header("location:../index.php");
}

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sala de Juegos</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="../CSS/animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<!--<script type="text/javascript" src="../JS/jsPiedarPapelTijera2.js"></script>-->
        <!--Final de Lógica-Programación -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		
		<script type="text/javascript" src="../JS/app.js"></script>

		</head>
	<body ng-app="MiApp" ng-init="ganadas='Ganó' ; perdidas=0 " ng-controller="contppt2">
		<div class="CajaUno animated bounceInDown">
			

			<input type="text" readonly ng-model="ganadas">
			<input type="text" readonly ng-model="perdidas">
			<input type="text" readonly ng-model="empatadas">
			<input type="text" ng-model="MiTest">
			<p ng-bind="MiTest"></p>
			{{Papel}}
			{{(Papel)}}

			<form id="FormIngreso">
				<center>
					<img src="../imagenes/interrogacion.jpg" >
				</center>
				
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft">
			

			
			
			<img class="PiedraPapelTijera animated zoomInRight " src="../imagenes/piedra.jpg" ng-click="piedra()">
			<img class="PiedraPapelTijera animated zoomInUp" src="../imagenes/papel.jpg" ng-click="papel()">
			<img class="PiedraPapelTijera animated zoomInLeft"  src="../imagenes/tijera.jpg" ng-click="perdidas=perdidas + 1">
			

			


		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
				<h3>
						3.	Piedra, Papel o Tijera (v 2.0):
						</br>	Ahora debemos informar cuantas veces se ganó, perdió o empató desde la última recarga de página

				</h3>
			
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a style=" margin-top: -10%;" class="MiBotonUTNLinea" onclick="location.href='../logout.php'" >Cerrar sesión</a>	

			<a style=" margin-top: -20%;" class="MiBotonUTNLinea" onclick="location.href='../menu.php'" >Men&uacute; de juegos</a>	
			
		</div>
	</body>
</html>