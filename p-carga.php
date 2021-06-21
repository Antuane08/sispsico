<?php 
include("conexion.php");
//necesito abrir temporalmente el archivo
$archivo=$_FILES["archivo"]["tmp_name"];
//metodo file para guardar cada registro de ese archivo  en una matriz
$fila=file($archivo);
for($i=0; $i <count($fila) ; $i++) { 
list($cod,$n,$ap,$am,$e,$cel)=explode(";",$fila[$i]);

$password=generapass();
$sqlalumno="insert into k_alumno values('$cod','$n','$ap','$am','$e','$cel')";
$sqlusuario="insert into k_usuario values('$cod','$password')";
mysql_query($sqlalumno,$cn);
mysql_query($sqlusuario,$cn);
}
function generapass(){
$plantilla="qwertyuiopasdfghjklzxcvbnm";
$plantilla2="0123456789";
$pass="";
	for ($i=0; $i <8 ; $i++)
	{ 
		if($i<=4)
			{	
			$pass=$pass.substr($plantilla,rand(1,26),1);
			}
		else{
			$pass=$pass.substr($plantilla2,rand(1,10),1);
		}
	}
return $pass;
}

 ?>