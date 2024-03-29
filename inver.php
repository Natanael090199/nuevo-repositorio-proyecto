<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/custom.css">

</head>
<body>
	    <header>
				<nav>
					<ul>
						<li><a href="logout.php">Cerrar Sesión</a></li>
						<li><a href="">Perfíl</a></li>
						<li><a href="menu.html">Inicio</a></li>
						<li><a href="biblioteca.php">Biblioteca</a></li>
						<li><a href="ayuda.html">Ayuda</a></li>
					</ul>
					
				</nav>
			</header>
	
	<div class="contenedor">
		<header>
			<form action="">
				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
			</form>
			<div class="categorias" id="categorias">
				<a href="#" class="activo">Todos</a>
				<a href="#">Energias Renovables</a>
				<a href="#">Ropas</a>
				<a href="#">Panaderias</a>
				<a href="#">Restaurantes</a>
			</div>
		</header>

		<section class="grid" id="grid">
			<div class="item" 
				 data-categoria="Panaderias"
				 data-etiquetas="pan panaderias miga"
				 data-descripcion="1.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/panaderia1.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="Panaderias"
				 data-etiquetas="pan panaderias"
				 data-descripcion="2.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/panadería2.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="Ropas"
				 data-etiquetas="ropa"
				 data-descripcion="3.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/ropa.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="Restaurantes"
				 data-etiquetas="restaurantes"
				 data-descripcion="4.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/resto1.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="Restaurantes"
				 data-etiquetas="restaurantes"
				 data-descripcion="5.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/resto2.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="Ropas"
				 data-etiquetas="ropas"
				 data-descripcion="6.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/ropas.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="Restaurantes"
				 data-etiquetas="restaurantes"
				 data-descripcion="7.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/resto3.jpg" alt="">
				</div>
			</div>

			<div class="item" 
				 data-categoria="Energias Renovables"
				 data-etiquetas="solar energia renovable"
				 data-descripcion="8.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="img/solar.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="Energias Renovables"
				 data-etiquetas="energia renovable eolica"
				 data-descripcion="9.- Lorem ipsum dolor sit amet consectetur.
				 	"
			>
				<div class="item-contenido">
					<img src="img/eolica.jpg" alt="">
				</div>
			</div>
		</section>

		<section class="overlay" id="overlay">
			<div class="contenedor-img">
				<button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
				<img src="" alt="">
			</div>
			<p class="descripcion"></p>
		</section>


	</div>

	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
	<script src="main.js"></script>
</body>
</html>