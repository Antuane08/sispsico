<meta charset="utf-8">
<?php 
include("conexion.php");
//include("cabecera.php");
include("auth.php");
$codigo=$_SESSION["usuario"];
$consulta="select* from k_test where codalumno='$codigo'";
$fila=mysql_query($consulta,$cn);
date_default_timezone_set("America/Lima");
$fecha = date("Y-m-d h:i:sa");
while ($r=mysql_fetch_array($fila)) {
	if($r["estado_test"]=="habilitado"){
		$sql="Update k_test set fecha='$fecha'";
		header('location: f-kuder.php');
	}
	else{
		header('location: des-kuder.php');   
	}
    
}
 ?>