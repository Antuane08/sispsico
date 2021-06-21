<meta charset="utf-8">
<?php 
include("conexion.php");
include("cabecera.php");
//include("auth.php");
//error_reporting(E_NOTICE);
$codigo=$_SESSION["usuario"];
$consulta="select * from k_test where codalumno='$codigo'";
$fila=mysql_query($consulta,$cn);
while ($r=mysql_fetch_array($fila)) {
	if($r["estado_test"]=="habilitado"){
       header('location:der.php');
   }
	else{
		 header('location:r-kuder.php');
	}
}
 ?>