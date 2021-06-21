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

<header class="titulo" style="background-color: steelblue; height: 120px; color:white;">
	<center><p>Habilitar alumno</p></center>
</header> 
<br>
<br>
<fieldset id="respuesta" style= "background-color: lightsteelblue; margin-top: 210px;">

	<?php

	$busqueda = strtolower($_REQUEST['busqueda']);
	if(empty($busqueda))
	{
		header("location: habil.php");
	} 

	?>

	<form action="p-habil.php" class="form_search" method="get">
		<input type="text" name="busqueda" id="busqueda" placeholder="Buscar alumno..." 
		       value="<?php echo $busqueda; ?>" style="padding: 3px 8px; border: black 3px solid; 
		                                               border-radius: 10px;width: 140px; height: 25px;">
		<input type="submit" value="Buscar" class="btn_search" 
		       style="padding: 3px 8px; border: transparent 3px solid; font-size: 100%;
                      border-radius: 10px; width: 140px; height: 35px;">
 	</form>
<br>
<br>
<br>
<br>
<center>
	<table border="2" style="width: 1000px; height: 40px; padding: 3px 10px; border: gray 5px; border-radius: 20px;background-color: white ">
	<tr style=" ">
		<th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">CODIGO</th>
		<th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">NOMBRE</th>
		<th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">A. PATERNO</th>
		<th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">A. MATERNO</th>
        <th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">ESCUELA</th>
		<th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">ESTADO DE TEST</th>
        <th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">FECHA</th>
		<th style="font-family: Segoe UI;height: 50px; background: linear-gradient(to top, #3cf 20%, white);">HABILITAR</th>
	</tr>

	<?php

	$consulta1 = "select COUNT(*) as total_registro FROM k_alumno 
		                                 WHERE (codalumno LIKE '%$busqueda%'
		                                        OR nombre LIKE '%$busqueda%'
		                                        OR apaterno LIKE '%$busqueda%'
		                                        OR amaterno LIKE '%$busqueda%'
		                                        OR escuela LIKE '%$busqueda%')";

    $consulta2 = "select a.codalumno, a.nombre, a.apaterno, a.amaterno, a.escuela, t.estado_test, t.fecha
		        FROM k_alumno a LEFT JOIN k_test t ON a.codalumno=t.codalumno
		                       WHERE (a.codalumno LIKE '%$busqueda%' OR
		                                 a.nombre LIKE '%$busqueda%' OR 
		                               a.apaterno LIKE '%$busqueda%' OR 
		                               a.amaterno LIKE '%$busqueda%' OR 
		                                a.escuela LIKE '%$busqueda%' 
		                                  ) AND t.estado_test='inhabilitado'
		                                  ORDER BY t.fecha desc
		                                  LIMIT 1
		                       ";

    $registro = mysql_query($consulta1, $cn);
    $registro2 = mysql_query($consulta2, $cn);

     while ($fila = mysql_fetch_array($registro2))
    	{
    		?>
    		<tr align="center">
    			<td><?php echo $fila ['codalumno']; ?></td>
    			<td><?php echo $fila ['nombre'];   ?></td>
    			<td><?php echo $fila ['apaterno']; ?></td>
    			<td><?php echo $fila ['amaterno']; ?></td>
                <td><?php echo $fila ['escuela']; ?></td>
    			<td><?php echo $fila ['estado_test']; ?></td>
                <td><?php echo $fila ['fecha']; ?></td>
    			<td><a href="p-habilitar.php?valor=<?php echo $fila["codalumno"];?>" target="_parent"><img src="img/Hab.jpg" alt="" height="40px" width="40px"></a><td>
    		</tr>    	 
<?php
}
?>		        

</table>
</center>
</fieldset>
 </body>
 </html>