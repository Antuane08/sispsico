<?php
include("auth-admi.php");
include("conexion.php");
//include("cabeceraadmin.php");
$escuela=$_POST["lsthe"];
$totalsi="select distinct a.codalumno from k_alumno a INNER JOIN k_test t ON a.codalumno = t.codalumno WHERE a.escuela = '$escuela' AND t.estado_test = 'inhabilitado'";

$consulta=mysql_query($totalsi);
$cantidadsi=mysql_num_rows($consulta);

$totalno="select a.codalumno from k_alumno a where a.codalumno not in (select distinct a.codalumno from k_alumno a INNER JOIN k_test t ON a.codalumno = t.codalumno WHERE a.escuela = '$escuela' AND t.estado_test = 'inhabilitado') and a.escuela= '$escuela'";
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

<br><br><br>
<center><h1>Gráfico de <?php echo $escuela ?></h1></center>
        <style type="text/css">
#container {
    height: 400px;
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
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
    </head>
    <body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
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
                <th>Si</th>
                <th>No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dieron Test</td>
                <td><?php echo $cantidadsi; ?></td>
                <td><?php echo $cantidadno; ?></td>
            </tr>
        </tbody>
    </table>
</figure>


        <script type="text/javascript">
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Cantidad de alumnos por escuela que realizaron la evaluación y quienes no.'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Cantidad de Alumnos'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
        </script>
    </body>
</html>