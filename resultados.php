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

	
	<header>
        <nav class="menu">
            <ul>
               
                <li><a href="mosjug.php">Jugadores</a></li>
                <li><a href="mostrarequipos.php">Equipos</a></li>
                <li><a href="resultados.php">Resultados</a></li>
                
            </ul>
        </nav>
    </header>
	<h1>Resultados de Equipos</h1>
	<table border="1" >
		<tr>
			<td>Asociacion</td>
			<td>Nombre de Primer Equipo</td>
			<td>Resultado de Primer Equipo</td>
			<td>Nombre de Segundo Equipo</td>
			<td>Resultado de Segundo Equipo</td>
			<td>Fecha</td>
				
		</tr>

		<?php 
		$sql="SELECT * from resultados";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['asociacion'] ?></td>
			<td><?php echo $mostrar['nombrepri'] ?></td>
			<td><?php echo $mostrar['resultadopri'] ?></td>
			<td><?php echo $mostrar['nombreseg'] ?></td>
			<td><?php echo $mostrar['resultadoseg'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>