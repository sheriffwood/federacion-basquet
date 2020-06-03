<?php 

	$conexion=mysqli_connect('localhost','root','','ssii');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="css/show.css">
	<link rel="stylesheet" type="text/css" href="css/2.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<br>
	

	<header>
        <nav class="menu">
            <ul>
                
                
                <li><a href="resultados.php">Resultados</a></li>
                <li><a href="mostrarequipos.php">Equipos</a></li>
                <li><a href="mosjug.php">Jugador</a></li>
                
            </ul>
        </nav>
    </header>

	<h1>Organizacion de los Equipos</h1>

	<table border="1" >
		<tr>
			<td>Asociacion</td>
			<td>Numero del Equipo</td>
			<td>Nombre del Equipo</td>
			
			
				
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