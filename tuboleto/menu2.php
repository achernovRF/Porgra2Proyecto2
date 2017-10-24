<?php 
include "clases/usuarios.php";
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<script type="text/javascript" src="js/file.js"></script>

<?php

	if(isset($_GET["evento"]))
	{
		$registro = $_GET["evento"];
		if($registro)
		{
			echo '<script>alert("Evento registrado.")</script>';
		}
		else
		{
			echo '<script>alert("Error al registrar evento.")</script>';
		}
	}

?>

<body>
	<h1>Bienvenido(a): <?php echo $_SESSION["us"]->getNombres().' '.$_SESSION["us"]->getApellidos() ?></h1>
	<div id="menu">
	<ul>
			
			<li><a href="registroEvento.php">Registar Evento</a><span></span></li>
			<li><a href="listado.php">Ver Listado</a><span></span></li>
			<li><a href="javascript:cerrar_session()">Cerrar Sesión</a><span></span></li>
		
	</ul>
	</div>	

</body>
</html>