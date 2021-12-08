<html lang = "en">
<head>
	<meta charset ="UTF-8">
	<title>Estim</title>
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
					<a href = "Carrito.html">
                        <i class="icon icon-cart_2 fas fa-shopping-cart"></i>
                    </a>
				</div>
		</form>
	</header>
	<div class ="barra-inferior">
			<div class = "barra-inferior">
				<a href = "Productos.html" class = "categoria">
				PlayStation</a>
				<a href = "Productos.html" class = "categoria">
				Xbox</a>
				<a href = "Productos.html" class = "categoria">
				Nintendo</a>
				<a href = "Productos.html" class = "categoria">
				PC</a>
				<a href = "Productos.html" class = "categoria">
				VR</a>
				<a href = "Productos.html" class = "categoria">
				Ofertas</a>
				<a href = "EnviarComentarios.html" class = "categoria">
				Contáctanos</a>
			</div>
	</div>
	<main class="content">
		<center>
			<section class = "inicio_sesion">
				
				<h1 class="encabezado_box">Iniciar sesión</h1>

				<?php 
					if(isset($usuario)){
						 if($usuario == 0){
						 	echo "<p class='enlace'>Datos incorrectos</p>";
							session_destroy();
					}
					}else{
						echo "<br> <br>";
					}
	 			?>
				<form action="IniciodeSesion/IniciarSesion.php" method="POST">
					<input type="text" name="usuario" class="info" placeholder="Correo electrónico">
					<input type="password" name="contrasena" class="info" placeholder="Contraseña">
					<br><br>
					<button class = "inicio" type="submit">
						<div class = "enlace_btn"> Iniciar Sesión </div>
					</button>
				</form>
				
				<p class="enlace">¿Olvidaste tu contraseña?</p>
				<a class = "enlace" href="Registro.php">¿No tienes una cuenta? Registrarse</a>

			</section>
		</center>
	</main>
</body>
</html>