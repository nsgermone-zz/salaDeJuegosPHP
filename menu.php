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

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sala De Juegos</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->

        <!--Final de Lógica-Programación -->


	</head>
	<body>
		<div class="CajaInicio animated bounceInRight">
			<h1>Menú de Juegos</h1>
			<form id="FormIngreso">

					<img src="imagenes/tps.png" style="width: 500px;float: right;">


				<a  class="MiBotonUTNMenuInicio" onclick="location.href='Juegos/AdivinaElNumero2.php'" >Adivina el número secreto</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='Juegos/PiedraPapelTijera2.php'" >Piedra, papel o tijera </a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='Juegos/ReflejosDaltonicos1.php'" >Reflejos daltonicos</a>
				


			</form>


		</div>

		<center>

		</center>

	</body>
</html>
