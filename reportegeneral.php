<?php 

include("auth-admi.php");
include("conexion.php");
include("cabeceraadmin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/estilokuder8.css">
</head>
<body  style="background-color: #BAE7FC;">

<header class="titulor"><center><p>REPORTE GENERAL</p></center></header> 

<center>
<br><br><br><br><br><br><br><br><br>
<fieldset id="leer" style="margin-top: 150px;">
<p>En esta sección ud. podrá visualizar los resultados de todos los test que realizó cada alumno. </p>

</fieldset>
</center>
<br>
<br>
<br>

<center>
<form action="alumnosxescuelas.php" method="post">

<table class="escuelas">
	<tr>
		
		<b><td align="center" style="background-color: lightyellow;">ESCUELA</td></b>

	</tr>

<?php 


$sql="select distinct escuela from  k_alumno ";

$fila=mysql_query($sql,$cn);

 
while ($r=mysql_fetch_array($fila)) {

?>
	
		<td><input type="submit" name="btnver" value= "<?php echo $r["escuela"];?>" class="btn" style=" color: white; cursor: pointer;"></td>
	</tr>

<?php 


}

?>

</table>
</form>

</center>
<br><br><br><br><br><br>

</body>
</html>