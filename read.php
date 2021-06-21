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

	<?php

	$busqueda = strtolower($_REQUEST['busqueda']);
	if(empty($busqueda))
	{
		header("location: resul_admin.php");

	} 


	?>

	<form action="read.php" class="form_search" method="get">
		<input type="text" name="busqueda" id="busqueda" placeholder="Buscar alumno..." value="<?php echo $busqueda; ?>" style="padding: 3px 8px; border: black 3px solid; border-radius: 10px;width: 150px; height: 25px;">
		<input type="submit" value="Buscar" class="btn_search" style="padding: 3px 8px; border: transparent 3px solid; font-size: 100%;
                      border-radius: 10px; width: 140px; height: 35px; ">
 	</form>
<br>
<br>
<br>
<br>
<center><table border="2" style="width: 1250px; height: 60px; background-color: white;padding: 3px 10px; 
                                 border: gray 5px ; border-radius: 20px;">
	<tr>
		<th style="font-family: Segoe UI; background-color: coral;"><b>CODIGO</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>NOMBRE</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>A. PATERNO</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>A. MATERNO</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>ESCUELA</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>DESCRIPCION1</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>DESCRIPCION2</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>ACTIVIDADES E INTERESES1</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>ACTIVIDADES E INTERESES2</b></th>
		<th style="font-family: Segoe UI; background-color: coral;"><b>COMBINACION</b></th>
	</tr>

	<?php

	$consulta1 = "select COUNT(*) as total_registro FROM k_alumno 
		                                 WHERE (codalumno LIKE '%$busqueda%'
		                                        OR nombre LIKE '%$busqueda%'
		                                        OR apaterno LIKE '%$busqueda%'
		                                        OR amaterno LIKE '%$busqueda%'
		                                        OR escuela LIKE '%$busqueda%')";

    $consulta2 = "select a.codalumno, a.nombre, a.apaterno, a.amaterno, a.escuela, r.descripcion1,r.descripcion2,  
                  r.intereses_actividades1, r.intereses_actividades2, r.combinacion_intereses
		                       FROM k_alumno a INNER JOIN k_resultado r ON a.codalumno=r.codalumno
		                       WHERE (a.codalumno LIKE '%$busqueda%' OR 
		                                 a.nombre LIKE '%$busqueda%' OR 
		                               a.apaterno LIKE '%$busqueda%' OR 
		                               a.amaterno LIKE '%$busqueda%' OR 
		                                a.escuela LIKE '%$busqueda%' OR
		                             r.descripcion1 LIKE '%$busqueda%' OR
		                             r.descripcion2 LIKE '%$busqueda%' OR
		                             r.intereses_actividades1 LIKE '%$busqueda%' OR
		                              r.intereses_actividades2 LIKE '%$busqueda%' OR
		                             r.combinacion_intereses LIKE '%$busqueda%')
		                       ";

    $registro = mysql_query($consulta1, $cn);
    $registro2 = mysql_query($consulta2, $cn);

    while ($row = mysql_fetch_array($registro2))
    	{
    		?>
    		<tr>
    			<td>
    				<?php

    				echo $row ['codalumno'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['nombre'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['apaterno'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['amaterno'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['escuela'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['descripcion1'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['descripcion2'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['intereses_actividades1'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['intereses_actividades2'];

    				 ?>
    			</td>
    			<td>
    				<?php

    				echo $row ['combinacion_intereses'];

    				 ?>
    			</td>
    		</tr>
    	 

<?php
}
?>
 

 <?php
	/*$sql_bus = mysqli_query($cn, "SELECT COUNT(*) as total_registro FROM k_alumno 
		                                 WHERE (codalumno LIKE '%$busqueda%'
		                                        OR nombre LIKE '%$busqueda%'
		                                        OR apaterno LIKE '%$busqueda%'
		                                        OR amaterno LIKE '%$busqueda%'
		                                        OR escuela LIKE '%$busqueda%')");
	$resul_regis = mysqli_fetch_array($sql_bus);
	$total_registro = $resul_regis['total_registro'];


	$query = mysqli_query($cn, "SELECT a.codalumno, a.nombre, a.apaterno, a.amaterno, a.escuela  
		                       FROM k_alumno a INNER JOIN k_resultado r ON r.descipcion, r.intereses_actividades, r.combinacion_intereses
		                       WHERE (a.codalumno LIKE '%$busqueda%' OR 
		                                 a.nombre LIKE '%$busqueda%' OR 
		                               a.apaterno LIKE '%$busqueda%' OR 
		                               a.amaterno LIKE '%$busqueda%' OR 
		                                a.escuela LIKE '%$busqueda%' OR
		                             r.descipcion LIKE '%$busqueda%' OR
		                             r.intereses_actividades LIKE '%$busqueda%' OR
		                             r.combinacion_intereses LIKE '%$busqueda%')
		                       ORDER BY a.codalumno ASC");*/

	
?>
</table></center>



</fieldset>
 
 </body>
 </html>