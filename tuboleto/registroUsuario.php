<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Crear cuenta</title>
</head>

<script type="text/javascript" src="js/file.js"></script>

<body>

	<h1>Nuevo usuario</h1>
	<form action ="controlador.php" method="post">
	<div id ="form-registro">
		
		<!-- una fila por cada campo -->
		<div class="fila">
			<span>Nombre</span>
			<input type="text" name="nombre"/>
		</div>

		<div class="fila">
			<span>Apellido</span>
			<input type="text" name="apellido"/>
		</div>

		<div class="fila">
			<span>Cedula</span>
			<input type="text" name="cedula"/>
		</div>

		<div class="fila">
			<span>Sexo</span>
			<select>
				<option value="f">F</option>
				<option value="m">M</option>
			</select>
		</div>

		<div class="fila">
			<span>Telefono</span>
			<input type="text" name="telefono"/>
		</div>

		<div class="fila">
			<span>Correo</span>
			<input type="text" name="correo"/>
		</div>

		<div class="fila">
			<span>Dirección</span>
			<input type="text" name="direccion"/>
		</div>

		<div class="fila">
			<span>Nombre de Usuario</span>
			<input type="text" name="usuario"/>
		</div>

		<div class="fila">
			<span>Contraseña</span>
			<input type="text" name="contrasenya"/>
		</div>

		<!-- una fila extra para los botones -->
		<div class="fila">
			<input type="submit" name="enviar" value="Enviar"/>
			<button type="submit" formaction="index.php">Cancelar</button>


			<input type="hidden" name="operacion" value="">	
		</div>

	</div>
	</form>

</body>
</html>