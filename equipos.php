<?php
 
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="ssii";

 
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");

 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 
 $aso=$_POST['aso'];

 $cant=$_POST['num'];

 $nom=$_POST['nom'];

 
 $sql="INSERT INTO equipo VALUES('$aso',
           '$cant',
           '$nom')";
 


 $ejecutar=mysqli_query($con,$sql);


 if(!$ejecutar){

  echo"Hubo Algun Error";
  
 }else{

  echo"Datos Guardados Correctamente<br><a href='equipos-admin.html'>Volver</a>";
 }


?>