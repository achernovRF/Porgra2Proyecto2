<!DOCTYPE html>
<html>
<head>
	<title>Tu boleto</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
</head>

<script type="text/javascript" src="js/file.js"></script>

<?php

include "controlador.php";

	if(isset($_SESSION))
	{
		session_destroy();
	}

	if(isset($_POST["login"]))
	{
		$usuario = trim($_POST["usuario"]);
		$clave = trim($_POST["contrasenya"]);

		if($usuario!="" && $clave!="")
		{
			$cod = controlador::login($usuario,$clave);
			if($cod>=0)
			{
				session_start();

				$_SESSION["us"] = controlador::get_usuario($usuario,$clave);

				if($cod==0)
				{
					header("location:menu1.php");	
				}
				else
				{
					header("location:menu2.php");	
				}
			}
			else
			{
				echo '<script>alert("Usuario o contraseña incorrecta.")</script>';
			}

		}
		else
		{
			echo '<script>alert("Los datos no pueden ser vacios.")</script>';	
		}	
	}

	if(isset($_GET["registro"]))
	{
		$registro = $_GET["registro"];
		if($registro)
		{
			echo '<script>alert("Usuario registrado.")</script>';
		}
		else
		{
			echo '<script>alert("Error al registrar usuario.")</script>';
		}
	}

?>


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
			<a class="button" href="javascript:registrar()">Registrarse</a>
		</div>

	</div>
	</form>

</body>
</html>