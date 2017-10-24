<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Registrar Evento</title>
</head>

<script type="text/javascript" src="js/file.js"></script>

<?php

include "controlador.php";


	if(isset($_POST["enviar"]))
	{

		$nombre = trim($_POST['nombre']);
		$medios = trim($_POST['medios']);
		$altos = trim($_POST['altos']);
		$vip = trim($_POST['vip']);
		$platino = trim($_POST['platino']);
		$fecha = trim($_POST['fecha']);	


		if($nombre!="" && $medios!="" && $altos!="" && $vip!="" && $platino!="" && $fecha!="")
		{
			$ev = new eventos();

			$ev->setNombre($nombre);
			$ev->setMedios($medios);
			$ev->setAltos($altos);
			$ev->setVip($vip);
			$ev->setPlatino($platino);
			$ev->setFecha($fecha);

			$result = controlador::insertar_evento($ev);

			header("location:menu2.php?evento=".$result);

		}
		else
		{
			echo '<script>alert("Los datos no pueden ser vacios.")</script>';	
		}	
	}

?>

<body>

	<a class="button" href="javascript:regresar2()" style="float: left;">Ir al Menu</a>
	<h1>Registrar Evento</h1>
	<form action ="registroEvento.php" method="post">
	<div id ="form-registro">
		
		<!-- una fila por cada campo -->
		<div class="fila">
			<span>Nombre</span>
			<input type="text" name="nombre"/>
		</div>


		<div class="fila">
			<span>Medios</span>
			<input type="number" name="medios"/>
		</div>

		<div class="fila">
			<span>Altos</span>
			<input type="number" name="altos"/>
		</div>

		<div class="fila">
			<span>VIP</span>
			<input type="number" name="vip"/>
		</div>

		<div class="fila">
			<span>Platino</span>
			<input type="number" name="platino"/>
		</div>


		<div class="fila">
			<span>Fecha</span>
			<input type="date" name="fecha" placeholder="aaaa-mm-dd" />
		</div>
		

		<!-- una fila extra para los botones -->
		<div class="fila">
			<input type="submit" name="enviar" value="Enviar"/>
			<a class="button" href="javascript:cancelar2()" >Cancelar</a>

		</div>

	</div>
	</form>

</body>
</html>