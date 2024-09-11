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
    $this->Cell(90,10,'REPORTE DE COMPRAS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    $this->SetFillColor(233,229,235);
    $this->SetFont('Arial','B',14);
    $this->Cell(20, 10, 'Id', 1, 0, 'C', 1);
    $this->Cell(45, 10, 'Fecha', 1, 0, 'C', 1);
    $this->Cell(30, 10, 'Estatus', 1, 0, 'C', 1);
    $this->Cell(45, 10, 'Correo', 1, 0, 'C', 1);
    $this->Cell(30, 10, 'Cliente', 1, 0, 'C', 1);
    $this->Cell(25, 10, 'Total', 1, 1, 'C', 1);
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
$sql = "SELECT id_transaccion, fecha, status, correo, id_cliente, total FROM compra" ;
$datos = mysqli_query($conexion, $sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while($row = $datos->fetch_assoc()){
    $pdf->Cell(20, 10, $row['id_transaccion'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['fecha'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['status'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['correo'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['id_cliente'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['total'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
