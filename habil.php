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
 <body style="background-color: lightsteelblue;">
<br>
 <header class="titulo" style="background-color: #00BBBB; height: 120px; color:white; margin-top: 126px;">
	<center><p>HABILITAR TEST POR ALUMNO</p></center>
</header> 
<br>
<fieldset id="respuesta" style="background-color: lightsteelblue; margin-top: 210px;">

	<form action="p-habil.php" class="form_search" method="get" style="">
		<input type="text" name="busqueda" id="busqueda" placeholder="Buscar alumno..." 
		       style="padding: 3px 8px; border: black 3px solid; border-radius: 10px;width: 140px; height: 30px;">
		<input type="submit" value="Buscar" class="btn_search" 
		       style="padding: 3px 8px; border: transparent 3px solid; font-size: 100%;
                      border-radius: 10px; width: 140px; height: 40px; ">
 	</form>
<br>
<br>
<br>
<br>
<center><table border="2" style=" width: 1000px; height: 40px; background: linear-gradient(to top, #3cf 20%, white);                              padding: 3px 10px; border: gray 5px double; border-radius: 20px; height: 60px;">
	<tr>
        <th style="font-family: Segoe UI; font-size: 100%; font-weight: 800px">CODIGO</th>
		<th style="font-family: Segoe UI">NOMBRE</th>
		<th style="font-family: Segoe UI">A. PATERNO</th>
		<th style="font-family: Segoe UI">A. MATERNO</th>
        <th style="font-family: Segoe UI">ESCUELA</th>
		<th style="font-family: Segoe UI">ESTADO DE TEST</th>
        <th style="font-family: Segoe UI">FECHA</th>
		<th style="font-family: Segoe UI">HABILITAR</th>
	</tr>

</table></center>



</fieldset>
 
 </body>
 </html> 