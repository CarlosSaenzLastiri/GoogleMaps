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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="edad" class="col-sm-2 control-label">Edad</label>
					<div class="col-sm-10">
						<input type="edad" class="form-control" id="edad" name="edad" placeholder="edad" required>
					</div>
				</div>
				<div class="form-group">
					<label for="sexo" class="col-sm-2 control-label">Sexo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sexo" name="sexo" placeholder="sexo" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefonofijo" class="col-sm-2 control-label">Telefonofijo</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefonofijo" name="telefonofijo" placeholder="telefonofijo">
					</div>
				</div>
				<div class="form-group">
					<label for="telefonocelular" class="col-sm-2 control-label">Telefonocelular</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefonocelular" name="telefonocelular" placeholder="telefonocelular">
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