<?php

require 'Log.php';

session_start();

$usuario = $_POST['usuario'];
$contrasena = md5($_POST['contrasena']);

$query = "SELECT COUNT(*) as usuariosValidos FROM usuario WHERE email = '$usuario' AND contrasena = '$contrasena'";
$consulta = mysqli_query($conexion, $query);
$resultado = mysqli_fetch_array($consulta);

if($resultado['usuariosValidos']> 0){

	$_SESSION['usuario'] = $usuario;

	$query = "SELECT idUsuario as idSesion FROM usuario WHERE email = '$usuario' AND contrasena = '$contrasena'";

	$consulta = mysqli_query($conexion, $query);

	$resultado = mysqli_fetch_array($consulta);

	$_SESSION['idSesion'] = $resultado['idSesion'];
	header("location: ../Index.php");

}else{
		$_SESSION['idSesion'] = 0;
		header("location: ../Login.php");
}
?>