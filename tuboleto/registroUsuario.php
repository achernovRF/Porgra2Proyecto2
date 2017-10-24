<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Crear cuenta</title>
</head>

<script type="text/javascript" src="js/file.js"></script>

<?php

include "controlador.php";


	if(isset($_POST["enviar"]))
	{
		$nombre = trim($_POST["nombre"]);
		$apellido = trim($_POST["apellido"]);
		$cedula = trim($_POST["cedula"]);
		$correo = trim($_POST["correo"]);
		$sexo = trim($_POST["sexo"]);
		$telefono = trim($_POST["telefono"]);
		$direccion = trim($_POST["direccion"]);
		$usuario = trim($_POST["usuario"]);
		$clave = trim($_POST["contrasenya"]);
		$clave2 = trim($_POST["contrasenya2"]);

		if($nombre!="" && $apellido!="" && $correo!="" && $telefono!="" && $direccion!="" && $usuario!="" && $clave!="" && $clave2!="")
		{
			if($clave==$clave2)
			{
				$us = new usuarios();
				$us->setNombres($nombre);	
				$us->setApellidos($apellido);
				$us->setCedula($cedula);
 				$us->setDireccion($direccion);
 				$us->setSexo($sexo);
 				$us->setTelefono($telefono);
 				$us->setCorreo($correo);
 				$us->setUsuario($usuario);
 				$us->setContrasenya($clave);
 				$us->setAdmin(0);

 				$result=controlador::insertar_usuario($us);	

 				header("location:index.php?registro=".$result);
			}
			else
			{
				echo '<script>alert("Las contraseñas no coinciden.")</script>';
			}
		}
		else
		{
			echo '<script>alert("Los datos no pueden ser vacios.")</script>';	
		}	
	}

?>

<body>

	<a class="button" href="javascript:inicio()" style="float: left;">Ir a Inicio</a>

	<h1>Nuevo usuario</h1>
	<form action ="registroUsuario.php" method="post">
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
			<span>Cédula</span>
			<input type="text" name="cedula"/>
		</div>

		<div class="fila">
			<span>Sexo</span>
			<select name="sexo">
				<option value="F">F</option>
				<option value="M">M</option>
			</select>
		</div>

		<div class="fila">
			<span>Teléfono</span>
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
			<span>Usuario</span>
			<input type="text" name="usuario"/>
		</div>

		<div class="fila">
			<span>Contraseña</span>
			<input type="password" name="contrasenya"/>
		</div>

		<div class="fila">
			<span>Confirmar contraseña</span>
			<input type="password" name="contrasenya2"/>
		</div>

		<!-- una fila extra para los botones -->
		<div class="fila">
			<input type="submit" name="enviar" value="Enviar"/>
			<a class="button" href="javascript:cancelar_registro()">Cancelar</a> 	
		</div>

	</div>
	</form>

</body>
</html>