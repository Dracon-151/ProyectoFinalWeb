<html lang = "en">
<head>
	<meta charset ="UTF-8">
	<title>InicioSesion</title>
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
                        <i class="icon icon-cart fas fa-shopping-cart"></i>
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
			<section class = "registrarse">
				
				<h1 class="encabezado_box">Registrarse</h1>


				<?php 
					if(isset($usuario)){
						if($usuario == 0){
						 	echo "<p class='enlace'>Datos no validos</p>";
							session_destroy();
						}
						if($usuario == -1){
						 	echo "<p class='enlace'>Las contraseñas no coinciden</p>";
							session_destroy();
						}
						if($usuario == -2){
						 	echo "<p class='enlace'>El correo ya está registrado</p>";
							session_destroy();
						}
					}else{
						echo "<br> <br>";
					}
	 			?>

				<form  action="IniciodeSesion/RegistrarUsuario.php" method="POST">
					<input type="text" name="nombre" class="info" placeholder="Nombre">
					<input type="text" name="usuario" class="info" placeholder="Correo electrónico">
					<input type="password" name="contrasena" class="info" placeholder="Contraseña">
					<input type="password" name="contrasena2" class="info" placeholder="Confirmar contraseña">

					<br>

					<button class = "inicio" type="submit">
						Registrarse
					</button>
				</form>

				<p>Ya tienes una cuenta? <a class = "enlace" href="Login.html">Iniciar Sesión</a></p>
				


			</section>
		</center>
	</main>
</body>
</html>