<?php 
include("auth-admi.php");
include("conexion.php");

$codigo=$_POST["codigo"];
$n=$_POST["nombre"];
$ap=$_POST["apaterno"];
$am=$_POST["amaterno"];
$esc=$_POST["escuela"];
$cel=$_POST["celular"];
$con=$_POST["contrasena"];

$sqlalumno="insert into k_alumno values('$codigo','$n','$ap','$am','$esc','$cel')";
$sqlusuario="insert into k_usuario values('$codigo','$con')";
mysql_query($sqlalumno,$cn);
mysql_query($sqlusuario,$cn);


header('location:practicas.php');





 ?>