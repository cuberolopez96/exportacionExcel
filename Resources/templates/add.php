
<?php 
	if (isset($_POST['add'])) {
		$bandera= true;
		if (!isset($_POST['nombre'])) {
			$bandera = false;
		}
		if(!isset($_POST['fechasalida'])){
			$bandera=false;
		}
		if(!isset($_POST['empresa'])){
			echo "hola";
			$bandera=false;
		}
		if(!isset($_POST['descripcion'])){
			echo "hola";
			$bandera=false;
		}
		if (!isset($_POST['plataforma'])) {

			$bandera = false;
		}
		if ($bandera == true) {
			$videojuego = new Videojuegos($_POST['nombre'],$_POST['fechasalida'],$_POST['descripcion'],$_POST['empresa'],$_POST['plataforma']);
			header("Location: index.php");
		}
	}
 ?>
<div>
	<header>
		<h3>Registro de Juegos</h3>
	</header>
	<div>
		<form action="index.php?page=add" method="post">
			<label for="">Nombre</label>
			<input type="text" name="nombre">
			<label for="">Fecha salida</label>
			<input type="date" name="fechasalida">
			<label for="">Empresa</label>
			<input type="text" name="empresa">
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion">
			<label for="">Plataforma</label>
			<input type="text" name="plataforma">
			<input type="submit" name="add" class="btn" value="add">

		</form>
	</div>
</div>