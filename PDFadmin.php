<?php
require ('fpdf/fpdf.php');

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
    $this->Cell(85);
    // Título
    $this->Cell(100,10,'SAFER COMPANY',0,0,'C');
    $this->Ln(10);

    $this->Cell(85);
    $this->Cell(100,10,'REPORTE DE USUARIOS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    $this->SetFillColor(233,229,235);
    $this->SetFont('Arial','B',14);
    $this->Cell(30, 10, 'Nombre', 1, 0, 'C', 1);
    $this->Cell(30, 10, 'Paterno', 1, 0, 'C', 1);
    $this->Cell(30, 10, 'Materno', 1, 0, 'C', 1);
    $this->Cell(60, 10, 'Correo', 1, 0, 'C', 1);
    $this->Cell(27, 10, 'Telefono', 1, 0, 'C', 1);
    $this->Cell(22, 10, 'Genero', 1, 0, 'C', 1);
    $this->Cell(22, 10, 'Pais', 1, 0, 'C', 1);
    $this->Cell(30,10, 'Rol', 1, 0, 'C', 1);
    $this->Cell(30, 10, 'Usuario', 1, 1, 'C', 1);
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
$sql = "SELECT nombre, paterno, materno, correo, telefono, genero, pais, rol, usuario FROM administradores";
$resultado = mysqli_query($conexion, $sql);

$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while ($row = $resultado->fetch_assoc()){
    $pdf->Cell(30, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['paterno'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['materno'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10, $row['correo'], 1, 0, 'C', 0);
    $pdf->Cell(27, 10, $row['telefono'], 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['genero'], 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['pais'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['rol'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['usuario'], 1, 1, 'C', 0);
}

$pdf->Output();
?>