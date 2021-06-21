<?php 
    include("auth-admi.php");
    include("conexion.php");
	$codalumno=$_POST["codalumno"];
	$nombre=$_POST["nombre"];
	$apaterno=$_POST["apaterno"];
	$amaterno=$_POST["amaterno"];
	$escuela=$_POST["escuela"];
	$celular=$_POST["celular"];

$sql= "update k_alumno set nombre='$nombre' , apaterno='$apaterno'   , amaterno='$amaterno' , escuela='$escuela', celular=$celular where codalumno='$codalumno'";

mysql_query($sql,$cn);
header('location:practicas.php');


 ?>