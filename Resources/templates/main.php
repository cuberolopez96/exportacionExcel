<?php 
$videojuegos = Videojuegos::getVideojuegos();
$vvideojuegos = array_reverse($videojuegos);
 ?>
<div>
	<header>
		<h3>main</h3>
		<a href="index.php?page=add" class="right">
			<i class="fa fa-plus "></i>
		</a>
		<a href="index.php?page=download" class="right">
			<i class="fa fa-download "></i>
		</a>
	</header>
	<div>
		<table>
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>fechasalida</th>
				<th>empresa</th>
				<th>descripcion</th>
				<th>plataforma</th>
			</tr>
			<?php foreach ($vvideojuegos as $key => $videojuego): ?>
				<tr>
					<td> <?php echo $videojuego['id'] ?> </td>
				<td> <?php echo $videojuego['nombre'] ?> </td>
				<td> <?php echo $videojuego['fechasalida']; ?> </td>
				<td> <?php echo $videojuego['empresa'] ?> </td>
				<td> <?php echo $videojuego['descripcion']; ?> </td>
				<td> <?php echo $videojuego['plataforma']; ?> </td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>