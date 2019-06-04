<?php
  session_start();

  if (!isset($_SESSION["usuario"])) {
  	 die("<script>location.href='login.php';</script>");
  }
?>

<!DOCTYPE html>
<html>
<title>catalogoSensores</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="contenedor">	
	<?php 
		
		include_once("funciones.php");
	?>	
		<section>
			<h1>Datos Sensores</h1>			
			
			&nbsp;&nbsp;&nbsp;<span id="contador_registros">
			<div id="div1">
			
				<table>
					<tr id="registros"></tr>
				</table>

				<!--  ventana emergente con formulario de modificacion de datos-->
				<div id="dialog" title="Modificar Autor">
					<div id="modificar">
						<form id="Guardar" action="">
							<input type="hidden" id="aut_id" name="aut_id" >
							<input type="hidden" id="accion" name="accion" value="4" >
							<label for="Mnombre">Nombre</label>
							<input type="text" id="Mnombre" name="nombre" ><br><br>
							<br>
							<label for="Mapellidos">Apellidos</label>
							<input type="text" id="Mapellidos" name="apellidos" ><br><br>
							<br>
							<label for="Medad">Edad</label>
							<input type="text" id="Medad" name="edad" ><br><br>
							<br>
							<label for="Msexo">Sexo</label>
							<input type="text" id="Msexo" name="sex


							o" ><br><br>
							<br>
							<label for="Mtelefono fijo">Telefono fijo</label>
							<input type="text" id="Mtelefono fijjo" name="telefono fijo" ><br><br>
							<br>
							<label for="Mtelefonocelular">Telefono celular</label>
							<input type="text" id="Mtelefono celular" name="telefono celular" ><br><br>
							<input type="submit" id="Guardar" value="Guardar informacion">
						</form>
					</div>
				</div>
				<!--  termina código de ventana emergente de modificacion de datos -->

			</div>		
		</section>	
		
	</div>
</body>
	
<script src="../js/demo.js"></script>

<script type="text/javascript">

	lista();

	// funcion que sirve para listar los datos de la tabla autores de la base de datos
	// editoresdb, se crea un <tr> o renglon por registro de la tabla autores y cada campo
	// se almacena dentro de un <td>
	// en la llamada al modelo autoresModel se manda el parametro accion=1 para identificar
	// en el modelo la accion a realizar mediante un if
	function lista(){
		var cont =0;
		$("#lista_autores").html("");		
		$.get(URL_BASE + "modelos/autoresModel.php", {"accion":1}, function(registros){
			registros.forEach(function(registro, index){
				$("#lista_autores").prepend("<tr id='"+
						registro.id_au+"'>"+
						"<td>" + registro.id_au + "</td>" + 
						"<td>" + registro.au_nombre + "</td>"+
						"<td>" + registro.au_apellidos + "</td>"+
						"<td>" + registro.direccion + "</td>"+
						"<td>" + registro.telefono + "</td>"+	
						"<td> <span class='borrar_btn icon-bin iconos_acciones' id='borar'></span>"+
						" <span class=' modificar_btn icon-file-text2 iconos_acciones' ></span> </td>"+
						"<tr>");
						cont++;
						$("#contador_registros").html(cont+ " Registros");

			}); //termina foreach
		},"json");
	}


	// Codigo que se activa al dar click en cualquier boton de borrar de la tabla de
	// datos y se borra el autor según el id seleccionado
	// en la llamada al modelo autoresModel se manda el parametro accion=2 para identificar
	// en el modelo la accion a realizar mediante un if, tambien se pasa el parametro aut_id
	// para identificar el id del autor  equivale a:
	// http://localhost/prograweb/u5/sitio/models/autoresModel.php?aut_id=107&accion=2
	

	// Codigo que se activa al dar click en cualquier boton de modificar en la tabla 
	// que muestra la informacion y sirve para abrir una ventana de modificacion de los datos 
	//  ejemplo en:     http://api.jqueryui.com/dialog/#entry-examples
 $( "#dialog" ).dialog({ autoOpen: false });
	$(document).on("click",".modificar_btn", function(evento){
		var id = $(this).parent().parent().attr("id");
		$( "#dialog" ).dialog({ 
			autoOpen: true ,
			resizable :false,
			show: "scale",
            hide: "shake",
            modal: "true"
		});

		// la siguiente linea equivale a :
		// http://localhost/prograweb/u5/sitio/models/autoresModel.php?aut_id=107&accion=3
		$.get(URL_BASE + "modelos/autoresModel.php", {"aut_id":id, "accion":3}, 
			function(respuesta){
				$("#aut_id").val(respuesta[0].id_au);
				$("#Mnombre").val(respuesta[0].au_nombre);
				$("#Mapellidos").val(respuesta[0].au_apellidos);
				$("#Mdireccion").val(respuesta[0].direccion);
				$("#Mtelefono").val(respuesta[0].telefono);
			}, "json");
	});  // aqui termina -> modificar


	// codigo que se ejecuta cuando damos click en el boton de modificar autor en 
	// la ventana emergente.  se realiza la modificacion en la base de datos
	$(document).on("click", "#modificar_autor", function(evento){
		evento.preventDefault();
		$.get(URL_BASE + "modelos/autoresModel.php", 
			$("#frm_modificar").serialize(), function(respuesta){
				alert(respuesta);
			});
		//lista();
		location.reload();
		$( "#dialog" ).dialog({ autoOpen: false });
	});


	// codigo para autocomplete
	// este codigo se ejecuta cada vez que el usuario escribe en la caja de texto de busqueda
	$(document).on("keyup", "#buscar", function(){
		var cont =0;
		$("#lista_autores").html("");
		$.get(URL_BASE + "modelos/autoresModel.php",
			{"nombre": $("#buscar").val(), "accion":5},
			function(registros){
			registros.forEach(function(registro, index){
				$("#lista_autores").prepend("<tr id='"+
						registro.id_au+"'>"+
						"<td>" + registro.id_au + "</td>" + 
						"<td>" + registro.au_nombre + "</td>"+
						"<td>" + registro.au_apellidos + "</td>"+
						"<td>" + registro.direccion + "</td>"+
						"<td>" + registro.telefono + "</td>"+	
						"<td> <span class='borrar_btn icon-bin iconos_acciones' id='borar'></span>"+
						" <span class=' modificar_btn icon-file-text2 iconos_acciones' ></span> </td>"+	"<tr>");
						cont++;
						$("#contador_registros").html(cont+ " Registros");
			}); //termina foreach
			$(".acciones").hide();
		},"json");
	});


</script>

</html>



