<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<?php

include "controlador.php";

	if(isset($_POST["login"]))
	{
		$usuario = trim($_POST["usuario"]);
		$clave = trim($_POST["contrasenya"]);

		if($usuario!="" && $clave!="")
		{
			if(controlador::login($usuario,$clave))
			{
				echo '<script>alert("Conecto!!!")</script>';
				header("Location: boleto.php ");
			}
			else
			{
				echo '<script>alert("Error!!!")</script>';
			}

		}
		else
		{
			echo '<script>alert("Los datos no pueden ser vacios.")</script>';	
		}	
	}

?>

<script type="text/javascript" src="js/file.js"></script>

<body>

	<h1>Iniciar Sesión</h1>

	<form action="index.php" method="post">
	<div id="datos-login">
		
		<div class="fila">
			<span>Usuario: </span><input type="text" name="usuario" />
		</div>	
		<div class="fila">
			<span>Contraseña: </span><input type="password" name="contrasenya" />
		</div>

		<div class="fila">
			<input type="submit" name="login" value="Iniciar Sesión"/>
			<!-- <input type="button" value="Registrarse" formaction="/registroUsuario.php" /> -->
			<button type="submit" formaction="registroUsuario.php">Registrarse</button>
		</div>

	</div>
	</form>

</body>
</html>