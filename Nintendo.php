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
		}		
	?>
</head>

<body>
	<a class="logo__index" href="Index.php">a</a>

	<header class ="header">
		<form action ="">
			<div class = "barra-superior">
				<img src="img/logo.png" class ="logo">
				<form action ="" method = "POST">
					<input type = "text" id ="task" name ="busqueda">
					<button type = "submit" name ="buscar" class = "btn btn-search" id="btnSearch">
					<i class="fas fa-search"></i>
					</button>
				</form>		
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
	        <li><a href="PlayStation.php">PlayStation</a></li>
	        <li><a href="Xbox.php">Xbox</a></li>
	        <li><a href="Nintendo.php">Nintendo</a></li>
	        <li><a href="PC.php">PC</a></li>
	        <li><a href="VR.php">VR</a></li>
	        <li><a href="Ofertas.php">Ofertas</a></li>
	        <li><a href="DetallesCompras.php">Compras anteriores</a></li>
	        <li><a href="Carrito.php"><i class="icon icon-cart fas fa-shopping-cart"></i></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<main class="content">
		<img src="img/publicidad.png" class ="img_publicidad"/>

		<div class="content2">
			<h1 class="encabezado_index">NINTENDO</h1>

			<section class="container-products">
				<?php
					require 'IniciodeSesion/Log.php';
					for ($i = 5; $i < 10; $i++){
						$query = "SELECT * FROM producto WHERE idProducto = '$i'";
						$claseTabla = "off ";
						if ($i == 5){
							$query = "SELECT * FROM producto WHERE idProducto = '3'";
								$claseTabla = "no-off ";
						}
						$consulta = mysqli_query($conexion, $query);
						$arreglo = mysqli_fetch_array($consulta);

						$idProducto = $arreglo[0];
		    			$nombre = $arreglo[1];
		    			$descripcion = $arreglo[2];
		    			$precio = $arreglo[3];
		    			$rutaFoto = $arreglo[4];
						?>
						
						<table class= "
						<?php
							echo $claseTabla;
						?> table product">
	            		<tr><td><img src=
	            		<?php
	            			echo $rutaFoto;
	            		?> class="product__img"></td></tr>
	                    <tr><td><div class="productdescription">
	                       	<span class="product__price"> 
	                       		<?php
	            					echo "$".$precio;
	            				?></span>
	                        <h4 class="product__title">
	                        	<?php
	            					echo $nombre;
	            				?></span><br>
	            				<?php
	            					echo $descripcion;
	            				?></span></h4>
	                    </div>
						<form action="Nintendo.php" method="POST">
		                        <input type="hidden" name="id" value=
		                        <?php 
		                        	echo $idProducto;
		                        ?>>
		                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
									<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
								</button>
	                   	 </form>
	                	</td></tr>
        				</table>
        		<?php
				}?>
			</section>

			<h1 class="encabezado_index">NUEVOS LANZAMIENTOS</h1>

			<section class="container-products">
				<?php
					require 'IniciodeSesion/Log.php';
					for ($i = 10; $i < 15; $i++){
						$query = "SELECT * FROM producto WHERE idProducto = '$i'";
						$consulta = mysqli_query($conexion, $query);
						$arreglo = mysqli_fetch_array($consulta);

						$idProducto = $arreglo[0];
		    			$nombre = $arreglo[1];
		    			$descripcion = $arreglo[2];
		    			$precio = $arreglo[3];
		    			$rutaFoto = $arreglo[4];
						?>
						
						<table class="table product">
	            		<tr><td><img src=
	            		<?php
	            			echo $rutaFoto;
	            		?> class="product__img2"></td></tr>
	                    <tr><td><div class="productdescription">
	                       	<span class="product__price"> 
	                       		<?php
	            					echo "$".$precio;
	            				?></span>
	                        <h4 class="product__title">
	                        	<?php
	            					echo $nombre;
	            				?></span><br>
	            				<?php
	            					echo $descripcion;
	            				?></span></h4>
	                    </div>
						<form action="Nintendo.php" method="POST">
		                        <input type="hidden" name="id" value=
		                        <?php 
		                        	echo $idProducto;
		                        ?>>
		                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
									<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
								</button>
	                   	 </form>
	                	</td></tr>
        				</table>
        		<?php
				}?>
			</section>
		</div>
	</main>

<?php
    if(isset($_REQUEST["btnAgregar"])){
        if(isset($_SESSION['idSesion'])){
        	$id = $_REQUEST["id"];

        	require 'IniciodeSesion/Log.php';

        	$usuario = $_SESSION['idSesion'];


        	$query = "SELECT COUNT(*) as existe FROM carrito WHERE idProducto = '$id'AND idUsuario = '$usuario'";
			$consulta = mysqli_query($conexion, $query);
			$resultado = mysqli_fetch_array($consulta);

			if($resultado['existe'] > 0){
				$query = "UPDATE carrito SET cantidad = cantidad + 1 WHERE idProducto = '$id'AND idUsuario = '$usuario'";
				$subir = mysqli_query($conexion, $query);
			}
			else{
				$query = "INSERT INTO carrito VALUES(0, '$usuario', '$id', 1)";
				$subir = mysqli_query($conexion, $query);
			}	

			echo "<script>alert('¡Se ha agregado el producto al carrito!');</script>";

	    }else{
	    	echo "<script>alert('Inicia sesión para comprar');</script>";
	    }
    }
    ?>

	<script src="https://code.jquery.com/jquery-3.6.0.js"
  	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  	crossorigin="anonymous"></script>

  	<!-- JavaScript Bundle with Popper -->
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  	integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  	crossorigin="anonymous"></script>

	<script src="./js/scripts.js"></script>
	<?php
		if(isset($_GET['buscar'])){
		$_SESSION['busqueda'] = $_GET['busqueda'];
		var_dump($_SESSION['busqueda']);
		?>
    	<script>window.location.replace("http://localhost/ProyectoFinalWeb/Busqueda.php");</script>
   		<?php 
	}
	?> 
</body>
</html>