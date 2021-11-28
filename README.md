# ProyectoFinalWeb
Equipo - Alvarado Palacios, Sepúlveda Ibarra, Gonzalez Vega

/*
Desarrollar una plataforma e-commerce que permita a los usuarios registrarse, iniciar sesión, navegar por la plataforma, agregar productos al carrito de compras y realizar la compra de productos.
*/ /*
Requerimientos
Plataforma e-commerce funcional y navegable.
Acceso para los siguientes usuarios:
Usuarios sin identificar
Usuarios registrados en la plataforma
Se contará con al menos 7 funcionalidades dentro de la plataforma:
Página de inicio
Página de productos
Página del carrito de compras
Inicio de sesión
Registro de cuenta de usuario
Página detalles de compras.
Página principal: Página de inicio la cual contiene las siguientes secciones: 
menú
banner, 
Inicio de sesión(en caso que el usuario no haya iniciado sesión)
Cerrar sesión(en caso que el usuario inició sesión)
Otros(queda a criterio del estudiante si desea agregar más cosas)
Página de productos: Contiene un listado de productos que se ofrecen, se pueden dividir en categorías(solo si aplica). Los productos deben contener una imagen, un nombre, un precio. Se pueden agregar otros elementos (opcionales) como: descripción de producto, calificación, etc.
Página carrito de compras: El carrito de compras es una cesta virtual del negocio, aquí se agregan los productos que el usuario selecciona para comprar. En esta vista se muestran los productos que el usuario envía al carrito de compras. Se debe contar con un botón para realizar la compra de los productos. Una vez que los productos sean comprados, estos desaparecen del producto y son guardados en base de datos. Cada producto listado en el carrito de compras puede ser eliminado, esto mediante una opción de eliminar.
Inicio de sesión: Presenta un formulario con el cual los usuarios registrados pueden iniciar sesión. Los campos requeridos son:
Email
Contraseña
Registro de cuenta de usuario: Se muestra un formulario de registro para que el usuario pueda crear una cuenta. Los campos requeridos son:
Nombre
Primer apellido
Segundo apellido
Email
Contraseña
Repetir Contraseña
Cerrar sesión: En caso de contar con una sesión activa se muestra esta opción. Al presionar cerrar sesión el usuario es redirigido a la página de inicio, además que la sesión del usuario es eliminada.
Detalles de compra: Se debe mostrar una página con los detalles de las compras ordenadas por fecha de compra, de forma descendente.
*/ /*
Restricciones
La opción de iniciar sesión solo se mostrará si aun el usuario no inicia sesión
En caso de que se cuente con una sesión válida por parte del usuario, se mostrará la opción de cerrar sesión.
El email del usuario en el formulario de registro de cuenta, deberá de almacenarse como único en la base de datos.
Los productos del usuario se deberán mantener en el carrito de compras mientras el usuario no cierre la sesión(en caso que el usuario cambie de página deberá mantener los productos en el carrito de compra).
Las compras realizadas por el usuario serán almacenadas en base de datos. Se debe considerar guardar la fecha de la compra.
La página deberá ser responsiva.
*/ /*
Ponderación
Página de inicio: 10%
Página de productos: 15%
Inicio de sesión: 15%
Registro de cuenta de usuario: 15%
Carrito de compras: 20%
Detalles de compras: 20%
Cerrar sesión: 5%
*/ /*
Entregables
El enlace al código fuente de la plataforma e-commerce dentro de una plataforma de desarrollo colaborativo (Github, Gitlab, etc). 
Fecha de entrega
07/Diciembre/2021
*/