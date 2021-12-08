<html lang = "en">
<head>
	<meta charset ="UTF-8">
	<title>Estim</title>
    <script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php 
		session_start();	
		if(isset($_SESSION['idSesion'])){
			$usuario = $_SESSION['idSesion'];
		}else{
			session_destroy();
		}		
	?>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<a class="logo__index" href="Index.html">a</a>
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
					<a href = "Carrito.php">
                        <i class="icon icon-cart fas fa-shopping-cart"></i>
                    </a>
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

	<main class="content">
		<img src="img/publicidad.png" class ="img_publicidad" width="1366" height="182" />

		<div>
			<h1 class="encabezado_index">LO MÁS POPULAR</h1>

			<section class="container-products">
				<table class="xbox table product">
					<tr><td><img src="img/xbox360.png" alt="" class="product__img"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$3,499.00</span>
						<h3 class="product__title">XBOX 360<br>-250GB<br>-2 Controles<br>-1 Juego</h3>
					</div>
					
						<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="1">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 	</form>
					</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/play2.png" alt="" class="product__img"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$3,499.00</span>
						<h3 class="product__title">PlayStation 2<br>-250GB<br>-1 Control<br>-2 Juegos</h3>
					</div>
						<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="2">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 	</form>
					</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/wii.png" alt="" class="product__img"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$2,499.00</span>
						<h3 class="product__title">Nintendo Wii<br>-128GB<br>-1 Control<br>-Wii Sports incluido</h3>
					</div>
						<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="3">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 	</form>
					</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/virtual boy.png" alt="" class="product__img"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$12,499.00</span>
						<h3 class="product__title">Virtual Boy<br>-1MB<br>-1 Control<br>-2 Juegos</h3>
					</div>
						<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="4">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 	</form>
					</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/juegosfera.png" alt="" class="product__img"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,499.00</span>
						<h3 class="product__title">Juegosfera<br>-100TB<br>-Es esférica<br>-Pi Juegos incluidos</h3>
					</div>
						<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="5">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 	</form>
					</td></tr>
				</table>
			</section>
		</div>
	</main>
	<?php
    if(isset($_REQUEST["btnAgregar"])){
        if(isset($_SESSION['idSesion'])){
        	$id = $_REQUEST["id"];
	        $existe = false;

		    if(isset($_SESSION["carrito"])){
		        foreach($_SESSION["carrito"] as $indice =>$arreglo){
		            if ($indice == $id){
		            	$_SESSION["carrito"][$id]["cantidad"] = 
		            	$_SESSION["carrito"][$id]["cantidad"] +1;
		            	$existe = true;
		            }
		        }
		        if ($existe == false){
		        	$_SESSION["carrito"][$id]["cantidad"] = 1;
		        }
		    }else{
		        $_SESSION["carrito"][$id]["cantidad"] = 1;
		    }
		  	/*var_dump($_SESSION["carrito"]); */
	        ?>
	        <script>window.location.replace("http://localhost/pruebas/Carrito.php");</script>
	        <?php
	    }else{
	    	echo "<script>alert('Inicia sesión para comprar');</script>";
	    }
    }
    ?>
</body>
</html>