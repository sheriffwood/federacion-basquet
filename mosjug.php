<?php 

	$conexion=mysqli_connect('localhost','root','','ssii');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="css/show.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<br>
	

	<header>
        <nav class="menu">
            <ul>
               
                <li><a href="mosjug.php">Jugadores</a></li>
                <li><a href="mostrarequipos.php">Equipos</a></li>
                <li><a href="resultados.php">Resultados</a></li>
                
            </ul>
        </nav>
    </header>
	

	<h1>Organizacion de Jugador</h1>
	<table border="1" >
		<tr>
			<td>Asociacion</td>
			<td>Nombre del Equipo</td>
			<td>Nombre y Apellido del Jugador</td>
			<td>Faltas</td>
			<td>Puntos del Partido</td>
			<td>Fechas</td>
			
			
				
		</tr>

		<?php 
		$sql="SELECT * from jugador";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['asociacion'] ?></td>
			<td><?php echo $mostrar['nombreequi'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['faltas'] ?></td>
			<td><?php echo $mostrar['punt'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>