<?php
	include "clases/usuarios.php";
	include "clases/eventos.php";
	include "clases/boletos.php";

	class controlador
	{

		static function get_result($query)
		{
			$conn = new mysqli("localhost","root","","basedatos");
			$result = $conn->query($query);
			return $result;
		}

		static function login($usuario,$clave)
		{
			$query = "select count(*) cant from usuario u where u.usuario='".$usuario."' and u.contrasenya='".($clave)."'";
			$result = controlador::get_result($query);
			$row = $result->fetch_assoc();
			
			if($row['cant']>0)
			{
				$query = "select admin from usuario u where u.usuario='".$usuario."' and u.contrasenya='".($clave)."'";
				$result = controlador::get_result($query);
				$row2 = $result->fetch_assoc();
				return $row2['admin']+0;
			}
			else
			{
				return -1;
			}
		}

		static function get_usuario($usuario,$clave)
		{
			$query = "select nombres, apellidos, cedula, sexo, correo, telefono, direccion from usuario u where u.usuario='".$usuario."' and u.contrasenya='".($clave)."'";

			$result = controlador::get_result($query);
			$row = $result->fetch_assoc();

			$us = new usuarios();

			$us->setNombres($row['nombres']);
 			$us->setApellidos($row['apellidos']);
			$us->setCedula($row['cedula']);
 			$us->setDireccion($row['direccion']);
 			$us->setSexo($row['sexo']);
			$us->setTelefono($row['telefono']);
 			$us->setCorreo($row['correo']);
 			$us->setUsuario($usuario);
 			$us->setContrasenya($clave);
 			$us->setAdmin('0');

 			return $us;
		}

		static function get_usuario_by_id($id_usuario)
		{
			$query = "select nombres, apellidos, cedula, sexo, correo, telefono, direccion, usuario from usuario u where u.id_usuario='".$id_usuario."'";

			$result = controlador::get_result($query);
			$row = $result->fetch_assoc();

			$us = new usuarios();

			$us->setNombres($row['nombres']);
 			$us->setApellidos($row['apellidos']);
			$us->setCedula($row['cedula']);
 			$us->setDireccion($row['direccion']);
 			$us->setSexo($row['sexo']);
			$us->setTelefono($row['telefono']);
 			$us->setCorreo($row['correo']);
 			$us->setUsuario($row["usuario"]);
 			$us->setContrasenya("");
 			$us->setAdmin('0');

 			return $us;
		}


		static function get_id_usuario($usuario,$clave)
		{
			$query = "select id_usuario from usuario u where u.usuario='".$usuario."' and u.contrasenya='".($clave)."'";

			$result = controlador::get_result($query);
			$row = $result->fetch_assoc();

			return $row['id_usuario'];
		}

		static function insertar_usuario($us)
		{
			$query = "insert into usuario(nombres,apellidos,cedula,sexo,telefono,correo,direccion,usuario,contrasenya,admin)
			values('".$us->getNombres()."','".$us->getApellidos()."','".$us->getCedula()."','".$us->getSexo()."','".$us->getTelefono()."','".$us->getCorreo()."','".$us->getDireccion()."','".$us->getUsuario()."','".($us->getContrasenya())."','".$us->getAdmin()."')";

			$result = controlador::get_result($query);	

			return $result;
		}

		static function get_usuarios()
		{
			$query = "select id_usuario, nombres, apellidos, cedula, sexo, correo, telefono, direccion, usuario from usuario where admin='0' order by id_usuario";

			$result = controlador::get_result($query);

			$uss = new ArrayObject();

			while($row = $result->fetch_assoc())
			{
				$us = new usuarios();

				$us->setNombres($row['nombres']);
				$us->setApellidos($row['apellidos']);
				$us->setCedula($row['cedula']);
 				$us->setDireccion($row['direccion']);
 				$us->setSexo($row['sexo']);
				$us->setTelefono($row['telefono']);
 				$us->setCorreo($row['correo']);
 				$us->setUsuario($row["usuario"]);
 				$us->setContrasenya("");
 				$us->setAdmin('0');

				$uss->append($us);
			}

			return $uss;
		}


		static function get_ids_usuarios()
		{
			$query = "select id_usuario from usuario where admin='0' order by id_usuario";

			$result = controlador::get_result($query);

			$ids = new ArrayObject();

			while($row = $result->fetch_assoc())
			{
				$ids->append($row['id_usuario']);
			}

			return $ids;
		}

		static function insertar_evento($ev)
		{
			$query = "insert into evento(nombre,medios,altos,vip,platino,fecha) values('".$ev->getNombre()."','".$ev->getMedios()."','".$ev->getAltos()."','".$ev->getVip()."','".$ev->getPlatino()."','".$ev->getFecha()."')";

			$result = controlador::get_result($query);	

			return $result;
		}

		static function get_evento($id_evento)
		{
			$query = "select nombre, medios, altos, vip, platino, fecha from evento e where e.id_evento='".$id_evento."'";
			$result = controlador::get_result($query);

			$row = $result->fetch_assoc();
			
			$ev = new eventos();

			$ev->setNombre($row['nombre']);
			$ev->setMedios($row['medios']);
			$ev->setAltos($row['altos']);
			$ev->setVip($row['vip']);
			$ev->setPlatino($row['platino']);
			$ev->setFecha($row['fecha']);

			return $ev;
		}	

		static function get_eventos()
		{
			$query = "select id_evento, nombre, medios, altos, vip, platino, fecha from evento order by id_evento";
			$result = controlador::get_result($query);

			$evs = new ArrayObject();

			while($row = $result->fetch_assoc())
			{
				$ev = new eventos();

				$ev->setNombre($row['nombre']);
				$ev->setMedios($row['medios']);
				$ev->setAltos($row['altos']);
				$ev->setVip($row['vip']);
				$ev->setPlatino($row['platino']);
				$ev->setFecha($row['fecha']);

				$evs->append($ev);
			}

			return $evs;
		}

		static function get_ids_eventos()
		{
			$query = "select id_evento from evento order by id_evento";
			$result = controlador::get_result($query);

			$ids = new ArrayObject();

			while($row = $result->fetch_assoc())
			{
				$ids->append($row['id_evento']);
			}

			return $ids;
		}

		static function insertar_boleto($bt)
		{
			$query = "insert into boleto(id_usuario,id_evento,serial,ubicacion) values('".$bt->getId_usuario()."','".$bt->getId_evento()."','".$bt->getSerial()."','".$bt->getUbicacion()."')";

			$result = controlador::get_result($query);	

			return $result;
		}

		static function get_boletos()
		{
			$query = "select id_boleto, id_usuario, id_evento, ubicacion, serial from boleto order by id_boleto";
			$result = controlador::get_result($query);

			$bts = new ArrayObject();

			while($row = $result->fetch_assoc())
			{
				$bt = new boletos();

				$bt->setId_usuario($row['id_usuario']);
				$bt->setId_evento($row['id_evento']);
				$bt->setUbicacion($row['ubicacion']);
				$bt->setSerial($row['serial']);

				$bts->append($bt);
			}

			return $bts;
		}	

		static function get_ids_boletos()
		{
			$query = "select id_boleto from boleto order by id_boleto";

			$result = controlador::get_result($query);

			$ids = new ArrayObject();

			while($row = $result->fetch_assoc())
			{
				$ids->append($row['id_boleto']);
			}
			return $ids;
		}

		static function get_boleto($id_boleto)
		{
			$query = "select id_usuario, id_evento, serial, ubicacion from boleto where id_boleto='".$id_boleto."'";

			$result = controlador::get_result($query);
			$row = $result->fetch_assoc();

			$bt = new boletos();

			$bt->setId_usuario($row['id_usuario']);
			$bt->setId_evento($row['id_evento']);
			$bt->setUbicacion($row['ubicacion']);
			$bt->setSerial($row['serial']);

			return $bt;
		}

		static function editar_boleto($bt,$id)
		{
			$query = "update boleto set id_usuario='".$bt->getId_usuario()."', id_evento='".$bt->getId_evento()."', ubicacion='".$bt->getUbicacion()."' where id_boleto='".$id."'";

			$result = controlador::get_result($query);	

			return $result;
		}

		static function eliminar_boleto($id)
		{
			$query = "delete from boleto where id_boleto = '".$id."'";

			$result = controlador::get_result($query);	

			return $result;
		}
	}		

?>