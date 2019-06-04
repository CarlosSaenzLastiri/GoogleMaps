<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM ubicasionsensor WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="Tipo_Instalacion" class="col-sm-2 control-label">Tipo Instalacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipo_Instalacion" name="Tipo_Instalacion" placeholder="Tipo_Instalacion" value="<?php echo $row['Tipo_Instalacion']; ?>"  required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="Nombre_empresa_o_Institucion" class="col-sm-2 control-label">Nombre De Empresa o Institucion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre_empresa_o_Institucion" name="Nombre_empresa_o_Institucion" placeholder="Nombre_empresa_o_Institucion" value="<?php echo $row['Nombre_empresa_o_Institucion']; ?>"  >
					</div>
				</div>
					<div class="form-group">
					<label for="Colonia" class="col-sm-2 control-label">Colonia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="Colonia" value="<?php echo $row['Colonia']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="Cp" class="col-sm-2 control-label">Cp</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Cp" name="Cp" placeholder="Cp" value="<?php echo $row['Cp']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="Localidad" class="col-sm-2 control-label">Localidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Localidad" name="Localidad" placeholder="Localidad" value="<?php echo $row['Localidad']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="Municipio" class="col-sm-2 control-label">Municipio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Municipio" value="<?php echo $row['Municipio']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="Estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Estado" name="Estado" placeholder="Estado" value="<?php echo $row['Estado']; ?>"  required>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>