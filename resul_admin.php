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
 	<link rel="stylesheet" type="text/css" href="css/estilokuder6.css">
 </head>
 <body style="background-color: moccasin;">

<header class="titulo">
	<center><p>RESULTADOS TEST DE KUDER</p></center>
</header> 
<br>
<fieldset id="respuesta" style="background-color: moccasin; margin-top: 240px;">

	<form action="read.php" class="form_search" method="get">
		<input type="text" name="busqueda" id="busqueda" placeholder="Buscar alumno..."
		       style="padding: 3px 8px; border: black 3px solid; border-radius: 10px;width: 150px; height: 25px;">
		<input type="submit" value="Buscar" class="btn_search"
		       style="padding: 3px 8px; border: transparent 3px solid; font-size: 100%;
                      border-radius: 10px; width: 140px; height: 35px; ">
 	</form>
<br>
<br>
<br>
<br>
<center><table border="2" style="width: 1200px; height: 55px; background-color: coral;padding: 3px 10px; 
                                 border: white 5px ; border-radius: 20px; ">
	<tr>
		<th style="font-family: Segoe UI"><b>CODIGO</b></th>
		<th style="font-family: Segoe UI"><b>NOMBRE</b></th>
		<th style="font-family: Segoe UI"><b>A. PATERNO</b></th>
		<th style="font-family: Segoe UI"><b>A. MATERNO</b></th>
		<th style="font-family: Segoe UI"><b>ESCUELA</b></th>
		<th style="font-family: Segoe UI"><b>DESCRIPCION1</b></th>
		<th style="font-family: Segoe UI"><b>DESCRIPCION2</b></th>
		<th style="font-family: Segoe UI"><b>ACTIVIDADES E INTERESES1</b></th>
		<th style="font-family: Segoe UI"><b>ACTIVIDADES E INTERESES2</b></th>
		<th style="font-family: Segoe UI"><b>COMBINACION</b></th>
	</tr>

</table></center>



</fieldset>
 
 </body>
 </html> 