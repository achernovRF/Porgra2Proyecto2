<?php

	class controlador
	{

		static function get_result($query)
		{
			$conn = new mysqli("localhost","root","","tuboloeto");
			$result = $conn->query($query);
			return $result;
		}

		static function login($usuario,$clave)
		{
			$query = "select count(*) cant from usuario u where u.usuario='".$usuario."' and u.contrasenya='".$clave."'";
			$result = controlador::get_result($query);
			
			$row = $result->fetch_assoc();
			
			if($row['cant']>0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}		

?>