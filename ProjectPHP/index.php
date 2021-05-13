<?php
	include("dll/config.php");
	include("includes/header.php");
?>
	<main class="galeria">
				<h2>Galeria</h2>
			
		<form method="post" action="procesar.php">
			<input type="text" name="nombre" placeholder="Ingrese su nombre"><br>
			<input type="text" name="apellido" placeholder="Ingrese su apellido" required=""><br>
			<input type="number" name="edad" placeholder="Ingrese su edad"><br>
			<input type="email" name="correo" placeholder="Ingrese su correo" required=""><br>
			<input type="submit" name="guardar"><br>
		</form>
	</main>
	<section class="planta1">Planta 1</section>
	<section class="animales">
		<article class="animal1">
			Animal 1
		</article>
	</section>
	<section class="animales">
		<article class="animal2">
			Animal 2
		</article>
	</section>
<?php
	include("includes/footer.php");
?>