<?php 
$videojuegos = Videojuegos::getVideojuegos();
$vvideojuegos = array_reverse($videojuegos);
 ?>
<div>
	<header>
		<h3>main</h3>
		<a href="" class="right">
			<i class="fa fa-plus "></i>
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
				<td> <?php echo $videojuego['id'] ?> </td>
				<td> <?php echo $videojuego['nombre'] ?> </td>
				<td> <?php echo $videojuego['fechasalida']; ?> </td>
				<td> <?php echo $videojuego['empresa'] ?> </td>
				<td> <?php echo $videojuego['descripcion']; ?> </td>
				<td> <?php echo $videojuego['plataforma']; ?> </td>
			<?php endforeach ?>
		</table>
	</div>
</div>