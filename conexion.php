<?php

function conectar(){
  $user="root";
  $pass="";
  $server="localhost";
  $db="trivago";

  $con= mysqli_connect($server,$user,$pass) or die ("error".mysql_error());
  mysqli_select_db($con,$db);

  return $con;
}

 ?>
