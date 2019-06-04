<?php
   require_once 'conexion.php';
   $user= $_POST["user"];
   $pass= $_POST["pass"];

   $buscarUsuario="select tipoUsuario from usuarios where usuario = '$user' and clave = MD5('$pass') ";
   $result = $conn->query($buscarUsuario) or die ($conn->error.__LINE__);
   $row_cnt = $result->num_rows;
   $reg = mysqli_fetch_assoc($result);

   if($row_cnt == 1) {
   	session_start();
   	$respuesta = "si";
   	$_SESSION["usuario"] = $user;
   	$_SESSION["tipou"] = $reg["tipoUsuario"];
   }
   else {
    	$respuesta = "Usuario y/o Contraseña Incorrectas";
   }
   echo $respuesta;
   
   ?>