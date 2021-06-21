<?php
include("conexion.php");
include("cabecera.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilokuder7.css">
</head>
<body>
<?php 
$codigo=$_SESSION["usuario"];
$sql="select * from k_alumno where codalumno='$codigo'";
$fila=mysql_query($sql);
$r=mysql_fetch_array($fila);
 ?>

<header class="titulo" style="background-color:lightsteelblue; height: 75px;  margin-top: 143px;padding-top: 33px; color:white;">
	<center><p>Datos personales</p></center>
</header> 
<br>
<center>
<table align="center" style="margin-top: 265px; margin-bottom: 30px;">
	<tr>
		<td><b>CÓDIGO</b></td>
		<td class="xd"><?php echo $r["codalumno"]; ?></td>
	</tr>
	<tr>
		<td><b>NOMBRE</b></td>
		<td class="xd"><?php echo $r["nombre"]; ?></td>
	</tr>
	<tr>
		<td><b>AP. PATERNO</b></td>
		<td class="xd"><?php echo $r["apaterno"]; ?></td>
	</tr>
	<tr>
		<td><b>AP. MATERNO</b></td>
		<td class="xd"><?php echo $r["amaterno"]; ?></td>
	</tr>
	<tr>
		<td><b>ESCUELA</b></td>
		<td class="xd"><?php echo $r["escuela"]; ?></td>
	</tr>
	<tr>
		<td><b>CELULAR</b></td>
		<td class="xd"><?php echo $r["celular"]; ?></td>
	</tr>

</table>
</center>
</body>
</html>