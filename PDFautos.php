<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.jpeg',10,8,25);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(90,10,'SAFER COMPANY',0,0,'C');
    $this->Ln(10);

    $this->Cell(60);
    $this->Cell(90,10,'REPORTE DEL INVENTARIO',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    $this->SetFillColor(233,229,235);
    $this->SetFont('Arial','B',14);
    $this->Cell(50, 10, 'Marca', 1, 0, 'C', 1);
    $this->Cell(50, 10, 'Modelo', 1, 0, 'C', 1);
    $this->Cell(30, 10, 'Precio', 1, 0, 'C', 1);
    $this->Cell(30, 10, 'Estatus', 1, 1, 'C', 1);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Pág ').$this->PageNo().'/{nb}',0,0,'C');
}
}

include "conexion.php";
$sql = "SELECT marca, modelo, precio, activo FROM autos" ;
$datos = mysqli_query($conexion, $sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while($row = $datos->fetch_assoc()){
    $pdf->Cell(50, 10, $row['marca'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['modelo'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['activo'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
