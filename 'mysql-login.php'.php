<?php //Datos de conexión a la base de datos
class con{
	function_construct(){
		try{
			//declaracion variables
			$host ="localhost";
			$db ="conexiondb";
			$user ="root";
			$password ="";
			//cadena conexion
			$this->con=mysqli_connect($host,$user,$password) or die("error al conectar a la bdd");
			//seleccion de bdd
			mysqli_select_db($this->con,$db)or die("no se a encontrado la bdd");
			echo "conexion exitosa";
		}catch(exception $exit){
			theow $exit;
		}
	}


}
?>
