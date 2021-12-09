<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset ="UTF-8">
	<title>Estim</title>
    <script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/style.css">
	<?php 
		session_start();	
		if(isset($_SESSION['idSesion'])){
			$usuario = $_SESSION['idSesion'];
		}else{
			session_destroy();
		}		
	?>
	
</head>
<body>
	<a class="logo__index" href="Index.php">a</a>
	<header class ="header">
		<form action ="">
				<div class = "barra-superior">
					<img src="img/logo.png" class ="logo">
					<input type = "text" id ="task">
					<button class = "btn btn-search" id="btnSearch">
						<i class="fas fa-search"></i>
					</button>
					<?php 
						if(!isset($usuario)){
							echo "<a href = 'Login.php' class = 'login'>Iniciar sesión</a>";
						}else{
							echo "<a href = 'IniciodeSesion/CerrarSesion.php'class = 'login'>Cerrar sesión</a>";
						}
	 				?>
				</div>
		</form>
	</header>
	<div class ="barra-inferior">
			<div class = "barra-inferior">
				<a href = "Productos.php" class = "categoria">
				PlayStation</a>
				<a href = "Productos.php" class = "categoria">
				Xbox</a>
				<a href = "Productos.php" class = "categoria">
				Nintendo</a>
				<a href = "Productos.php" class = "categoria">
				PC</a>
				<a href = "Productos.php" class = "categoria">
				VR</a>
				<a href = "Productos.php" class = "categoria">
				Ofertas</a>
				<a href = "EnviarComentarios.php" class = "categoria">
				Contáctanos</a>
			</div>
	</div>

	<main class="container">
		<h2 class="encabezado_seccion">Carrito de compras</h2>
		<center>
			<section class = "carrito_compras">
				<?php
		    	//Conexión a la bd
		    	$host = "localhost";
		 		$usuario = "root";
		 		$contrasena = "";
		 		$bd = "estim";
		 		$conexion = mysqli_connect($host, $usuario, $contrasena, $bd);
		 		$total = 0;

		    	if(isset($_SESSION["carrito"])){
			        foreach($_SESSION["carrito"] as $indice =>$arreglo){
			            $idProducto = $indice;
			            $cantidadProducto = $_SESSION["carrito"][$indice]["cantidad"];
			            //getNombre
		    			$query = "SELECT nombre FROM producto WHERE idProducto = '$idProducto'";
		    			$consulta = mysqli_query($conexion, $query);
		    			$resultado = mysqli_fetch_array($consulta);
		    			$nombreProducto = $resultado[0];
		    			//getDescripción
		    			$query = "SELECT descripcion FROM producto WHERE idProducto = '$idProducto'";
		    			$consulta = mysqli_query($conexion, $query);
		    			$resultado = mysqli_fetch_array($consulta);
		    			$descripcion = $resultado[0];

		    			//getPrecio
		    			$query = "SELECT precio FROM producto WHERE idProducto = '$idProducto'";
		    			$consulta = mysqli_query($conexion, $query);
		    			$resultado = mysqli_fetch_array($consulta);
		    			$precio = $resultado[0];

		    			//getRutaFoto
		    			$query = "SELECT rutaFoto FROM producto WHERE idProducto = '$idProducto'";
		    			$consulta = mysqli_query($conexion, $query);
		    			$resultado = mysqli_fetch_array($consulta);
		    			$rutaFoto = $resultado[0];
		    			

		    			/*echo "<hr>ID: " . $idProducto . "<br>";
		    			echo "Nombre: " . $nombreProducto . "<br>";
		    			echo "Cantidad: " . $cantidadProducto . "<br>";
		    			echo "Descripcion: ". $descripcion . "<br>";
		    			echo "Precio: $". $precio . "<br>";
		    			echo "Ruta de Foto: ". $rutaFoto . "<br>";
		    			*/
		    			?>
		    			<table class="table">
								<tr><td><img src=
								<?php 
									echo $rutaFoto;
								?> class ="img_producto"></td>
								<td><h3> 
								<?php 
									echo $nombreProducto;
								?>
								</h3></td>
								<td><h3 class="centrar color">Cantidad<p class="centrar">
								<?php 
									echo $cantidadProducto;
								?> </p></h3></td>
								<td><h3 class="campo_cantidad"> 
								$<?php 
									echo $precio* $cantidadProducto;
									$total = $total + $precio* $cantidadProducto;
								?></h3></td>
								<td><form action="Carrito.php" method="POST">
									<input type="hidden" name="id" value ="
									<?php 
										echo $idProducto;
									?>">
			                        <button class = "icon_2 icon-delete"type="submit" value="Eliminar" name ="btnEliminar">
										<div class = "enlace_btn_rojo"> <i class="fas fa-trash-alt"></i> </div>
									</button>
		                   	 	</form>
								</td>
						</table>
						<?php
			        }
			        ?>
			        <ul>
						<h3 class="campo_box_3"> Envío: </h3>
						<h3 class="campo_cantidad_2"> Gratis </h3>
					</ul>
					<ul>
						<h3 class="campo_box_3"> Total: </h3>
						<h3 class="campo_cantidad_2"> $
						<?php
							echo $total;
						?>
						</h3>
					</ul>
					<ul>
						<div class = "btn_2"><a class="enlace_btn" href="Login.php">Comprar</a></div>
					</ul>
				<?php
			    }else{
			    ?>
			    	<center>
			    		<h2> Tu carrito está vacío </h2>
			    	</center>
				<?php
			    }
		    	?>
			</section>
		</center>
	</main>
	<?php
    if(isset($_REQUEST["btnEliminar"])){
        if(isset($_SESSION['idSesion'])){
        	$id = $_REQUEST["id"];
        	$empty = true;

		    if(isset($_SESSION["carrito"])){
		        foreach($_SESSION["carrito"] as $indice =>$arreglo){
		            if ($indice == $id){
		            	echo "existe";
		            	unset($_SESSION["carrito"][$indice]);
		            }
		        }
		        foreach($_SESSION["carrito"] as $indice =>$arreglo){
		            if ($indice > 0){
		            	$empty = false;
		            }
		        }
		        if ($empty == true){
		        	unset($_SESSION["carrito"]);
		        }
		    }
		  	/*var_dump($_SESSION["carrito"]); */
		  	?>
	        <script>window.location.replace("http://localhost/pruebas/Carrito.php");</script>
	        <?php
	    }
    }
    ?>
</body>
</html>