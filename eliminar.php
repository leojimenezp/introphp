<?php
include ("conexion.php");

$id=$_REQUEST['id'];

$con=conectar();
$sql="delete from habitaciones where id='$id'";
$result=mysqli_query($con,$sql);

header("Location:habitaciones.php");


 ?>
