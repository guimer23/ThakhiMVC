<?php

class Conectar
{
	

private $servidor="localhost";
private $usuario="root";
private $pass="";
private $bd="administracionthakhi";

	function conexion()
	{
		$conexion=mysqli_connect($this->servidor,
						$this->usuario,
						$this->pass,
						$this->bd);
		$conexion->set_charset("utf8");
		return $conexion;
	}

}

?>
