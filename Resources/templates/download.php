<?php 
	$videojuegos = Videojuegos::getVideojuegos();
	$evideojuegos = array_reverse($videojuegos);
	
	header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=videojuegos.xls");
header("Pragma: no-cache");
header("Expires: 0");
 ?>
 <table>
 	<tr>
 		<th>Id</th>
 		<th>Nombre</th>
 		<th>Fecha Salida</th>
 		<th>Empresa</th>
 		<th>Descripción</th>
 		<th>Plataforma</th>
 	</tr>
 	<?php foreach ($evideojuegos as $key => $videojuego): ?>
 		<tr>
 			<td><?php echo $videojuego['id'] ?></td>
 			<td><?php echo $videojuego['nombre']; ?></td>
 			<td><?php echo $videojuego['fechasalida'];?></td>
 			<td><?php echo $videojuego['empresa']; ?></td>
 			<td><?php echo $videojuego['descripcion']?></td>
 			<td><?php echo $videojuego['plataforma']; ?></td>


 		</tr>
 	<?php endforeach ?>

 </table>