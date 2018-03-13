<?php
  $server="localhost";
  $user="root";
  $pass="";
  $bd="bibloteca";

  $conexion = mysqli_connect($server,$user,$pass,$bd) or die ("Error de conexion a base de datos. Por favor reintentelo");
?>
