<!DOCTYPE html>
<html>
<head>
	<title>Listado</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<script type="text/javascript" src="js/file.js"></script>

<?php

	include "controlador.php";

	$bts = controlador::get_boletos();
	$ids = controlador::get_ids_boletos();
	

	if(isset($_GET["boleto"]))
	{
		$registro = $_GET["boleto"];
		if($registro)
		{
			echo '<script>alert("Registro actualizado.")</script>';
		}
		else
		{
			echo '<script>alert("Error al actualizar registro.")</script>';
		}
	}

	if(isset($_GET["del"]))
	{
		$registro = $_GET["del"];
		if($registro)
		{
			echo '<script>alert("Registro eliminado.")</script>';
		}
		else
		{
			echo '<script>alert("Error al eliminar registro.")</script>';
		}
	}

	if(isset($_GET["eliminar"]))
	{
		$id = $_GET["eliminar"];
		$result = controlador::eliminar_boleto($id);
		header("location:listado.php?del=".$result);
	}


?>

<body>

	<a class="button" href="javascript:regresar2()" style="float: left;">Ir al Menu</a>

	<h1>Listado</h1>


	<?php

	for($i=0;$i<count($bts);$i++)
	{
		echo '<div class="vista" id="vista'.$i.'">';

		echo '<div><span>Nombre: '.controlador::get_usuario_by_id($bts[$i]->getId_usuario())->getNombres().'</span></div>';
		echo '<div><span>Apellido: '.controlador::get_usuario_by_id($bts[$i]->getId_usuario())->getApellidos().'</span></div>';
		echo '<div><span>Cedula: '.controlador::get_usuario_by_id($bts[$i]->getId_usuario())->getCedula().'</span></div>';
		echo '<div><span>Evento: '.controlador::get_evento($bts[$i]->getId_evento())->getNombre().'</span></div>';
		echo '<div><span>Fecha: '.controlador::get_evento($bts[$i]->getId_evento())->getFecha().'</span></div>';
		echo '<div><span>Ubicación: '.$bts[$i]->getUbicacion().'</span></div>';
		echo '<div><span>Serial: '.$bts[$i]->getSerial().'</span></div>';	

		echo '</div>';	
	}

	?>


	<table cellspacing="1">

		<thead>
			
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Cedula</td>
			<td>Evento</td>
			<td>Ubicacion</td>
			<td></td>
			<td></td>
			<td></td>

		</thead>

		<?php

			for($i=0;$i<count($bts);$i++)
			{
				echo '<tr>';

				echo '<td>'.controlador::get_usuario_by_id($bts[$i]->getId_usuario())->getNombres().'</td>';
				echo '<td>'.controlador::get_usuario_by_id($bts[$i]->getId_usuario())->getApellidos().'</td>';
				echo '<td>'.controlador::get_usuario_by_id($bts[$i]->getId_usuario())->getCedula().'</td>';
				echo '<td>'.controlador::get_evento($bts[$i]->getId_evento())->getNombre().'</td>';
				echo '<td>'.$bts[$i]->getUbicacion().'</td>';
				echo '<td><a href="javascript:ver_registro('.$i.','.count($bts).')"><img src="img/view.jpg"></a></td>';
				echo '<td><a href="editarRegistro.php?id='.$ids[$i].'"><img src="img/edit.jpg"></a></td>';
				echo '<td><a href="javascript:eliminar_registro('.$ids[$i].')"><img src="img/delete.jpg"></a></td>';

				echo '</tr>';
			}

		?>

	</table>	

</body>
</html>