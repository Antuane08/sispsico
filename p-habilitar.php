<?php 
include("conexion.php");
include("cabeceraadmin.php");
include("auth-admi.php");
$codigoad=$_SESSION["usuarios"];
$valor=$_GET["valor"];

$sql="insert into k_test(codalumno, estado_test, codadmin) values('$valor','habilitado','$codigoad')";
mysql_query($sql,$cn);

 ?>
 <!DOCTYPE html>
     <html>
     <head>
 	 <title></title>
 	 <meta charset="utf-8">
     </head>
     <body style="background-color: black">
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
        <center><fieldset style="background-color: wheat; width: 400px; height: 104px; 
                          padding-top: 40px; border-radius: 30px; border-style: none; 
                          box-shadow: 0px 3px 3px; font-family: Arial; ">	
        <h1><center>Se habilito al estudiante</center></h1>
</fieldset></center>
 </body>
 </html>

