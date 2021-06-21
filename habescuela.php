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

<header class="titulo" style="background-color: #00BBBB; height: 120px; color:white;">
	<center><p>HABILITAR POR ESCUELA</p></center>
</header> 

<?php

if (isset($_POST ["lsthe"]))
{
	$escuela=$_POST ["lsthe"];

	$Escuela;
    for ($i=0;$i<count($escuela);$i++){     
    $Escuela = $escuela;[$i];
    }

	$sql1 = "select * from k_alumno where escuela = '$Escuela'";

	$fila = mysql_query($sql1);

	$codiad1 = $_SESSION["usuarios"];

	while ($row = mysql_fetch_array($fila)) {

		$codalumno = $row ["codalumno"];

		$sql = "insert into k_test(codalumno, estado_test, codadmin) values('$codalumno','habilitado',
		       '$codiad1')";

		if (!mysql_query($sql,$cn)) {
            echo "Error: ".mysql_error($cn);
                
            }
	} 
}

?>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br>
<center>
<form method="post" style="padding: 3px 8px; border: #00BBBB 3px solid; border-radius: 10px;
                           width: 500px; padding: 60px; background-color: #00BBBB;" >

  <center>
    <h1 >Elija escuela profesional:<h1>
    <br>
    <select name="lsthe" class="listbox" style="border-style: black; font-size: 50%; font-family: Segoe UI;
                                                padding: 3px 8px; border: gray 3px solid;
                                                border-radius: 10px; background-color: lightgray; " >

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
<br>
<input type="submit" value="Enviar" class="listbox" 
       style="background-color: #006699; color:white; padding: 3px 8px; border: black 3px solid; 
              border-radius: 10px; font-weight: 80%; width: 90px; height: 35px; font-size: 50%;">

</center>

</form>
</center>
 </body>
 </html>
