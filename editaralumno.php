<?php
include("auth-admi.php");
include("conexion.php");
include("cabeceraadmin.php");

$valor=$_GET["valor"];
$sql2="select * from k_alumno where codalumno='$valor'";
$filas=mysql_query($sql2);
$r=mysql_fetch_array($filas);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<br>
<br>
<center>
	<div style="background-color: yellowgreen;width: 370px; height: 40px;                      
                padding: 3px 10px; border: yellowgreen 5px solid;
                border-radius: 20px; font-family: serif;" align="center">

	<h1 style=" color:black; margin:auto; ">Editar alumno</h1>
    </div>
</center>
<br>
<center>
<form action="editarf.php" method="POST">
<table style="width: 400px; height: 80px; background: linear-gradient(to top, #98FB98 20%, white);   
              padding: 3px 10px; border: yellowgreen 5px solid;border-radius: 20px;"  align="center">

	<input type="hidden" name="codalumno" value="<?php echo $valor; ?>">

	<tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
		<label for="nombre">NOMBRE:</label>
	  </td>
	  <td>
		<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
		              border-radius: 28px;padding: 3px 8px;" type="text" name="nombre"
		       required value="<?php echo $r["nombre"]; ?>">
	  </td>
    </tr>

	<tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
		<label for="apaterno">APELLIDO PATERNO:</label>
	  </td>
	  <td>
		<input style="background-color: lightgray;-webkit-border-radius: 28; -moz-border-radius: 28; 
		              border-radius: 28px;padding: 3px 8px;" type="text" name="apaterno" 
		       required value="<?php echo $r["apaterno"]; ?>">
	  </td>
    </tr>

	<tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td> 
	  	<label for="amaterno">APELLIDO MATERNO:</label>
	  </td>
	  <td> 
	  	<input style="background-color: lightgray;-webkit-border-radius: 28; -moz-border-radius: 28; 
	  	              border-radius: 28px;padding: 3px 8px;" type="text" name="amaterno"
	  	       required value="<?php echo $r["amaterno"]; ?>">
	  </td>
    </tr>

	<tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
	  	<label for="escuela">ESCUELA:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	  	              border-radius: 28px;padding: 3px 8px;" type="text" name="escuela" 
	  	       required value="<?php echo $r["escuela"]; ?>">
	  </td>
    </tr>

	<tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
	  	<label for="celular">CELULAR:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	  	              border-radius: 28px;padding: 3px 8px;" type="text" name="celular" 
	  	       required value="<?php echo $r["celular"]; ?>">
	  </td>
    </tr>
</table>
<br>
<br>
    <input type="submit" value="Actualizar" 
           style="background: #eb94d0; background-image: -webkit-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -moz-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -ms-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -o-linear-gradient(top, yellowgreen, #98FB98);
                background-image: linear-gradient(to bottom, yellowgreen, #98FB98);
                -webkit-border-radius: 28; -moz-border-radius: 28; border-radius: 28px;
                text-shadow: 3px 2px 1px #9daef5; -webkit-box-shadow: 6px 5px 24px black;
                -moz-box-shadow: 6px 5px 24px #666666; box-shadow: 6px 5px 24px #666666;
                font-family: Segoe UI; color: black; font-size: 100%; padding: 10px; text-decoration: none;
                font-weight: 900px;"> 
   
</form>
</center>
</body>
</html>