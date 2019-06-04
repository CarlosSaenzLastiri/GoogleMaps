<?php
	
	$mysqli = new mysqli('localhost', 'root','', 'proyectoweb');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
		/*class conexion
	{
		
		public function getconexion()
		{
			$user="root";
			$pass ="";
		    $host="localhost";
		    $db	="conexiondb";
		
		
		$con = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
		return $con;
		}
	}*/
?>
