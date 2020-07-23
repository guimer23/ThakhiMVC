<?php

class Conexion{

	public function Conectar($respuesta){
		/* Conectar a una base de datos de MySQL */
		$dsn = 'mysql:dbname=ariwara_administracionthakhi;host=54.39.105.50';
		$user = 'ariwara_thakhi';
		$password = 'Sistemas.123';

		try {
			$gbd = new PDO($dsn, $user, $password);
			$respuesta='Conectado';
			
			echo '===== Conexion con éxito a la base de datos! ====';
			
		} catch (PDOException $e) {
			echo '==== Falló la conexión! ====' ;
			$respuesta='Desconectado';
		}
		return $respuesta;
	}
	
}
$c=new Conexion();
$c->Conectar('');

?>

