<?php
 class eventos
{
	public $nombre;
	public $medios;
	public $altos;
	public $vip;
	public $platino;
	public $fecha;

	public function construct_eventos($nombre,$medios,$altos,$vip,$platino,$fecha)
	{
		$this->nombre=$nombre;
		$this->medios=$medios;
		$this->altos=$altos;
		$this->vip=$vip;
		$this->platino=$platino;
		$this->fecha=$fecha;

	}

	public function getNombre()
	{
		return $this->nombre;
	}
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	public function getMedios()
	{
		return $this->medios;
	}
	public function setMedios($medios)
	{
		$this->medios=$medios;
	}
	public function getAltos()
	{
		return $this->altos;
	}
	public function setAltos($altos)
	{
		$this->altos=$altos;
	}
	public function getVip()
	{
		return $this->vip;
	}
	public function setVip($vip)
	{
		$this->vip=$vip;
	}
	public function getPlatino()
	{
		return $this->platino;
	}
	public function setPlatino($platino)
	{
		$this->platino=$platino;
	}
	public function getFecha()
	{
		return $this->fecha;
	}
	public function setFecha($fecha)
	{
		$this->fecha=$fecha;
	}
}

?>