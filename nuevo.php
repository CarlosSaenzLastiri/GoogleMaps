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
				<h3 style="text-align:center">NUEVA INSTALACIÓN</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="Tipo Instalacion" class="col-sm-2 control-label">Tipo Instalacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipo Instalacion" name="Tipo Instalacion" placeholder="Tipo Instalacion" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Nombre de la empresa o Institucion" class="col-sm-2 control-label">Nombre De la Empresa o Institucion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre de la empresa o Institucion" name="Nombre_empresa_o_Institucion" placeholder="Nombre de la empresa o Institucion" >
					</div>
				</div>
					<div class="form-group">
					<label for="Colonia" class="col-sm-2 control-label">Colonia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="Colonia" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Cp" class="col-sm-2 control-label">Cp</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Cp" name="Cp" placeholder="Cp" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Localidad" class="col-sm-2 control-label">Localidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Localidad" name="Localidad" placeholder="Localidad" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Municipio" class="col-sm-2 control-label">Municipio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Municipio" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Estado" name="Estado" placeholder="Estado" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Latitud" class="col-sm-2 control-label">Latitud</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Latitud" name="Latitud" placeholder="Latitud" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Longitud" class="col-sm-2 control-label">Longitud</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Longitud" name="Longitud" placeholder="Longitud" required>
					</div>
				</div>
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Registros</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>