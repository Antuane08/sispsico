<?php 

include("conexion.php");

include("auth-admi.php");

/*$literario1="select count(descripcion1) from k_resultado where descripcion1 = 'Interés literario'";
$literario2="select count(descripcion2) from k_resultado where descripcion2 = 'Interés literario'";

$consulta1=mysql_query($literario1);
$consulta2=mysql_query($literario2);
$literario=$consulta+$consulta2;*/

$airelibre1="select codalumno from k_resultado where descripcion1 = 'Actividad al aire libre' and recomendacion='el test cumple'";
$airelibre2="select codalumno from k_resultado where descripcion2 = 'Actividad al aire libre' and recomendacion='el test cumple'";

$consulta1=mysql_query($airelibre1);
$consulta2=mysql_query($airelibre2);
$filas1=mysql_num_rows($consulta1);
$filas2=mysql_num_rows($consulta2);
$airelibre=$filas1+$filas2;



$mecanico1="select codalumno from k_resultado where descripcion1 = 'Interés mecánico-constructivo' and recomendacion='el test cumple'";
$mecanico2="select codalumno from k_resultado where descripcion2 = 'Interés mecánico-constructivo' and recomendacion='el test cumple'";

$consulta3=mysql_query($mecanico1);
$consulta4=mysql_query($mecanico2);
$filas3=mysql_num_rows($consulta3);
$filas4=mysql_num_rows($consulta4);
$mecanico=$filas3+$filas4;



$calculo1="select codalumno from k_resultado where descripcion1 = 'Interés por el cálculo' and recomendacion='el test cumple'";
$calculo2="select codalumno from k_resultado where descripcion2 = 'Interés por el cálculo' and recomendacion='el test cumple'";

$consulta5=mysql_query($calculo1);
$consulta6=mysql_query($calculo2);
$filas5=mysql_num_rows($consulta5);
$filas6=mysql_num_rows($consulta6);
$calculo=$filas5+$filas6;



$cientifico1="select codalumno from k_resultado where descripcion1 = 'Interés científico' and recomendacion='el test cumple'";
$cientifico2="select codalumno from k_resultado where descripcion2 = 'Interés científico' and recomendacion='el test cumple'";

$consulta7=mysql_query($cientifico1);
$consulta8=mysql_query($cientifico2);
$filas7=mysql_num_rows($consulta7);
$filas8=mysql_num_rows($consulta8);
$cientifico=$filas7+$filas8;


$persuasivo1="select codalumno from k_resultado where descripcion1 = 'Interés persuasivo' and recomendacion='el test cumple'";
$persuasivo2="select codalumno from k_resultado where descripcion2 = 'Interés persuasivo' and recomendacion='el test cumple'";

$consulta9=mysql_query($persuasivo1);
$consulta10=mysql_query($persuasivo2);
$filas9=mysql_num_rows($consulta9);
$filas10=mysql_num_rows($consulta10);
$persuasivo=$filas9+$filas10;


$artistico1="select codalumno from k_resultado where descripcion1 = 'Interés artístico-plástico' and recomendacion='el test cumple'";
$artistico2="select codalumno from k_resultado where descripcion2 = 'Interés artístico-plástico' and recomendacion='el test cumple'";

$consulta11=mysql_query($artistico1);
$consulta12=mysql_query($artistico2);
$filas11=mysql_num_rows($consulta11);
$filas12=mysql_num_rows($consulta12);
$artistico=$filas11+$filas12;


$literario1="select codalumno from k_resultado where descripcion1 = 'Interés literario' and recomendacion='el test cumple'";
$literario2="select codalumno from k_resultado where descripcion2 = 'Interés literario' and recomendacion='el test cumple'";

$consulta13=mysql_query($literario1);
$consulta14=mysql_query($literario2);
$filas13=mysql_num_rows($consulta13);
$filas14=mysql_num_rows($consulta14);
$literario=$filas13+$filas14;

$musical1="select codalumno from k_resultado where descripcion1 = 'Interés musical' and recomendacion='el test cumple'";
$musical2="select codalumno from k_resultado where descripcion2 = 'Interés musical' and recomendacion='el test cumple'";

