<?php
	// local 
	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "proyectoweb";
	

		// internet
	/*
	$servername = 'mysql.hostinger.mx';
	$username = 'u829331920_libro';
	$password = 'libros';
	$database = 'u829331920_libro';

*/
	// Crear conexión
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Checar conexión
	if (!$conn) 
	    die("Fallo al conectar: " . mysqli_connect_error());


?> 

