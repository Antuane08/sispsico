<?php 
    include("auth-admi.php");
    include("conexion.php");

$valor=$_GET["valor"];
$sql1="delete from k_usuario where codalumno='$valor'";
$sql="delete from k_alumno where codalumno='$valor'";
$sql2="delete from k_test where codalumno='$valor'";
$sql2="delete from k_resultado where codalumno='$valor'";
mysql_query($sql1,$cn);
mysql_query($sql,$cn);
mysql_query($sql2,$cn);

header('location:practicas.php');

 ?>