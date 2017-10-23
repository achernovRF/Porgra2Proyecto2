<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css\estilo.css">
	<title>Crear cuenta</title>
</head>

<script type="text/javascript" src="js\file.js"></script>

<?php 
	if(isset($_POST['operacion']))
	{
		$error=array();
		if(empty($_POST['nombre']))
		{
			$error[]= 'Escribe tu Nombre';
		}
		else{
			$campo1 = $_POST['nombre'];
		}

		if(empty($_POST['apellido']))
		{
			$error[]= 'Escribe tu Apellido';
		}
		else{
			$campo2 = $_POST['apellido'];
		}

		if(empty($_POST['cedula']))
		{
			$error[]= 'Escribe tu Cedula';
		}
		else{
			$campo3 = $_POST['cedula'];
		}

		if(empty($_POST['sexo']))
		{
			$error[]= 'Selecciona tu sexo';
		}
		else{
			$campo4 = $_POST['sexo'];
		}

		if(empty($_POST['telefono']))
		{
			$error[]= 'Escribe tu Telefono';
		}
		else{
			$campo5 = $_POST['telefono'];
		}

		if(empty($_POST['correo']))
		{
			$error[]= 'Escribe tu Correo';
		}
		else{
			$campo6 = $_POST['correo'];
		}

		if(empty($_POST['direccion']))
		{
			$error[]= 'Escribe tu Dirección';
		}
		else{
			$campo7 = $_POST['direccion'];
		}

		if(empty($_POST['usuario']))
		{
			$error[]= 'Escribe tu Usuario';
		}
		else{
			$campo8 = $_POST['usuario'];
		}

		if(empty($_POST['contrasenya']))
		{
			$error[]= 'Escribe tu Contraseña';
		}
		else{
			$campo9 = $_POST['contrasenya'];
		}

		if (empty($error)) {
			$conexion= mysql_connect("localhost", "root", "") or die("No te puedes conectar al host");

			mysql_select_db("tuboloeto", $conexion) or die("No se puede acceder a la base de datos");

			$consultando_query="SELECT * FROM usuario WHERE ";
	}	
?>

<body>

	<h1>Nuevo usuario</h1>
	<form action ="registroUsuario.php" method="post" >
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
			<select name="sexo">
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
			<input type="hidden" name="operacion" value="TRUE">

			<input type="submit" name="enviar" value="Enviar"/>
			<button type="submit" formaction="index.php">Cancelar</button>
		</div>

	</div>
	</form>

</body>
</html>