$consulta15=mysql_query($musical1);
$consulta16=mysql_query($musical2);
$filas15=mysql_num_rows($consulta15);
$filas16=mysql_num_rows($consulta16);
$musical=$filas15+$filas16;


$social1="select codalumno from k_resultado where descripcion1 = 'Interés por el servicio social' and recomendacion='el test cumple'";
$social2="select codalumno from k_resultado where descripcion2 = 'Interés por el servicio social' and recomendacion='el test cumple'";

$consulta17=mysql_query($social1);
$consulta18=mysql_query($social2);
$filas17=mysql_num_rows($consulta17);
$filas18=mysql_num_rows($consulta18);
$social=$filas17+$filas18;


$oficina1="select codalumno from k_resultado where descripcion1 = 'Interés por el trabajo de oficina' and recomendacion='el test cumple'";
$oficina2="select codalumno from k_resultado where descripcion2 = 'Interés por el trabajo de oficina' and recomendacion='el test cumple'";

$consulta19=mysql_query($oficina1);
$consulta20=mysql_query($oficina2);
$filas19=mysql_num_rows($consulta19);
$filas20=mysql_num_rows($consulta20);
$oficina=$filas19+$filas20;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<br><br><br>

		<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 1000px;
    margin: 1em auto;
    margin-left: 150px;
}

#container {
    height: 490px;

    width: 1000px;
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
                <th>Resultado</th>
                <th>Cantidad</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <th>Actividad al aire libre</th>
                <th><?php echo $airelibre; ?></th>
            </tr>
            <tr>
                <th>Interés mecánico-constructivo</th>
                <th><?php echo $mecanico; ?></th>
            </tr>
            <tr>
                <th>Interés por el cálculo</th>
                <th><?php echo $calculo; ?></th>
            </tr>
            <tr>
                <th>Interés científico</th>
                <th><?php echo $cientifico; ?></th>
            </tr>
            <tr>
                <th>Interés persuasivo</th>
                <th><?php echo $persuasivo; ?></th>
            </tr>
            <tr>
                <th>Interés artístico</th>
                <th><?php echo $artistico; ?></th>
            </tr>
            <tr>
                <th>Interés literario</th>
                <th><?php echo $literario; ?></th>
            </tr>
            <tr>
                <th>Interés musical</th>
                <th><?php echo $musical; ?></th>
            </tr>
            <tr>
                <th>Interés social</th>
                <th><?php echo $social; ?></th>
            </tr>
            <tr>
                <th>Interés por el trabajo de oficina</th>
                <th><?php echo $oficina; ?></th>
            </tr>
        </tbody>
    </table>
</figure>



		<script type="text/javascript">
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Cantidad de alumnos por tipo de resultados'
    },
    subtitle: {
        text: ' Haz click en las columnas para ver las cantidades'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Cantidad de alumnos'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b><br/>'
    },

    series: [
        {
            name: "Cantidad",
            colorByPoint: true,
            data: [
                {
                    name: "Actividad al aire libre",
                    y: <?php echo $airelibre; ?>,
                },
                {
                    name: "Interés mecánico-constructivo",
                    y: <?php echo $mecanico; ?>,
                },
                {
                    name: "Interés por el cálculo",
                    y: <?php echo $calculo; ?>,
                },
                {
                    name: "Interés científico",
                    y: <?php echo $cientifico; ?>,
                },
                {
                    name: "Interés persuasivo",
                    y: <?php echo $persuasivo; ?>,
                },
                {
                    name: "Interés artístico-plástico",
                    y: <?php echo $artistico; ?>,
                },
                {
                    name: "Interés literario",
                    y: <?php echo $literario; ?>,
                },
                {
                    name: "Interés musical",
                    y: <?php echo $musical; ?>,
                },
                {
                    name: "Interés por el servicio social",
                    y: <?php echo $social; ?>,
                },
                {
                    name: "Interés por el trabajo de oficina",
                    y: <?php echo $oficina; ?>,
                }

            ]
        }
    ]
});
		</script>
	</body>
</html>
