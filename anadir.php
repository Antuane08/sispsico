<?php 

include("auth-admi.php");
include("conexion.php");
include("cabeceraadmin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>
<center>
	<div style="background-color: yellowgreen;width: 340px; height: 40px;                      
                padding: 2px 8px; border: yellowgreen 5px solid;
                border-radius: 20px; font-family: Segoe UI; font-size: 15px;" align="left">

	<h1 style=" color:black; margin:auto;">Añada al alumno:</h1>
    </div>
</center>
<br>
<center>
<form action="an.php" method="POST">
	<table style="width: 400px; height: 80px; background: linear-gradient(to top, #98FB98 20%, white);   
              padding: 3px 10px; border: yellowgreen 5px solid;border-radius: 20px;"  align="center">

    <tr style="width: 200px; height: 40px;font-family: Montserrat-Medium; ">
	  <td>
	  	<label >CODIGO:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	                  border-radius: 28px;padding: 3px 8px;" type="text" name="codigo" required>
	  </td>
    </tr>

    <tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
	  	<label >NOMBRE:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	                  border-radius: 28px;padding: 3px 8px;" type="text" name="nombre" required>
	  </td>
    </tr>
    
    <tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
	  	<label >APELLIDO PATERNO:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	                  border-radius: 28px;padding: 3px 8px;" type="text" name="apaterno" required>
	  </td>
    </tr>
    
    <tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
	  	<label >APELLIDO MATERNO:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	                  border-radius: 28px;padding: 3px 8px;" type="text" name="amaterno" required>
	  </td>
    </tr>
    
    <tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
	  	<label >ESCUELA:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	                  border-radius: 28px;padding: 3px 8px;" type="text" name="escuela" required>
	  </td>
    </tr>
   
    <tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;">
	  <td>
	  	<label >CELULAR:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	                  border-radius: 28px;padding: 3px 8px;" type="text" name="celular" required>
	  </td>
    </tr>
    
    <tr style="width: 200px; height: 40px;font-family: Montserrat-Medium;"> 
	  <td> 
	  	<label >CONTRASEÑA:</label>
	  </td>
	  <td>
	  	<input style="background-color: lightgray; -webkit-border-radius: 28; -moz-border-radius: 28; 
	                  border-radius: 28px;padding: 3px 8px;" type="text" name="contrasena" required>
	  </td>
    </tr>
</table>
<br>
    <input type="submit" value="Enviar" 
           style="background: #eb94d0; background-image: -webkit-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -moz-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -ms-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -o-linear-gradient(top, yellowgreen, #98FB98);
                background-image: linear-gradient(to bottom, yellowgreen, #98FB98);
                -webkit-border-radius: 28; -moz-border-radius: 28; border-radius: 28px;
                text-shadow: 4px 3px 2px #9daef5; -webkit-box-shadow: 7px 6px 25px black;
                -moz-box-shadow: 7px 6px 25px #666666; box-shadow: 7px 6px 25px #666666;
                font-family: Segoe UI; color: black; font-size: 100%; padding: 15px; text-decoration: none;
                font-weight: 900px; width: 100px">
</form>
</center>
</body>
</html>