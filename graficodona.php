<?php 

include("conexion.php");
include("auth-admi.php");

$totalsi="select distinct a.codalumno from k_alumno a, k_test t where a.codalumno=t.codalumno and t.estado_test='inhabilitado'";

$consulta=mysql_query($totalsi);
$cantidadsi=mysql_num_rows($consulta);

$totalno="select a.codalumno from k_alumno a where a.codalumno not in ( select distinct a.codalumno from k_alumno a, k_test t where a.codalumno=t.codalumno and t.estado_test='inhabilitado')";
$consulta2=mysql_query($totalno);
$cantidadno=mysql_num_rows($consulta2);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<br><br><br><br>
		<style type="text/css">
#container {
  height: 400px; 
}


#datatable {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
#datatable caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
#datatable th {
    font-weight: 600;
    padding: 0.5em;
}
#datatable td, #datatable th, #datatable caption {
    padding: 0.5em;
}
#datatable thead tr, #datatable tr:nth-child(even) {
    background: #f8f8f8;
}
#datatable tr:hover {
    background: #f1f7ff;
}

		</style>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script src="https://code.highcharts.com/highcharts-3d.js"></script>

<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
    </p>

   <table id="datatable" cellspacing="2">
        <thead>
            <tr>
                <th></th>
                <th>Cantidad</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <th>Si</th>
                <th><?php echo $cantidadsi; ?></th>
            </tr>
            <tr>
                <th>No</th>
                <th><?php echo $cantidadno; ?></th>
            </tr>
        </tbody>
    </table>
</figure>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Cantidad de alumnos que realizaron el test y cantidad de quienes no lo realizaron'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Cantidad',
        data: [
            ['Si', <?php echo $cantidadsi; ?>],
            ['No', <?php echo $cantidadno; ?>],
        ]
    }]
});
		</script>
	</body>
</html>
