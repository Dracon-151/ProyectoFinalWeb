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

	<link rel="stylesheet" href="css/style.css">
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
	        <li><a href="EnviarComentarios.php">Contáctanos</a></li>
	        <li><a href="Carrito.php"><i class="icon icon-cart fas fa-shopping-cart"></i></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

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