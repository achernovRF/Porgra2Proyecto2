<?php
 class boletos
{
	public $serial;
	public $id_usuario;
	public $id_evento;
	public $ubicacion;

	public function construct_boletos($serial,$id_usuario,$id_evento,$ubicacion)
	{
		$this->serial=$serial;
		$this->id_usuario=$id_usuario;
		$this->id_evento=$id_evento;
		$this->ubicacion=$ubicacion;
	}

	public function getSerial()
	{
		return $this->serial;
	}
	public function setSerial($serial)
	{
		$this->serial=$serial;
	}
	public function getId_usuario()
	{
		return $this->id_usuario;
	}
	public function setId_usuario($id_usuario)
	{
		$this->id_usuario=$id_usuario;
	}
	public function getId_evento()
	{
		return $this->id_evento;
	}
	public function setId_evento($id_evento)
	{
		$this->id_evento=$id_evento;
	}
	public function getUbicacion()
	{
		return $this->ubicacion;
	}
	public function setUbicacion($ubicacion)
	{
		$this->ubicacion=$ubicacion;
	}

}
?>