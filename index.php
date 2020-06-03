<?php 

	$conexion=mysqli_connect('localhost','root','','ssii');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="css/show.css">
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>Asociacion</td>
			<td>Numero de Equipo</td>
			<td>Nombre de Equipos</td>
				
		</tr>

		<?php 
		$sql="SELECT * from equipo";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['asociacion'] ?></td>
			<td><?php echo $mostrar['numero'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>