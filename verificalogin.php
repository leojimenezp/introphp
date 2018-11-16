<?php
include ("conexion.php");

$usuario=$_POST['usua'];
$contrasena=$_POST['contra'];

$con=conectar();
$ladama="SELECT * FROM usuarios WHERE USER='$usuario' AND pass='$contrasena'";
$result=mysqli_query($con,$ladama);

if($file=mysqli_fetch_array($result)){
  header("Location:home.php");
}else{
  echo "sumerce no existe!!";
}




 ?>
