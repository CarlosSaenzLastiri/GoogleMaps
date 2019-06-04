<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet"  href="css/style.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/bootstrap-theme.min.css">
	    <link rel="stylesheet"  href="css/misEstilos.css">
	 <script src="js/jquery-1.11.3.js"></script> 
	 <script src="js/bootstrap.min.js"></script> 
	 <script src="js/funciones.js"></script> 
	  
</head>
<body>
	<div id="frm_login" >
		<h1>Inicio de sesion</h1>
		<form id="login">
			<div class="form-container">
				<input type="text" name="user" class="form-control" placeholder="Usuario">
			</div>
			<div class="form-container">
				<input type="password" name="pass" class="form-control" placeholder="Contraseña">
			</div>
			<div class="form-container">
				<input type="submit" class="btn btn-primary form-control" value="Entrar">
			</div>
		</form>	
	</div>

</body>

<script src="js/demo.js"></script>


<script type="text/javascript">
	$(document).on("submit","#login", function(evento) {
		evento.preventDefault();
		$.post("modelos/valida_login.php", $("#login").serialize(),
			function(respuesta){
				if(respuesta.trim() == "si") {
					location.href= "index.php";
		}
		else{
			alert(respuesta);
		  }	
		} );
	} );
</script>
</html>