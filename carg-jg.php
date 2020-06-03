<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="ssii";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");

 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 
 $aso=$_POST['aso'];

 $nombrepri=$_POST['nome'];

 $punpri=$_POST['nom'];

 $nombreseg=$_POST['falt'];

 $punseg=$_POST['punt'];

 $fecha=$_POST['fecha'];

 

 $sql="INSERT INTO jugador VALUES('$aso',
           '$nombrepri',
           '$punpri','$nombreseg','$punseg', '$fecha')";
 


 $ejecutar=mysqli_query($con,$sql);
 


 
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='cargar-resultados.html'>Volver</a>";
 }
?>