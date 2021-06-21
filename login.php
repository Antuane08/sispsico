<meta charset="utf-8">
<?php 
//iniciar una sesion
session_start();

include("conexion.php");
$usu=$_POST["txtusu"];
$pass=$_POST["txtpass"];

 
$sql="select * from k_usuario where codalumno='$usu' and password='$pass'";
$consulta="select*from k_administrador a where codadmin='$usu' and pasadmi='$pass'";

$fila=mysql_query($sql,$cn);
$r=mysql_fetch_array($fila);
$valor=$r["codalumno"];

$filas=mysql_query($consulta,$cn);
$f=mysql_fetch_array($filas);
$valor1=$f["codadmin"];


if ($valor==null) {
	if ($valor1==null) {
      header('location:index.php');
    }  
    else{

      $_SESSION["usuarios"]=$valor1;
      $_SESSION["auth-admi"]=2;
      header('location:cabeceraadmin.php');
    }
}
else{
      $_SESSION["usuario"]=$valor;
      $_SESSION["auth"]=1;
      header('location:principalalum.php');
}

 ?>

