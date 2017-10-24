<?php 

class usuarios
{
 
 public $nombres;
 public $apellidos;
 public $cedula;
 public $direccion;
 public $sexo;
 public $telefono;
 public $correo;
 public $usuario;
 public $contrasenya;
 public $admin;

 public function construct_usuarios($nombres,$apellidos,$cedula,$dirrecion,$sexo,$telefono,$correo,$usuario,$contrasenya,$admin)
 {
    $this->nombres=$nombres;
    $this->apellidos=$apellidos;
    $this->cedula=$cedula;
    $this->dirrecion=$dirrecion;
    $this->sexo=$sexo;
    $this->telefono=$telefono;
    $this->correo=$correo;
    $this->usuario=$usuario;
    $this->contrasenya=$contrasenya;
    $this->admin=$admin;

 }

    public function getNombres()
 	{ 
 		return $this->nombres;	
 	}

	public function setNombres($nombres)
 	{
 		$this->nombres=$nombres;
 	}
 	public function getApellidos()
 	{
 		return $this->apellidos;

 	}
    public function setApellidos($apellidos)
    {
    	$this->apellidos=$apellidos;

    }
    public function getCedula()
    {
    	return $this->cedula;
    }
    public function setCedula($cedula)
    {
    	$this->cedula=$cedula;
    }
    public function getDireccion()
    {
    	return $this->dirrecion;
    }	
    public function setDireccion($dirrecion)
    {
    	$this->dirrecion=$dirrecion;
    }
    public function getSexo()
    {
    	return $this->sexo;
    }
    public function setSexo()
    {
    	$this->sexo=$sexo;
    }
    public function getTelefono()
    {
    	return $this->telefono;
    }
    public function setTelefono($telefono)
    {
    	$this->telefono=$telefono;
    }
    public function getCorreo()
    { 
    	return $this->correo;
    }
    public function setCorreo($correo)
    {
    	$this->correo=$correo;
    }
    public function getUsuario()
    {
    	return $this->usuario;
    }
    public function setUsuario($usuario)
    {
    	$this->usuario=$usuario;
    }
    public function getContrasenya()
    {
    	return $this->contrasenya;
    }
    public function setContrasenya($contrasenya)
    {
    	$this->contrasenya=$contrasenya;
    }
    public function getAdmin()
    {
    	return $this->admin;
    }
    public function setAdmin($admin)
    {
    	$this->admin=$admin;
    }



}




?>