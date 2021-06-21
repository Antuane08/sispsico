
<?php 

include("conexion.php");
include("cabeceraadmin.php");
include("auth-admi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/estilokuder8.css">
</head>
<body >

<br><br><br><br><br><br><br><br>
<header class="titulo" style="background-color: #00BBBB; height: 140px; color:white;"><center><br><p>REPORTE GENERAL</p></center></header> 
<br><br><br><br><br><br><br><br><br><br>


<center>
	<table class="alumnos">
	<tr>
		<td bgcolor="black" style="height: 40px; color:white;"><strong>CÓDIGO</strong></td>
		<td bgcolor="black" style="height: 40px; color:white;"><strong>APELLIDO PATERNO</strong></td>
		<td bgcolor="black" style="height: 40px; color:white;"><strong>APELLIDO MATERNO</strong></td>
		<td bgcolor="black" style="height: 40px; color:white;"><strong>NOMBRE</strong></td>
		<td bgcolor="black" style="height: 40px; color:white;"><strong>ESCUELA</strong></td>
		<td bgcolor="black" style="height: 40px; color:white;"><strong>RESULTADOS</strong></td>
	</tr>
</center>
<?php 


if(isset($_POST["btnver"])){

$escuela=$_POST["btnver"];

$sql="select distinct a.codalumno, a.apaterno, a.amaterno, a.nombre, a.escuela, t.estado_test from k_alumno a, k_test t  where escuela='$escuela' and a.codalumno=t.codalumno and t.estado_test='inhabilitado' order by a.apaterno asc";
}

$fila=mysql_query($sql,$cn);

while ($r=mysql_fetch_array($fila)) {
	?>
	<tr>
		<td><?php echo  $r["codalumno"];?></td>
		<td><?php echo  $r["apaterno"];?></td>
		<td><?php echo  $r["amaterno"];?></td>
		<td><?php echo  $r["nombre"];?></td>
		<td><?php echo  $r["escuela"];?></td>
		<td><a target="_blank" href="pdfkuder.php?valor=<?php echo $r["codalumno"]; ?>"><img src="img/pdf.png" height="40px" width="40px"></a></td>
	</tr>
<?php 

}

 ?>




</body>
</html>
