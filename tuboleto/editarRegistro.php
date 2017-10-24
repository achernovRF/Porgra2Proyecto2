<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<script type="text/javascript" src="js/file.js"></script>

<?php

	include "controlador.php";

	$uss = controlador::get_usuarios();
	$ids_us = controlador::get_ids_usuarios();
	$evs = controlador::get_eventos();
	$ids_ev = controlador::get_ids_eventos();

	$id = $_GET["id"];

	$bt = controlador::get_boleto($id);

	if(isset($_POST['enviar']))
	{
		$id_usuario = trim($_POST['id_usuario']);
		$id_evento = trim($_POST['id_evento']);
		$ubicacion = trim($_POST['ubicacion']);
		
		if($id_usuario!="" && $id_evento!="")
		{
			$bt = new boletos();

			$bt->setId_usuario($id_usuario);
			$bt->setId_evento($id_evento);
			$bt->setUbicacion($ubicacion);
			$bt->setId_usuario($id_usuario);

			$result = controlador::editar_boleto($bt,$id);

			header("location:listado.php?boleto=".$result);
		}
		else
		{
			echo '<script>alert("Los datos no pueden ser vacios.")</script>';	
		}
}
	
?>	

</body>

	<h1>Editar Registro</h1>
	<form action ="editarRegistro.php?id=<?php echo $id; ?>" method="post">
	<div id ="form-registro">
		
		<!-- una fila por cada campo -->
		<div class="fila">
			<span>Usuario</span>
			<select name="id_usuario" id="id_usuario" onchange="cambiar_cedula(this)">
				<option value=""></option>
				<?php

					for($i=0;$i<count($uss);$i++)
					{
						
						if($ids_us[$i]==$bt->getId_usuario())
						echo '<option value="'.$ids_us[$i].'" selected>'.$uss[$i]->getNombres().' '.$uss[$i]->getApellidos().'</option>';	
						else	
						echo '<option value="'.$ids_us[$i].'">'.$uss[$i]->getNombres().' '.$uss[$i]->getApellidos().'</option>';
					}

				?>
			</select>	
		</div>


		<div class="fila">
			<span>Cédula</span>
			<input type="text" readonly="readonly" id="cedula" disabled="disabled" value="<?php echo controlador::get_usuario_by_id($bt->getId_usuario())->getCedula(); ?>"/>
		</div>

		<div class="fila">
			<span>Evento</span>
			<select name="id_evento" id="id_evento">
				<option value=""></option>
				<?php

					for($i=0;$i<count($evs);$i++)
					{
						if($ids_ev[$i]==$bt->getId_evento())
						echo '<option value="'.$ids_ev[$i].'" selected>'.$evs[$i]->getNombre().'</option>';
						else
						echo '<option value="'.$ids_ev[$i].'">'.$evs[$i]->getNombre().'</option>';	
					}

				?>
			</select>	
		</div>

		<div class="fila">
			<span>Ubicación</span>
			<select name="ubicacion" id="ubicacion">
				<option value="medios" <?php if($bt->getUbicacion()=="medios") echo "selected"; ?> >Medios</option>
				<option value="altos" <?php if($bt->getUbicacion()=="altos") echo "selected"; ?>>Altos</option>
				<option value="vip" <?php if($bt->getUbicacion()=="vip") echo "selected"; ?>>VIP</option>
				<option value="platino" <?php if($bt->getUbicacion()=="platino") echo "selected"; ?>>Platino</option>
			</select>
		</div>
		

		<!-- una fila extra para los botones -->
		<div class="fila">
			<input type="submit" name="enviar" value="Editar"/>
			<a class="button" href="javascript:cancelar_edicion()" >Cancelar</a>

		</div>

		<input type="hidden" id="cedula0" value="" />
		<?php
			for($i=0;$i<count($uss);$i++)
			{
				echo '<input type="hidden" id="cedula'.($i+1).'" value="'.$uss[$i]->getCedula().'" />';
			}

		?>

	</div>
	</form>

</html>