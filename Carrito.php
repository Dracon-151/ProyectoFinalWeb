<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />

	<title>Estim</title>

    <script src="bootstrap/js/bootstrap.js"></script>

	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
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
					if(isset($usuario)){
						echo "<a href = 'IniciodeSesion/CerrarSesion.php' class = 'login'>
			    		Cerrar sesión</a>";	
					}else{
						echo "<a href = 'Login.php' class = 'login'>
			    		Iniciar sesión</a>";	
			    	}		
				?>
			</div>
		</form>
	</header>

	<nav class="navbar navbar-inverse" role="navigation" style="background-color: #83BA7E;">
	  <div class="container">

	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-nav">
	      <ul class="nav navbar-nav">
	        <li><a href="Productos.php">PlayStation</a></li>
	        <li><a href="Productos.php">Xbox</a></li>
	        <li><a href="Productos.php">Nintendo</a></li>
	        <li><a href="Productos.php">PC</a></li>
	        <li><a href="Productos.php">VR</a></li>
	        <li><a href="Productos.php">Ofertas</a></li>
	        <li><a href="DetallesCompras.php">Compras anteriores</a></li>
	        <li><a href="Carrito.php"><i class="icon icon-cart fas fa-shopping-cart"></i></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<main class="container">
		<h2 class="encabezado_seccion">Carrito de compras</h2>
		<center>
			<section class = "carrito_compras">
				
		    	<table class="table">

				<?php
		    	
				require 'IniciodeSesion/Log.php';

        		if(isset($_SESSION['idSesion'])){$usuario = $_SESSION['idSesion'];}
        		else{ $usuario = -1;}
        		$total = 0;

        		$query = "SELECT COUNT(*) as existe FROM carrito WHERE idUsuario = '$usuario'";
				$consulta = mysqli_query($conexion, $query);
				$resultado = mysqli_fetch_array($consulta);

		    	if($resultado['existe'] > 0 && $usuario > 0){

		    		$numProductos = $resultado['existe'];
		    		
		    		$query = "SELECT * FROM carrito JOIN producto ON carrito.idProducto = producto.idProducto WHERE idUsuario = '$usuario' ";
						$consulta = mysqli_query($conexion, $query);
						$resultado = mysqli_fetch_all($consulta);

			        foreach($resultado as $indice => $arreglo){

			            $idProducto = $arreglo[2];
			            $cantidadProducto = $arreglo[3];
		    			$nombreProducto = $arreglo[5];
		    			$precio = $arreglo[7];
		    			$rutaFoto = $arreglo[8];
		    			
		    			?>
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
								</td></tr>
						<?php
			        }
			        ?>
			    	</table>
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
						<form action="Carrito.php" method="POST">
							<button class = "btn_2" type="submit" name="Comprar">
								<div class = "enlace_btn"> Comprar </div>
							</button>
						</form>
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

	<script src="https://code.jquery.com/jquery-3.6.0.js"
  	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  	crossorigin="anonymous"></script>

  	<!-- JavaScript Bundle with Popper -->
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  	integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  	crossorigin="anonymous"></script>

	<script src="./js/scripts.js"></script>

	<?php
    	if(isset($_REQUEST["btnEliminar"])){
        	if(isset($_SESSION['idSesion'])){
				$id = $_REQUEST["id"];

        		require 'IniciodeSesion/Log.php';

	        	$usuario = $_SESSION['idSesion'];

    	    	$query = "DELETE FROM carrito WHERE idProducto = '$id'AND idUsuario = '$usuario'";
				$consulta = mysqli_query($conexion, $query);
				$resultado = mysqli_fetch_array($consulta);

				echo "<script>alert('¡Se ha eliminado el producto del carrito!');</script>";

	    	}
	    	?>
	    	<script>window.location.replace("http://localhost/ProyectoFinalWeb/Carrito.php");</script>
	   		<?php 
		}
		  	?>

	<?php
    	if(isset($_REQUEST["Comprar"])){
        	if(isset($_SESSION['idSesion'])){

        		require 'IniciodeSesion/Log.php';

	        	$usuario = $_SESSION['idSesion'];

        		$query = "SELECT idProducto FROM carrito WHERE idUsuario = '$usuario' ";
				$consulta = mysqli_query($conexion, $query);
				$resultado = mysqli_fetch_all($consulta);

			    foreach($resultado as $indice){

    	    		$query = "CALL comprar('$indice[0]','$usuario')";
    	    		$consulta = mysqli_query($conexion, $query);
				}
				
				echo "<script>alert('¡Se ha realizado la compra con exito!');</script>";

	    	}
	    	?>
	    		<script>window.location.replace("http://localhost/ProyectoFinalWeb/Carrito.php");</script>
	   		<?php 
		}
		  	?>




	        
</body>
</html>