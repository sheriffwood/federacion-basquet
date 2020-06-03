<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="ssii";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $user2=$_POST['user2'];
 $pass2=$_POST['pass2'];
 $email=$_POST['email'];
 $tel = $_POST['tel'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO inicio VALUES('$user2',
           '$pass2',
           '$email','$tel')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='login.html'>Volver</a>";
 }
?>