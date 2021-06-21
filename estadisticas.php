<?php
include("auth-admi.php");
include("conexion.php");
include("cabeceraadmin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilokuder5.css">
</head>
<body style="background-color: black;">

<header class="titulo" style="background-color: #708090; height: 120px; color:black; margin-top: 143px;">
	<center><br><br><p>Estadísticas del Test</p></center>
</header> 
<br>
<fieldset id="respuesta" style="background-color: black;">
<br>
<br>
<br>
<div class="inicio">
   <div style="top:300px; right: 930px; bottom: auto; position: fixed;height: 300px; width: 350px; box-sizing: content-box; border: 5px solid 	#708090;border-radius: 25px; background-size: cover; background-color: gainsboro;">
   	    <br>
		<br>
        <div class="imagen">
	       <a><center><img src="img/GRAFICO FOTO (1).jpg" width="45%" align="center" class="img"></center></a>
        </div>
        <br>
		<br>
	    <div class="titulo" >
		<a href="graficodona.php" style="font-family: Segoe UI; color: black; text-decoration:none;">
			<center><b>Cantidad de alumnos que realizaron la <br> evaluación  y quienes no.</b><center></a>
		</div>
	</div>
	    
	    <br>
	    
    <div style="top:300px; right: 510px; bottom: auto; position: fixed;height: 300px; width: 350px; box-sizing: content-box; border: 5px solid 	#708090;border-radius: 25px; background-size: cover; background-color: gainsboro;">
    	<br>
	    <div class="imagen">
			<a><center><img src="img/GRAFICO FOTO 2.png" width="47%" class="img"></center></a>
	    </div>
	    <br>
	    <div class="titulo">
		<a href="grafico.php" style="font-family: Segoe UI; color: black; text-decoration:none;">
			<center><b>Cantidad de alumnos por escuela que <br> realizaron la evaluación y quienes no.</b></center>
		</a>
	    </div>
    </div>

	<br>

	<div style="top:300px; right: 90px; bottom: auto; position: fixed;height: 300px; width: 350px; box-sizing: content-box; border: 5px solid 	#708090;border-radius: 25px;background-size: cover; background-color: gainsboro;">
		<br>
		<br>
		<br>
	    <div class="imagen">
			<a><center><img src="img/GRAFICO FOTO 3.jpg" width="59%" align="center" class="img"></center></a>
	    </div>
	    <br>
		<br>
	    <div class="titulo">
		<a href="grafico-descripcion.php" style="font-family: Segoe UI; color: black; text-decoration:none;">
			<center><b>Cantidad de alumnos por tipo de <br> resultados.</b></center></a>
	</div>
</div>
</fieldset>
</body>
</html>