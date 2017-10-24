<?php

function Conectarse ()
{
	if (!($enlace=mysql_connect("localhost", "root", "")))
	{
		echo '<script>alert("Error conectando a la base de datos.")</script>';
		exit();
	}
	if (!mysql_select_db("tuboloeto", $enlace))
	{
		echo '<script>alert("Error seleccionando la base de datos")</script>';
	}
	return $enlace;
}

?>