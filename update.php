<?php
	
	require 'conexion.php';

	$id = $_POST['id'];
	$Tipo_Instalacion = $_POST['Tipo_Instalacion'];
	$Nombre_empresa_o_Institucion = $_POST['Nombre_empresa_o_Institucion'];
	$Colonia = $_POST['Colonia'];
	$Cp = $_POST['Cp'];
	$Localidad = $_POST['Localidad'];
	$Municipio = $_POST['Municipio'];
	$Estado = $_POST['Estado'];
	
	
	
	
	$sql = "UPDATE ubicasionsensor SET Tipo_Instalacion='$Tipo_Instalacion', Nombre_empresa_o_Institucion='$Nombre_empresa_o_Institucion', Colonia='$Colonia' , Cp='$Cp', Localidad='$Localidad', Municipio='$Municipio', Estado='$Estado' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
