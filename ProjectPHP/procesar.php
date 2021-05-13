
<?php
	include("dll/config.php");
	include("includes/header.php");
?>
<main class="galeria">
	<h2>Galeria</h2>
	<?php
		extract($_POST);
		echo $nombre. "<br>";
		echo $apellido. "<br>";
		echo $edad. "<br>";
		echo $correo. "<br>";
		if ($edad>17) {
			echo "Ud es mayor de edad";
		}
		else{
			echo "Ud es menor de edad";
		}
	?>	
		
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