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
<body style="background-color: white;">

<header class="titulo" style="background-color:yellowgreen; height: 120px; color:black; margin-top: 143px;">
  <center><br><br><p>Listado de alumnos</p></center>
</header>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br>
<div style="right: 90px; top: 300px; bottom: auto; position: fixed;">
<form action="anadir.php" method="POST">
    <tr>
    <td><input type="submit" value="Añadir Alumno" name="btn_search"
           style="background: #eb94d0; background-image: -webkit-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -moz-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -ms-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -o-linear-gradient(top, yellowgreen, #98FB98);
                background-image: linear-gradient(to bottom, yellowgreen, #98FB98);
                -webkit-border-radius: 28; -moz-border-radius: 28; border-radius: 28px;
                text-shadow: 3px 2px 1px #9daef5; -webkit-box-shadow: 6px 5px 24px black;
                -moz-box-shadow: 6px 5px 24px #666666; box-shadow: 6px 5px 24px #666666;
                font-family: Segoe UI; color: black; font-size: 100%; padding: 12px; text-decoration: none;
                font-weight: 900px;"></td>
    </tr>
</form>
</div>

<br>
<br>
<div style="right: 510px; top: 300px; bottom: auto; position: fixed; ">
<form action="buscar_alumno.php" method="GET" align="center" style="display: -webkit-flex;
display: -moz-flex; display: -o-flex;display: flex;float: right;background: initial;
  padding: 10px;border-radius: 10px;"> 
  <tr>
  <td><input type="text" name="busqueda" placeholder="Buscar alumno..." 
         style="border-style: black; font-size: 100%; font-family: Arial; padding: 3px 8px; border: gray 3px solid;
                border-radius: 10px;"></td>
  <td><input type="submit" value="Buscar" name="btn_search" class="btn"
         style="background: #eb94d0; background-image: -webkit-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -moz-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -ms-linear-gradient(top, yellowgreen, #98FB98);
                background-image: -o-linear-gradient(top, yellowgreen, #98FB98);
                background-image: linear-gradient(to bottom, yellowgreen, #98FB98);
                -webkit-border-radius: 28; -moz-border-radius: 28; border-radius: 28px;
                text-shadow: 3px 2px 1px #9daef5; -webkit-box-shadow: 6px 5px 24px black;
                -moz-box-shadow: 6px 5px 24px #666666; box-shadow: 6px 5px 24px #666666;
                font-family: Segoe UI; color: black; font-size: 100%; padding: 10px; text-decoration: none;
                font-weight: 900px;
                "></td>
  </tr>
</form>
</div>
<br>
<br>
<br>
<center>
<table border="2" style="width: 1200px; height: 80px; background: linear-gradient(to top, #98FB98 20%, white);                       padding: 3px 10px; border: yellowgreen 5px double; border-top-left-radius: 20px;                       border-bottom-right-radius: 20px;" align="center">
  <tr align="center">
    <th style="font-family: Segoe UI">CODIGO</th>
    <th style="font-family: Segoe UI">NOMBRE</th>
    <th style="font-family: Segoe UI">APELLIDO PATERNO</th>
    <th style="font-family: Segoe UI">APELLIDO MATERNO</th>
    <th style="font-family: Segoe UI">ESCUELA</th>
    <th style="font-family: Segoe UI">CELULAR</th>
    <th style="font-family: Segoe UI">OPCIONES</th>
  </tr>

  <?php 
     include("conexion.php");  
     
    if(isset($_GET["limite"]))
      {
       $l=$_GET["limite"];
       $sql="select*
       from k_alumno limit $l,5 ";
        }
    else{
       $sql="select*
       from k_alumno limit 0,5 ";
        }
    $fila=mysql_query($sql,$cn);

       

       while ($r=mysql_fetch_array($fila)) {
        ?>
    <tr align="center">
      <td><?php echo $r["codalumno"]; ?></td>
      <td><?php echo $r["nombre"]; ?></td>
        <td><?php echo $r["apaterno"]; ?></td>
        <td><?php echo $r["amaterno"]; ?></td>
        <td><?php echo $r["escuela"]; ?></td>
        <td><?php echo $r["celular"]; ?></td>
        <td>
          <a href="editaralumno.php?valor=<?php echo $r["codalumno"]; ?>" target="_parent">
          |<img src="img/lapiz editar.png" alt="" height="30px" width="30px"></a>


          <a href="eliminaralumno.php?valor=<?php echo $r["codalumno"]; ?>" target="_parent" onclick='confirm("desea eliminar")'><img src="img/eliminar.png" alt="" height="30px" width="30px"></a>
        </td>
    </tr>
         

        <?php 
       }
        ?>
</table>
</center>
<br>
<br>
<center>
  
<?php 

$sqltotal= "select*
       from k_alumno";
$fil=mysql_query($sqltotal);
$total=mysql_num_rows($fil);

$cant=5;
$npaginas=ceil($total/$cant);

for ($i=0; $i <$npaginas ; $i++) { 
  $lim=$i*$cant;


echo "<a href=practicas.php?limite=$lim>".($i+1)."</a>&nbsp;&nbsp;&nbsp;";
}


?>
</div>
</center>
</body>
</html>