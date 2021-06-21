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
	<center><p>GRÁFICOS</p></center>
</header> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<form action="graficar.php" method="post" style="padding: 3px 8px; border: steelblue 3px solid; border-radius: 10px;
                           width: 450px; padding: 55px; background-color: steelblue;">

<center>
<div style="font-family: Montserrat-Medium; font-weight: bolder; font-size: 30px">		
 <a>Escoja la escuela profesional:</a></div>
    <br>
<br>
    <select name="lsthe" class="listbox" style="border-style: black; font-size: 100%; font-family: Segoe UI;
                                                padding: 3px 8px; border: gray 3px solid;
                                                border-radius: 10px; background-color: lightgray; ">

    <?php 

     include("conexion.php");
      $sql="select*from k_alumno GROUP BY escuela ";
     $fila=mysql_query($sql,$cn);
 

    while ( $r=mysql_fetch_array($fila)) {
    ?>
	
		<option value="<?php echo $r["escuela"]; ?>"><?php echo $r["escuela"]; ?>
	
<?php 
}
 ?>

<input type="submit" value="Ver grafico" class="listbox" 
       style= "padding: 3px 8px; border: gray 3px solid; font-size: 100%;
                      border-radius: 10px; width: 140px; height: 40px; background-color: black;color: white">
	</center>

</form>
</center>
 </body>
 </html>
