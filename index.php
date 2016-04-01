<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sala De Juegos</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/animacion.css">
		<!--final de Estilos-->

	</head>
	<body>
		<div class="CajaInicio animated bounceInRight">
			<h3>Ingreso a la sala</h3>
			
		<form action="destino.php" method="post">

					<input type="text"  name="usuario" value="<?php
					if(isset($_COOKIE['ultimoUsuario']))
					{
							 echo $_COOKIE['ultimoUsuario']; 
					}

					 ?> "    >

					<input type="submit"  class="MiBotonUTNMenuInicio" value= "ingresar" > 
					<input type="button" class="MiBotonUTNMenuInicio" value= "eliminar" >

		</form>

		</div>

		<center>

		</center>

	</body>
</html>
