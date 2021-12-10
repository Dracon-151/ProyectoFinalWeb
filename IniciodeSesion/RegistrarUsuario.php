<?php

require 'Log.php';

session_start();

if($_POST['contrasena'] == $_POST['contrasena2'] AND $_POST['contrasena'] != "")
{
	 $nombre = $_POST['nombre'];
	 $usuario = $_POST['usuario'];
	 $contrasena = md5($_POST['contrasena']);
	 
	$query = "SELECT COUNT(*) as usuariosValidos FROM usuario WHERE email = '$usuario'";

	$consulta = mysqli_query($conexion, $query);

	$resultado = mysqli_fetch_array($consulta);

	if($resultado['usuariosValidos']< 1){

		$query = "INSERT INTO usuario VALUES(0, '$nombre', '$usuario', '$contrasena')";

		$insertar = mysqli_query($conexion, $query);

		$_SESSION['usuario'] = $usuario;

		$query = "SELECT idUsuario as idSesion FROM usuario WHERE email = '$usuario' AND contrasena = '$contrasena'";

		$consulta = mysqli_query($conexion, $query);

		$resultado = mysqli_fetch_array($consulta);

		$_SESSION['idSesion'] = $resultado['idSesion'];
		header("location: ../Index.php");
	}
	else{
		$_SESSION['idSesion'] = -2;
		header("location: ../Registro.php");
	}
}
else{
	if($_POST['contrasena'] != $_POST['contrasena2']){
		$_SESSION['idSesion'] = -1;
		header("location: ../Registro.php");
	}
	else{
		$_SESSION['idSesion'] = 0;
		header("location: ../Registro.php");
	}
}
?>