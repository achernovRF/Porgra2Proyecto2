<?php
include "controlador.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Registrar Boleto</title>
</head>

<script type="text/javascript" src="js/file.js"></script>

<body>


<?php

$evs = controlador::get_eventos();
$ids = controlador::get_ids_eventos(); 

if(isset($_POST['enviar']))
{
	$serial = trim($_POST['serial']);
	$id_evento = trim($_POST['id_evento']);
	$ubicacion = trim($_POST['ubicacion']);
		
	if($serial!="" && $id_evento!="")
	{
		$bt = new boletos();

		$bt->setId_usuario(controlador::get_id_usuario($_SESSION['us']->getUsuario(),$_SESSION['us']->getContrasenya()));
		$bt->setId_evento($id_evento);
		$bt->setUbicacion($ubicacion);
		$bt->setSerial($serial);

		$result = controlador::insertar_boleto($bt);

		header("location:menu1.php?boleto=".$result);
	}
	else
	{
		echo '<script>alert("Los datos no pueden ser vacios.")</script>';	
	}
}

?>

	<a class="button" href="javascript:regresar1()" style="float: left;">Ir al Menu</a>
	<h1>Registrar Boleto</h1>
	<form action ="registroBoleto.php" method="post">
	<div id ="form-registro">
		
		<!-- una fila por cada campo -->
		<div class="fila">
			<span>Serial</span>
			<input type="number" name="serial"/>
		</div>


		<div class="fila">
			<span>Evento</span>
			<select name="id_evento" onchange="cambiar_fecha(this)">
				<option value=""></option>
				<?php

					for($i=0;$i<count($evs);$i++)
					{
						echo '<option value="'.$ids[$i].'">'.$evs[$i]->getNombre().'</option>';
					}

				?>
			</select>	
		</div>

		<div class="fila">
			<span>Fecha</span>
			<input type="date" name="fecha" id="fecha" readonly="readonly" disabled="disabled" />
		</div>

		<div class="fila">
			<span>Ubicación</span>
			<select name="ubicacion">
				<option value="medios">Medios</option>
				<option value="altos">Altos</option>
				<option value="vip">VIP</option>
				<option value="platino">Platino</option>
			</select>
		</div>

		

		<!-- una fila extra para los botones -->
		<div class="fila">
			<input type="submit" name="enviar" value="Enviar"/>
			<a class="button" href="javascript:cancelar1()">Cancelar</a>

		</div>


		<input type="hidden" id="fecha0" value="" />
		<?php
			for($i=0;$i<count($evs);$i++)
			{
				echo '<input type="hidden" id="fecha'.($i+1).'" value="'.$evs[$i]->getFecha().'" />';
			}

		?>

	</div>
	</form>

</body>
</html>