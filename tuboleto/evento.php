<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\estilo.css">
	<title>Registrar Evento</title>
</head>

<script type="text/javascript" src="js\file.js"></script>

<body>

	<h1>Registrar Evento</h1>
	<form action ="controlador.php" method="post">
	<div id ="form-registro">
		
		<!-- una fila por cada campo -->
		<div class="fila">
			<span>Nombre</span>
			<input type="text" name="nombreEvento"/>
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
			<span>Fila</span>
			<input type="number" name="platino"/>
		</div>

		<div class="fila">
			<span>Ubicación</span>
			<input type="number" name="vip"/>
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