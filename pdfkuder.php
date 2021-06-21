<?php

include("auth-admi.php");
$valor=$_GET["valor"];

require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 20
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(90,35,'Resultados Test de Kuder',0,0,'C');
    // Salto de línea
    $this->Ln(30);
}


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');//Usamos utf8_decode para que muestre con todo y tilde
}
}

require 'conexionmysqli.php';
$consulta="select a.*, r.* from k_alumno a, k_resultado r
where a.codalumno=r.codalumno and a.codalumno=$valor order by a.codalumno asc";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages(); //para que siempre se pueda generar los pie de pagina en cada pdf
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

//creamos un ciclo while para hacer un recorrido y traer los datos de la bd sispsico

while($row =$resultado->fetch_assoc()){
        $pdf->SetLeftMargin(20);
$pdf->Cell(36,20,'Datos del alumno:',0,0);
$pdf->Ln(20);
$pdf->Cell(60,10,utf8_decode('Código'), 1,0,'C',0);
$pdf->Cell(110,10,$row['codalumno'], 1,0,'C',0);
$pdf->Ln(10);
$pdf->Cell(60,10,utf8_decode('Nombre'), 1,0,'C',0);
$pdf->Cell(110,10,utf8_decode($row['nombre']), 1,0,'C',0);
$pdf->Ln(10);
$pdf->Cell(60,10,utf8_decode('Apellidos'), 1,0,'C',0);
$pdf->Cell(110,10,utf8_decode($row['apaterno']." ".$row['amaterno']), 1,1,'C',0);
$pdf->Cell(60,10,utf8_decode('Escuela'), 1,0,'C',0);
$pdf->Cell(110,10,utf8_decode($row['escuela']), 1,0,'C',0);

$pdf->Ln(20);

$pdf->Cell(36,20,'Resultados:',0,0);
$pdf->Ln(20);
$pdf->Cell(85,10,'Descripcion1', 1,0,'C',0);
$pdf->Cell(85,10,'Descripcion2', 1,0,'C',0);
$pdf->Ln(10);

$pdf->Cell(85,15,utf8_decode($row['descripcion1']), 1,0,'C',0);
$pdf->Cell(85,15,utf8_decode($row['descripcion2']), 1,0,'C',0);
$pdf->Ln(30);

    $pdf->Cell(170,10,utf8_decode('Combinación de intereses'), 1,1,'C',0);
$pdf->Cell(170,10,utf8_decode($row['combinacion_intereses']), 1,0,'C',0);
$pdf->Ln(20);
$pdf->AddPage();
}
$pdf->Output();
?>

