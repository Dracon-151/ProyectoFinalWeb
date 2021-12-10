<?php

	require 'IniciodeSesion/Log.php';

	session_start();

	if(isset($_GET['buscar'])){
		$_SESSION['busqueda'] = $_GET['busqueda'];
		var_dump($_SESSION['busqueda']);
		?>
    	<script>window.location.replace("http://localhost/ProyectoFinalWeb/Busqueda.php");</script>
   		<?php 
		?>
   		<?php 
	}
?>