<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Registrar Boleto</title>
</head>

<script type="text/javascript" src="js/file.js"></script>

<body>

	<h1>Registrar Boleto</h1>
	<form action ="controlador.php" method="post">
	<div id ="form-registro">
		
		<!-- una fila por cada campo -->
		<div class="fila">
			<span>Serial</span>
			<input type="text" name="serial"/>
		</div>


		<div class="fila">
			<span>Evento</span>
			<input type="text" name="evento"/>
		</div>

		<div class="fila">
			<span>Fecha</span>
			<input type="date" name="fecha"/>
		</div>

		<div class="fila">
			<span>Ubicación</span>
			<select>
				<option value="medios">Medios</option>
				<option value="altos">Altos</option>
				<option value="vip">VIP</option>
				<option value="platino">Platino</option>
			</select>
		</div>

		

		<!-- una fila extra para los botones -->
		<div class="fila">
			<input type="submit" name="enviar" value="Enviar"/>
			<input type="button" name="cancelar" value="Cancelar" />


			<input type="hidden" name="operacion" value="">	
		</div>

	</div>
	</form>

</body>
</html>