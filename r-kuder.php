<?php
include("conexion.php");
include("cabecera.php");
$codigo=$_SESSION["usuario"];

$sql="select * from k_resultado where codalumno='$codigo' ORDER BY idresultado desc LIMIT 1"; 
$fila=mysql_query($sql);
$r=mysql_fetch_array($fila);

if ($r["recomendacion"]=='Realizar un test de inteligencia multiple') {
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilokuder6.css">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<header class="titulo" style="background-color: grey; height: 120px; color:white;">
	<center><br><br><p>RESULTADOS TEST DE KUDER</p></center>
</header> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="1"><center>
	<tr>
		<td style="background-color:white;"><?php echo $r["recomendacion"]; ?></td>
	</tr>
</center></table>
</center>


<?php 
}

else if ($r["recomendacion"]=='El test cumple' && $r["combinacion_intereses"]=="") {

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilokuder6.css">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<header class="titulo" style="background-color: grey; height: 120px; color:white;">
	<center><br><br><p>RESULTADOS TEST DE KUDER</p></center>
</header> 

<fieldset id="respuesta">
<p id="sub-title" align="justify" style="height: 60px"><b>¡Felicidades has terminado tu test de orientación vocacional!. Revisa las estadísticas para ver cuales son tus mayores intereses.</b></p>


<br>
<br>
<p>A continuación podrás encontrar áreas ocupacionales relacionadas a tus mayores intereses:</p>
<br>
<p><center><b>CUADRO N°1</b></center></p>
<p><center><b>CAMPOS DE INTERESES Y ÁREAS OCUPACIONALES</b></center></p>
<br>
<center>
<form></form>	
<table border="1"><center>
	<tr>
		<td style="background-color:white;"><?php echo $r["intereses_actividades1"]; ?></td>
		<td style="background-color:white;"><?php echo $r["intereses_actividades2"]; ?></td>
	</tr>
</center></table>
</center>

<?php 

} 

else if ($r["recomendacion"]=='El test cumple') {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilokuder6.css">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<header class="titulo" style="background-color: grey; height: 120px; color:white;">
	<center><br><br><p>RESULTADOS TEST DE KUDER</p></center>
</header> 

<fieldset id="respuesta">
<p id="sub-title" align="justify" style="height: 60px"><b>¡Felicidades has terminado tu test de orientación vocacional!. Revisa las estadísticas para ver cuales son tus mayores intereses.</b></p>


<br>
<br>
<p>A continuación podrás encontrar áreas ocupacionales relacionadas a tus mayores intereses:</p>
<br>
<p><center><b>CUADRO N°1</b></center></p>
<p><center><b>CAMPOS DE INTERESES Y ÁREAS OCUPACIONALES</b></center></p>
<br>
<center>
<form></form>	
<table border="1"><center>
	<tr>
		<td style="background-color:white;"><?php echo $r["intereses_actividades1"]; ?></td>
		<td style="background-color:white;"><?php echo $r["intereses_actividades2"]; ?></td>
	</tr>
</center></table>
</center>
<br>
<br>
<p>También puedes visualizar las carreras relacionadas a la combinación de tus mayores intereses:</p>
<br>
<p><center><b>CUADRO N°2</b></center></p>
<p><center><b>COMBINACIONES DE CAMPOS DE INTERÉS</b></center></p>
<br>
<center>
<form>
<table border="1" ><center>
    <tr>
		<td style="background-color:white;"><?php echo $r["combinacion_intereses"]; ?></td>
	</tr>
</center></table>
</center>
</fieldset>

</body>
</html>

<?php 

} 
?>

