<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset ="UTF-8">
	<title>Estim</title>
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
		<img src="img/publicidad.png" class ="img_publicidad"/>

		<div class="content2">
			<h1 class="encabezado_index">OFERTAS</h1>

			<section class="container-products">
				<table class="off table product">
            		<tr><td><img src="img/control game cube.png" alt="" class="product__img2"></td></tr>
                    <tr><td><div class="productdescription">
                       	<span class="product__price">$1,099.00</span>
                        <h3 class="product__title">Mario Kart 8 Deluxe<br>-Para Nintendo Switch</h3>
                    </div>
                    <form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="6">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>
                	</td></tr>
        		</table>
 

				<table class="off table product">
					<tr><td><img src="img/control wii pro.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,199.00</span>
						<h3 class="product__title">Mario Oddyssey<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="7">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>
					</td></tr>
				</table>

				<table class="off table product">
					<tr><td><img src="img/control.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,049.00</span>
						<h3 class="product__title">Arms<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="8">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>
					</td></tr>
				</table>

				<table class="off table product">
					<tr><td><img src="img/controles wii.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,049.00</span>
						<h3 class="product__title">Rabbids kingdom battle<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="9">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	</form>
				</td></tr>
				</table>

				<table class="off table product">
					<tr><td><img src="img/motion plus.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,399.00</span>
						<h3 class="product__title">Animal crossing new horizons<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="10">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>
					</td></tr>
				</table>
			</section>

			<h1 class="encabezado_index">JUEGOS</h1>

			<section class="container-products">
				<table class="table product">
					<tr><td><img src="img/pokemon.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,599.00</span>
						<h3 class="product__title">Pokémon Lets go Eevee<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="11">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	</form>

				</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/smash.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,799.00</span>
						<h3 class="product__title">Super Smash Bros<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="12">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>

				</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/zelda.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,599.00</span>
						<h3 class="product__title">Zelda Breath of the Wild <br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="13">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>

				</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/astralchain.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,499.00</span>
						<h3 class="product__title">Astral Chain<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="14">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>

				</td></tr>
				</table>

				<table class="table product">
					<tr><td><img src="img/assassins.png" alt="" class="product__img2"></td></tr>
					<tr><td><div class="product__description">
						<span class="product__price">$1,499.00</span>
						<h3 class="product__title">Assassins creed III<br>-Para Nintendo Switch</h3>
					</div>
					<form action="Index.php" method="POST">
	                        <input type="hidden" name="id" value="15">
	                        <button class = "inicio" type="submit" value="Agregar" name ="btnAgregar">
								<div class = "enlace_btn"> <i class="fas fa-cart-plus"></i> </div>
							</button>
                   	 </form>
				</td></tr>
				</table>
			</section>
		</div>
	</main>
</body>
</html>