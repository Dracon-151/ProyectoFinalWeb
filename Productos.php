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
				<a href = "Login.php" class = "login">
			    Iniciar sesión</a>
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
	        <li><a href="Productos.php">Contáctanos</a></li>
	        <li><a href="Carrito.php"><i class="icon icon-cart fas fa-shopping-cart"></i></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

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

	<script src="https://code.jquery.com/jquery-3.6.0.js"
  	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  	crossorigin="anonymous"></script>

  	<!-- JavaScript Bundle with Popper -->
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  	integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  	crossorigin="anonymous"></script>

	<script src="./js/scripts.js"></script>


</body>
</html>