<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset ="UTF-8">
	<title>Estim</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
					<a href = "Login.php" class = "login">
				    Iniciar sesión</a>
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
	<main class="container">

		<h2 class="encabezado_seccion">Enviar comentarios</h2>
		<center>
			<section class = "enviar_comentarios">
				<br>
				<h3 class="campo_box">Nombre    completo: </h3>
				<input type="text" class="info">
				<br>
				<h3 class="campo_box">Correo electrónico: </h3>
				<input type="text" class="info">
				<h3 class="campo_box">Comentarios: </h3>
				
				<center>
					<textarea class="info_comentarios"></textarea>
					<div class = "inicio">
					<a href="Index.html" class="enlace_btn">Enviar</a>					
					</div>	
				</center>

			</section>
		</center>
	</main>
</body>
</html>